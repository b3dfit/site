<?php

function theme_enqueue_styles()
{
    wp_enqueue_style('tailwindcss', '/files/dist/css/output.css', array(), '3.4.4.' . date('W.d'), 'all');
    //wp_enqueue_style('preline-tailwindcss', 'https://preline.co/assets/css/main.min.css', array(), '3.4.1.' . rand(0, 999), 'all');
    

    wp_enqueue_script('preline', get_template_directory_uri() . '/assets/js/preline.js', [], null, true);
    wp_enqueue_script('theme', get_template_directory_uri() . '/assets/js/theme.js', [], null, true);
    wp_enqueue_script('utilstheme', get_template_directory_uri() . '/assets/js/utils.js', [], null, true);

    if (is_custom_page('login')) :
        wp_enqueue_script('page-login', get_template_directory_uri() . '/assets/js/page-login.js', [], null, true);
    endif;

    if (is_custom_page('cadastro')) :
        wp_enqueue_script('page-login', get_template_directory_uri() . '/assets/js/page-singup.js', [], null, true);
    endif;

}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


add_theme_support('responsive-embeds');
add_theme_support('title-tag');

function estimated_reading_time()
{

    $post = get_post();

    $words = count(preg_split('/\s+/', strip_tags($post->post_content)));
    $minutes = floor($words / 200);
    $seconds = floor($words % 200 / (200 / 60));

    if (1 <= $minutes) {
        $estimated_time = ($minutes == 1 ? ' 1 minuto' : $minutes . ' ' . 'minutos') . ' ' . ($seconds == 1 ? '1 segundo' : $seconds . ' ' . 'segundos');
    } else {
        $estimated_time = $seconds . ' segundos';
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
        "twitter" => "https://www.x.com/b3dfit",
        "instagram" => "https://www.instagram.com/b3dfit",
        "github" => "https://github.com/b3dfit",
        "threads" => "https://www.threads.net/@b3dfit",
        "slack" => "https://www.slack.com/#slack",
        "facebook" => "https://www.facebook.com/profile.php?id=61562854045242",
        "politicacookies" => getPageUrlBySlug('legal/politica-de-cookies'),
        "desenvolvedor" => getPageUrlBySlug('desenvolvedor'),
        "legal" => getPageUrlBySlug('legal'),
        "diretrizescomunidade" => getPageUrlBySlug('legal/diretrizes-da-comunidade'),
        "políticacookies" => getPageUrlBySlug('legal/politica-de-cookies'),
        "políticaprivacidade" => getPageUrlBySlug('legal/politica-de-privacidade'),
        "termosuso" => getPageUrlBySlug('legal/termos-de-uso'),
        "sobre" => getPageUrlBySlug('sobre-nos'),
        "suporte" => getPageUrlBySlug('suporte-e-ajuda'),
        "loja" => getCustomTypeSlug('loja'),
        "cupom" => getCustomTypeSlug('cupom'),
        "contato" => '#',
        'dashboard' => '#dashboard',
        "login" => getPageUrlBySlug('login'),
        "artigos" => getPageUrlBySlug('artigos'),
        "tenis" => getCustomTypeSlug('tenis'),
        "cadastro" => getPageUrlBySlug('cadastro'),
    ];

    return isset($urls[$name]) ? $urls[$name] : '#not-found';
}

function getPageUrlBySlug($slug)
{
    $page = get_page_by_path($slug);
    return $page ? get_permalink($page->ID) : null;
}
function getCustomTypeSlug($customPostType)
{
    $post_type_object = get_post_type_object($customPostType);
    $url = null;
    if ($post_type_object && ! empty($post_type_object->rewrite['slug'])) {
        $url = trailingslashit(get_site_url()) . $post_type_object->rewrite['slug'];
    }
    return $url;
}
function getStarRating($score)
{
    // Definir os SVGs para estrela cheia, meia estrela e estrela vazia
    $fullStar = '<svg class="size-4 h-auto dark:fill-white fill-zinc-950" viewBox="0 0 51 51" xmlns="http://www.w3.org/2000/svg"><path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" /></svg>';
    $halfStar = '<svg class="size-4 h-auto dark:fill-white fill-zinc-950" viewBox="0 0 51 51" xmlns="http://www.w3.org/2000/svg"><path d="M49.6867 20.0305C50.2889 19.3946 49.9878 18.1228 49.0846 18.1228L33.7306 15.8972C33.4296 15.8972 33.1285 15.8972 32.8275 15.2613L25.9032 0.317944C25.6021 0 25.3011 0 25 0V42.6046C25 42.6046 25.3011 42.6046 25.6021 42.6046L39.7518 49.9173C40.3539 50.2352 41.5581 49.5994 41.2571 48.6455L38.5476 32.4303C38.5476 32.1124 38.5476 31.7944 38.8486 31.4765L49.6867 20.0305Z" fill="transparent" /><path d="M0.313299 20.0305C-0.288914 19.3946 0.0122427 18.1228 0.915411 18.1228L16.2694 15.8972C16.5704 15.8972 16.8715 15.8972 17.1725 15.2613L24.0968 0.317944C24.3979 0 24.6989 0 25 0V42.6046C25 42.6046 24.6989 42.6046 24.3979 42.6046L10.2482 49.9173C9.64609 50.2352 8.44187 49.5994 8.74292 48.6455L11.4524 32.4303C11.4524 32.1124 11.4524 31.7944 11.1514 31.4765L0.313299 20.0305Z" /></svg>';
    $emptyStar = '<svg class="size-4 h-auto dark:fill-white fill-zinc-950" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 256 256" xml:space="preserve"><g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)"><path d="M 19.817 88.005 c -0.879 0 -1.752 -0.275 -2.498 -0.818 c -1.321 -0.959 -1.97 -2.555 -1.694 -4.165 l 4.315 -25.161 c 0.072 -0.419 -0.067 -0.846 -0.371 -1.143 L 1.289 38.899 c -1.169 -1.14 -1.582 -2.812 -1.077 -4.365 c 0.505 -1.553 1.822 -2.663 3.437 -2.898 l 25.263 -3.671 c 0.421 -0.061 0.784 -0.325 0.972 -0.707 L 41.182 4.367 C 41.905 2.903 43.367 1.994 45 1.994 c 1.633 0 3.096 0.909 3.818 2.373 L 60.116 27.26 c 0.188 0.382 0.551 0.645 0.972 0.707 l 25.264 3.671 c 1.616 0.235 2.932 1.345 3.436 2.898 c 0.504 1.553 0.092 3.225 -1.078 4.365 L 70.43 56.718 c -0.304 0.297 -0.443 0.723 -0.371 1.143 l 4.315 25.161 c 0.275 1.61 -0.374 3.206 -1.694 4.165 c -1.32 0.961 -3.038 1.085 -4.484 0.325 l -22.596 -11.88 c -0.376 -0.199 -0.825 -0.198 -1.201 -0.001 L 21.803 87.511 C 21.174 87.841 20.494 88.005 19.817 88.005 z M 45 72.516 c 0.68 0 1.361 0.163 1.982 0.489 l 22.596 11.88 c 0.64 0.341 1.165 0.044 1.359 -0.098 c 0.195 -0.142 0.636 -0.549 0.514 -1.263 l -4.315 -25.16 c -0.237 -1.382 0.22 -2.791 1.225 -3.77 l 18.28 -17.819 c 0.519 -0.506 0.402 -1.094 0.326 -1.323 c -0.074 -0.229 -0.325 -0.774 -1.041 -0.878 l -25.264 -3.671 c -1.388 -0.202 -2.586 -1.073 -3.206 -2.33 L 46.158 5.681 c -0.321 -0.65 -0.917 -0.72 -1.158 -0.72 c -0.241 0 -0.837 0.07 -1.157 0.719 L 32.545 28.573 c -0.621 1.257 -1.819 2.127 -3.206 2.329 L 4.075 34.573 c -0.717 0.104 -0.967 0.649 -1.042 0.878 c -0.074 0.23 -0.192 0.818 0.326 1.323 L 21.64 54.594 c 1.004 0.978 1.462 2.388 1.225 3.77 L 18.55 83.524 c -0.123 0.714 0.318 1.12 0.513 1.262 c 0.196 0.142 0.718 0.436 1.359 0.099 l 22.597 -11.881 C 43.639 72.679 44.32 72.516 45 72.516 z" class="dark:fill-white fill-zinc-950" style="stroke: none; stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" /></g></svg>';

    // Assegurar que o valor é tratado como float
    $score = floatval($score);

    // Calcular o número de estrelas cheias e meias estrelas
    $fullStars = floor($score / 2);
    $halfStars = (fmod($score, 2) >= 1) ? 1 : 0;
    $emptyStars = 5 - ($fullStars + $halfStars);

    // Gerar o HTML com as estrelas
    $starRatingHtml = '';

    for ($i = 0; $i < $fullStars; $i++) {
        $starRatingHtml .= $fullStar;
    }
    if ($halfStars) {
        $starRatingHtml .= $halfStar;
    }
    for ($i = 0; $i < $emptyStars; $i++) {
        $starRatingHtml .= $emptyStar;
    }

    return $starRatingHtml;
}

/* Breadcrumb */
function get_custom_breadcrumb()
{
    global $post;

    $breadcrumbs = [
        [
            'label' => 'Home',
            'url' => home_url('/')
        ]
    ];

    if (is_category()) {
        $category = get_category(get_query_var('cat'));
        $category_link = get_category_link($category->term_id);
        $breadcrumbs[] = [
            'label' => $category->name,
            'url' => $category_link
        ];
    } elseif (get_post_type() != 'post' && ! is_singular()) { // get cpt category
        $post_type = get_post_type_object(get_post_type());
        $post_type_link = get_post_type_archive_link(get_post_type());
        if ($post_type && $post_type_link) {
            $breadcrumbs[] = [
                'label' => $post_type->labels->name,
                'url' => $post_type_link
            ];
        }
    } elseif (get_post_type() != 'post' && is_singular()) { // get cpt page
        $post_type = get_post_type_object(get_post_type());
        $post_type_link = get_post_type_archive_link(get_post_type());
        if ($post_type && $post_type_link) {
            $breadcrumbs[] = [
                'label' => $post_type->labels->singular_name,
                'url' => $post_type_link
            ];
        }
    } elseif (is_single()) {
        $categories = get_the_category();
        if ($categories) {
            $category = $categories[0];
            $category_link = get_category_link($category->term_id);
            $breadcrumbs[] = [
                'label' => $category->name,
                'url' => $category_link
            ];
        }
    } elseif (is_page() && $post->post_parent) {
        $parent_id = $post->post_parent;
        $parent_pages = [];
        while ($parent_id) {
            $page = get_post($parent_id);
            $parent_pages[] = [
                'label' => get_the_title($page->ID),
                'url' => get_permalink($page->ID)
            ];
            $parent_id = $page->post_parent;
        }
        $parent_pages = array_reverse($parent_pages);
        $breadcrumbs = array_merge($breadcrumbs, $parent_pages);
    }

    if (is_single() || is_page()) {
        $breadcrumbs[] = [
            'label' => get_the_title(),
            'url' => get_permalink()
        ];
    }

    return $breadcrumbs;
}

/* get description for review */


/* Verifica se está sendo chamada a pagina de login */
function is_custom_page($page)
{
    global $post;
    $login_page = get_page_by_path($page);
    if ($login_page && is_page($login_page->ID)) {
        return true;
    }
    return false;
}


/* Verifica Sessão */
function platform_login_scripts()
{
    wp_enqueue_script('session_check', get_template_directory_uri() . '/assets/js/session.js', array("jquery"), null, true);

    wp_localize_script('session_check', 'sessionData', array(
        'login_url' => getUrlByName('login'),
        'profile_url' => getUrlByName('dashboard'),
        'auth_url' => site_url('/wp-json/jwt-auth/v1/token'),
        'loginsuccess_url' => site_url('/?success-login#sucesso')
    ));
}
add_action('wp_enqueue_scripts', 'platform_login_scripts');


function ajax_check_login_status()
{
    wp_send_json_success(array('is_user_logged_in' => is_user_logged_in()));
}
add_action('wp_ajax_check_login_status', 'ajax_check_login_status');
add_action('wp_ajax_nopriv_check_login_status', 'ajax_check_login_status');



/* Autenticação */
function custom_register_user()
{
    register_rest_route('wp/v2', '/users/register', array(
        'methods' => 'POST',
        'callback' => 'custom_register_user_callback',
        'permission_callback' => '__return_true',
    ));
}
add_action('rest_api_init', 'custom_register_user');

function custom_register_user_callback($request)
{
    $username = $request['username'];
    $email = $request['email'];
    $password = $request['password'];

    if (username_exists($username) || email_exists($email)) {
        return new WP_Error('user_exists', 'Nome de usuário ou email já existe.', array('status' => 400));
    }

    $user_id = wp_create_user($username, $password, $email);

    if (is_wp_error($user_id)) {
        return new WP_Error('registration_failed', 'Falha no cadastro do usuário.', array('status' => 400));
    }

    wp_update_user(array(
        'ID' => $user_id,
        'role' => 'subscriber',
    ));

    return new WP_REST_Response(array('id' => $user_id), 200);
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