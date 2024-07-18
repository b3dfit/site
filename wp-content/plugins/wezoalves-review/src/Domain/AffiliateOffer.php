<?php

namespace Review\Domain;

use Review\Repository\Store;

/**
 * Class AffiliateOffer
 * 
 * This class is responsible for handling the logic related to generating affiliate URLs based on store ID and other parameters.
 */
final class AffiliateOffer
{
    public ?string $url = null;
    public ?int $storeId = null;
    public ?string $source = null;

    /**
     * Constructor for AffiliateOffer.
     * 
     * @param string|null $url The base URL for the offer.
     * @param int|null $storeId The ID of the store.
     * @param string|null $source The source parameter for tracking.
     */
    public function __construct(?string $url = null, ?int $storeId = null, ?string $source = null)
    {
        $this->url = $url;
        $this->storeId = $storeId;
        $this->source = $source;
    }

    /**
     * Generates the affiliate URL based on the store ID and other parameters.
     * 
     * @return string The generated affiliate URL.
     */
    public function getUrl() : string
    {
        $url = $this->url;
        $storeProgram = (new Store())->getById($this->storeId);



        if (isset($storeProgram['affiliatePrograms'])) {

            $bestProgram = $this->getBestProgram($storeProgram['affiliatePrograms']);

            // Construct the URL using the best affiliate program
            if ($bestProgram->getPlatform()) {
                $platformKey = $bestProgram->getPlatform();
                $className = "Review\\Affiliate\\" . ucwords(strtolower(trim($platformKey)));

                if (class_exists($className)) {
                    $url = (new $className($bestProgram->getAdvertiserId(), $bestProgram->getPublisherId(), $this->source))->getUrl($url);
                }
            }
        }

        return $url;
    }

    /**
     * Selects the best affiliate program based on the highest commission.
     * 
     * @param array $programs The list of affiliate programs.
     * @return array The best affiliate program.
     */
    private function getBestProgram(array $programs) : \Review\Model\AffiliateProgram
    {
        return array_reduce($programs, function ($carry, $item) {
            return ($carry === null || intval($item->getComission()) > intval($carry->getComission())) ? $item : $carry;
        });
    }
}
