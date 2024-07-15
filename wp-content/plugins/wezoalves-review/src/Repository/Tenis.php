<?php

namespace Review\Repository;

use Review\Utils\TypeTenis;
use Review\Utils\RatingTenis;
use Review\Repository\Store;

final class Tenis
{
    public function getById($post_id)
    {
        $post = get_post($post_id);
        $cpt_tenis_key = 'tenis';
        $post_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
        $priceregular = get_post_meta($post_id, $cpt_tenis_key . '_priceregular', true);
        $brand = get_post_meta($post_id, $cpt_tenis_key . '_brand', true);
        $description = get_post_meta($post_id, $cpt_tenis_key . '_description', true);
        $classification = get_post_meta($post_id, $cpt_tenis_key . '_classification', true);
        $characteristics = get_post_meta($post_id, $cpt_tenis_key . '_characteristics', true);
        $benefits = get_post_meta($post_id, $cpt_tenis_key . '_benefits', true);
        $offers = get_post_meta($post_id, $cpt_tenis_key . '_offers', true);
        $gallery = get_post_meta($post_id, $cpt_tenis_key . '_images', true);
        $typeId = get_post_meta($post_id, $cpt_tenis_key . '_type', true);
        $type = TypeTenis::getById($typeId);



        /**
         * Classification Explained
         */
        $classificationExplained = [];
        foreach ($classification as $key => $value) :
            $rating = RatingTenis::getById($key);
            $classificationExplained[$key] = [
                "id" => $key,
                "value" => $value,
                "description" => $rating['description'],
                "name" => $rating['name']
            ];
        endforeach;



        if ($gallery) :
            $gallery = explode(",", $gallery);
        endif;

        $brandData = (new Store())->getById($brand);



        /**
         * Populate List Offers to Tenis
         */
        $offersList = [];
        foreach ($offers as $offer) :
            $discount = 0;
            if ($priceregular && isset($offer['preco']) && $offer['preco']) :
                $descontoValor = $priceregular - $offer['preco'];
                $discount = ($descontoValor / $priceregular) * 100;
                $discount = round($discount, 0, PHP_ROUND_HALF_UP);
            endif;

            $offersList[] = [
                "store" => (new Store())->getById($offer['loja']),
                "store_id" => $offer['loja'],
                "price" => $offer['preco'],
                "price_formated" => number_format($offer['preco'], 2, ',', '.'),
                "url" => $offer['url'],
                "discount" => $discount,
            ];
        endforeach;



        /**
         * Populate best price
         */
        $bestPrice = array_reduce($offersList, function ($carry, $item) {
            if ($carry === null || $item['price'] < $carry['price']) {
                return $item;
            }
            return $carry;
        });

        return [
            "id" => $post_id,
            "key_cpt" => $cpt_tenis_key,
            "type" => $type,
            "image" => $post_image,
            "gallery" => $gallery,
            "description" => $description,
            "classification" => $classification,
            "classification_explained" => $classificationExplained,
            "characteristics" => $characteristics,
            "benefits" => $benefits,
            "price_regular" => $priceregular ?? 0,
            "offer_best" => $bestPrice,
            "offers" => $offersList,
            "brand" => $brandData,
            "title" => get_the_title($post->ID),
            "content" => get_the_content($post->ID),
            "link" => get_permalink($post->ID),
        ];
    }
}
