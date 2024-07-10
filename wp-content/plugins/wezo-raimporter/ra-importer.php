<?php
/*
Plugin Name: RA Importer
Plugin URI: https://wezo.com.br/
Description: Plugin to import store data into custom post type 'loja' via a custom REST API endpoint.
Version: 1.0
Author: Weslley Alves
Author URI: https://wezo.com.br
Text Domain: wezoalves
*/

if (! defined('ABSPATH')) {
    exit;
}

function decode_id($encoded)
{

    $base64 = strtr($encoded, '-_', '+/');


    $mod = strlen($base64) % 4;
    if ($mod) {
        $base64 .= str_repeat('=', 4 - $mod);
    }


    $binary_data = base64_decode($base64);


    $data = unpack('N', $binary_data);

    return $data[1];
}


add_action('plugins_loaded', 'wezoalves_importer_load_textdomain');
function wezoalves_importer_load_textdomain()
{
    load_plugin_textdomain('wezoalves', false, dirname(plugin_basename(__FILE__)) . '/languages/');
}


function import_lojas_from_json()
{

    $store_key = 'store_';


    $json_url = 'https://ramais-api.reclameaqui.com.br/v2/coupons/store/summary';


    $response = wp_remote_get($json_url);

    if (is_wp_error($response)) {
        return new WP_Error('json_fetch_error', __('Erro ao obter o JSON', 'wezoalves'));
    }

    $json_data = wp_remote_retrieve_body($response);
    $lojas = json_decode($json_data, true);

    if (empty($lojas)) {
        return new WP_Error('json_decode_error', __('JSON está vazio ou não é válido', 'wezoalves'));
    }

    foreach ($lojas as $loja) {

        $existing_post = get_posts([
            'post_type' => 'loja',
            'meta_query' => [
                [
                    'key' => $store_key . 'ra_storeid',
                    'value' => $loja['store_id']
                ]
            ]
        ]);

        if (! empty($existing_post)) {
            $post_id = $existing_post[0]->ID;
        } else {

            $post_id = wp_insert_post([
                'post_title' => $loja['store_name'],
                'post_type' => 'loja',
                'post_status' => 'publish'
            ]);
        }
 
        update_post_meta($post_id, $store_key . 'description', null);
        update_post_meta($post_id, $store_key . 'domain', $loja['store_url']);
        update_post_meta($post_id, $store_key . 'url', "https://www." . $loja['store_url']);

        update_post_meta($post_id, $store_key . 'ra_storeid', decode_id($loja['store_id']));
        update_post_meta($post_id, $store_key . 'ra_shortname', $loja['shortname']);
        update_post_meta($post_id, $store_key . 'ra_score', $loja['reputation']['average_score']);

        update_post_meta($post_id, $store_key . 'comission', null);
        update_post_meta($post_id, $store_key . 'email', '');
        update_post_meta($post_id, $store_key . 'affiliate', null);


        if (! empty($loja['img_url'])) {
            $image_id = media_sideload_image($loja['img_url'], $post_id, $loja['store_name'], 'id');
            if (! is_wp_error($image_id)) {
                update_post_meta($post_id, $store_key . 'logo', wp_get_attachment_url($image_id));
            }
        }
    }

    return true;
}


add_action('rest_api_init', function () {
    register_rest_route('ra-importer/v1', '/stores', [
        'methods' => 'GET',
        'callback' => 'handle_import_lojas_request'
    ]);
});

function handle_import_lojas_request(WP_REST_Request $request)
{
    $result = import_lojas_from_json();

    if (is_wp_error($result)) {
        return new WP_REST_Response(['error' => $result->get_error_message()], 500);
    }

    return new WP_REST_Response(['message' => __('Importação concluída com sucesso', 'wezoalves')], 200);
}


if (! function_exists('media_sideload_image')) {
    require_once ABSPATH . 'wp-admin/includes/media.php';
    require_once ABSPATH . 'wp-admin/includes/file.php';
    require_once ABSPATH . 'wp-admin/includes/image.php';
}
