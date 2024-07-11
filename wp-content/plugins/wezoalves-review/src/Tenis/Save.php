<?php

$store_key = 'tenis';

function cpt_tenis_save_details($post_id)
{
    if (! isset($_POST['cpt_tenis_details_nonce']) || ! wp_verify_nonce($_POST['cpt_tenis_details_nonce'], 'cpt_tenis_save_details')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (! current_user_can('edit_post', $post_id)) {
        return;
    }

    $descricao = sanitize_textarea_field($_POST['descricao']);
    $classificacao = array_map('sanitize_text_field', $_POST['classificacao']);
    $caracteristicas = sanitize_textarea_field($_POST['caracteristicas']);
    $beneficios = sanitize_textarea_field($_POST['beneficios']);
    $ofertas = array_map(function ($oferta) {
        return array(
            'loja' => sanitize_text_field($oferta['loja']),
            'preco' => floatval($oferta['preco']),
            'url' => esc_url_raw($oferta['url']),
        );
    }, $_POST['ofertas']);
    $imagens = sanitize_text_field($_POST['imagens']);

    update_post_meta($post_id, '_cpt_tenis_descricao', $descricao);
    update_post_meta($post_id, '_cpt_tenis_classificacao', $classificacao);
    update_post_meta($post_id, '_cpt_tenis_caracteristicas', $caracteristicas);
    update_post_meta($post_id, '_cpt_tenis_beneficios', $beneficios);
    update_post_meta($post_id, '_cpt_tenis_ofertas', $ofertas);
    update_post_meta($post_id, '_cpt_tenis_imagens', $imagens);
}
add_action('save_post', 'cpt_tenis_save_details');