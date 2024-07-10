<?php

$store_key = 'store';

// Salva os dados dos Metaboxes
function cpt_lojas_save_details($post_id)
{

    global $store_key;

    if (! isset($_POST['cpt_lojas_details_nonce']) || ! wp_verify_nonce($_POST['cpt_lojas_details_nonce'], 'cpt_lojas_save_details')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (! current_user_can('edit_post', $post_id)) {
        return;
    }

    $logo = sanitize_text_field($_POST[$store_key . '_logo']);
    $description = sanitize_textarea_field($_POST[$store_key . '_description']);
    $domain = sanitize_text_field($_POST[$store_key . '_domain']);
    $url = esc_url_raw($_POST[$store_key . '_url']);
    $comissao = floatval($_POST[$store_key . '_comission']);
    $email = sanitize_email($_POST[$store_key . '_email']);
    $ra_shortname = sanitize_text_field($_POST[$store_key . '_ra_shortname']);
    $ra_storeid = sanitize_text_field($_POST[$store_key . '_ra_storeid']);
    $ra_score = sanitize_text_field($_POST[$store_key . '_ra_score']);
    $programas = isset($_POST[$store_key . '_affiliate']) ? array_map(function ($programa) {
        return array(
            'plataforma' => sanitize_text_field($programa['plataforma']),
            'id_advertiser' => sanitize_text_field($programa['id_advertiser']),
            'id_publisher' => sanitize_text_field($programa['id_publisher']),
        );
    }, $_POST[$store_key . '_affiliate']) : null;

    update_post_meta($post_id, $store_key . '_logo', $logo);
    update_post_meta($post_id, $store_key . '_description', $description);
    update_post_meta($post_id, $store_key . '_domain', $domain);
    update_post_meta($post_id, $store_key . '_url', $url);
    update_post_meta($post_id, $store_key . '_comission', $comissao);
    update_post_meta($post_id, $store_key . '_email', $email);
    update_post_meta($post_id, $store_key . '_affiliate', $programas);
    update_post_meta($post_id, $store_key . '_ra_shortname', $ra_shortname);
    update_post_meta($post_id, $store_key . '_ra_storeid', $ra_storeid);
    update_post_meta($post_id, $store_key . '_ra_score', $ra_score);



}
add_action('save_post', 'cpt_lojas_save_details');