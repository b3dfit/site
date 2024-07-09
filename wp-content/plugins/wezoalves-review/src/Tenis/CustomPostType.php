<?php
// Registra o Custom Post Type "Tênis"
function cpt_tenis_init() {
    $labels = array(
        'name' => 'Tênis',
        'singular_name' => 'Tênis',
        'menu_name' => 'Tênis',
        'name_admin_bar' => 'Tênis',
        'add_new' => 'Adicionar Novo',
        'add_new_item' => 'Adicionar Novo Tênis',
        'new_item' => 'Novo Tênis',
        'edit_item' => 'Editar Tênis',
        'view_item' => 'Ver Tênis',
        'all_items' => 'Todos os Tênis',
        'search_items' => 'Procurar Tênis',
        'not_found' => 'Nenhum tênis encontrado.',
        'not_found_in_trash' => 'Nenhum tênis encontrado na lixeira.'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-post',
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true
    );

    register_post_type('tenis', $args);
}
add_action('init', 'cpt_tenis_init');