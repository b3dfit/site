<?php

function theme_enqueue_styles()
{
    wp_enqueue_style('tailwindcss', '/files/dist/css/output.css', array(), '1.0.1', 'all');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


add_theme_support('responsive-embeds');


function estimated_reading_time()
{

    $post = get_post();

    $words = count(preg_split('/\s+/', strip_tags($post->post_content)));
    $minutes = floor($words / 200);
    $seconds = floor($words % 200 / (200 / 60));

    if (1 <= $minutes) {
        $estimated_time = ($minutes == 1 ? '1 minuto' : $minutes . ' ' . 'minutos') . ' ' . ($seconds == 1 ? '1 segundo' : $seconds . ' ' . 'segundos');
    } else {
        $estimated_time = $seconds . 'segundo';
    }

    return $estimated_time;

}


add_action('after_setup_theme', 'mytheme_add_theme_support');
function mytheme_add_theme_support()
{
    add_theme_support('post-thumbnails');
}


function getUrlByName($name)
{

    $urls = [
        "twitter" => "https://www.x.com/#twitter",
        "github" => "https://www.github.com/#github",
        "slack" => "https://www.slack.com/#slack",
        "politicacookies" => getPageUrlBySlug('legal/politica-de-cookies'),
        "desenvolvedor" => getPageUrlBySlug('desenvolvedor'),
        "legal" => getPageUrlBySlug('legal'),
        "diretrizescomunidade" => getPageUrlBySlug('legal/diretrizes-da-comunidade'),
        "políticacookies" => getPageUrlBySlug('legal/politica-de-cookies'),
        "políticaprivacidade" => getPageUrlBySlug('legal/politica-de-privacidade'),
        "termosuso" => getPageUrlBySlug('legal/termos-de-uso'),
        "sobre" => getPageUrlBySlug('sobre-nos'),
        "suporte" => getPageUrlBySlug('suporte-e-ajuda'),
        "contato" => '#',
    ];

    return isset($urls[$name]) ? $urls[$name] : '#not-found';
}

function getPageUrlBySlug($slug)
{
    $page = get_page_by_path($slug);
    return $page ? get_permalink($page->ID) : null;
}

/* remove emoji */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');


/* remove classic */
add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('classic-theme-styles');
}, 20);

/*  disable gutenberg */
function wps_deregister_styles()
{
    wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'wps_deregister_styles', 100);


/* remove wp-block-library-css */
function remove_block_css()
{
    wp_dequeue_style('wp-block-library');
}
add_action('wp_enqueue_scripts', 'remove_block_css', 100);


/* remove admin-bar-inline-css */
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('after_setup_theme', function () {
    add_theme_support('admin-bar', ['callback' => '__return_false']);
});