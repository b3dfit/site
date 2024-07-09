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
    $descricao = sanitize_textarea_field($_POST[$store_key . '_description']);
    $site = esc_url_raw($_POST[$store_key . '_domain']);
    $url = esc_url_raw($_POST[$store_key . '_url']);
    $comissao = floatval($_POST[$store_key . '_comission']);
    $email = sanitize_email($_POST[$store_key . '_email']);
    $programas = array_map(function ($programa) {
        return array(
            'plataforma' => sanitize_text_field($programa['plataforma']),
            'id_advertiser' => sanitize_text_field($programa['id_advertiser']),
            'id_publisher' => sanitize_text_field($programa['id_publisher']),
        );
    }, $_POST[$store_key . '_affiliate']);

    update_post_meta($post_id, $store_key . '_logo', $logo);
    update_post_meta($post_id, $store_key . '_description', $descricao);
    update_post_meta($post_id, $store_key . '_domain', $site);
    update_post_meta($post_id, $store_key . '_url', $url);
    update_post_meta($post_id, $store_key . '_comission', $comissao);
    update_post_meta($post_id, $store_key . '_email', $email);
    update_post_meta($post_id, $store_key . '_affiliate', $programas);
}
add_action('save_post', 'cpt_lojas_save_details');