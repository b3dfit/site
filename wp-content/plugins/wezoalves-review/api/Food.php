<?php

namespace Review\Api;

use \Review\Model\Food as FoodModel;

final class Food
{
    private function makeSlug($stringA = '', $stringB = '', $stringC = '')
    {
        $slug = strtolower($stringA);
        $slug = strtr($slug, ["-" => "-"]);
        $slug = preg_replace('/-+/', '-', $slug);
        $slug = trim($slug, '-');
        return $slug;
    }

    function create(\WP_REST_Request $request)
    {
        if ($request->has_param('alimento_id')) :
            return $this->createFood($request);
        endif;
    }

    private function createFood(\WP_REST_Request $request)
    {
        $args = array(
            'post_type' => \Review\WordPress\CustomPostType\Foods::getKey(),
            'meta_key' => 'alimento_id',
            'meta_value' => $request->get_param('alimento_id'),
            'meta_compare' => '=',
            'numberposts' => 1,
        );

        $posts = get_posts($args);

        if ($posts && count($posts) > 0) {
            $post_id = $posts[0]->ID;
            $alimento_id = $request->get_param('alimento_id');
            return rest_ensure_response(["Alimento #{$alimento_id} já está cadastrado!"]);
        }

        $meta_input = [];
        $fields = (new \Review\WordPress\Fields\Foods())->fields();
        foreach ($fields as $field) :
            $meta_input[$field->getId()] = $request->get_param($field->getId()) ?? null;
        endforeach;

        $post_title = $request->get_param('name');
        $post_excerpt = $request->get_param('description');

        $user = get_user_by('login', 'weslley');
        $post_author = $user->ID;

        $data = array(
            'post_type' => \Review\WordPress\CustomPostType\Foods::getKey(),
            'post_title' => $post_title,
            'post_excerpt' => $post_excerpt,
            'post_author' => $post_author,
            'meta_input' => $meta_input,
            'post_status' => 'publish',
            'comment_status' => 'closed',
            'ping_status' => 'closed'
        );

        $post_id = wp_insert_post($data);

        foreach ($meta_input as $key => $metaValue) :
            if (is_array($metaValue)) {
                $metaValue = json_encode($metaValue);
            }
            add_post_meta($post_id, $key, $metaValue, true);
        endforeach;

        if (! is_wp_error($post_id)) {
            return rest_ensure_response(["Food #{$post_id} - {$post_title} criada com sucesso!"]);
        } else {
            return rest_ensure_response(new \WP_REST_Response('Erro ao criar Food: ' . $post_id->get_error_message(), 500));
        }
    }

    function get($data)
    {
        $post_id = $data['id'];
        $food = (new \Review\Repository\Food())->getById($post_id);
        return rest_ensure_response($food);
    }

    function list(\WP_REST_Request $request)
    {
        $page = $request->get_param('page') ? absint($request->get_param('page')) : 1;
        $per_page = $request->get_param('per_page') ? absint($request->get_param('per_page')) : 20;
        $search_term = $request->get_param('search_term') ? sanitize_text_field($request->get_param('search_term')) : '';
        $foods = (new \Review\Repository\Food())->getAll(
            $per_page,
            $page,
            $search_term
        );
        return rest_ensure_response($foods);
    }

    function delete()
    {
        $args = array(
            'post_type' => \Review\WordPress\CustomPostType\Foods::getKey(),
            'posts_per_page' => 200,
        );

        $posts_query = new \WP_Query($args);

        if ($posts_query->have_posts()) {
            while ($posts_query->have_posts()) {
                $posts_query->the_post();
                $post_id = get_the_ID();
                wp_delete_post($post_id, true);
                wp_reset_postdata();
            }

            wp_reset_query();

            echo 'Todos os posts foram removidos com sucesso.';
        } else {
            echo 'Nenhum post encontrado para remover.';
        }
    }

    public function RestFoodApiInit()
    {
        register_rest_route(
            'api/v1/food',
            '/add',
            array(
                'methods' => 'POST',
                'callback' => function (\WP_REST_Request $request) {
                    $food = new \Review\Api\Food();
                    return $food->create($request);
                },
                'permission_callback' => '__return_true',
            )
        );

        register_rest_route(
            'api/v1/food',
            '/get/(?P<id>\d+)',
            array(
                'methods' => 'GET',
                'callback' => function (\WP_REST_Request $request) {
                    $api = new \Review\Api\Food();
                    return $api->get($request);
                },
                'permission_callback' => '__return_true',
                'args' => array(
                    'id' => array(
                        'validate_callback' => function ($param, $request, $key) {
                            return is_numeric($param);
                        },
                    ),
                ),
            )
        );

        register_rest_route(
            'api/v1/food',
            '/list',
            array(
                'methods' => 'GET',
                'callback' => function (\WP_REST_Request $request) {
                    $api = new \Review\Api\Food();
                    return $api->list($request);
                },
                'permission_callback' => '__return_true',
                'args' => array(
                    'page' => array(
                        'validate_callback' => function ($param, $request, $key) {
                            return is_numeric($param);
                        },
                    ),
                    'per_page' => array(
                        'validate_callback' => function ($param, $request, $key) {
                            return is_numeric($param);
                        },
                    ),
                    'search_term' => array(
                        'validate_callback' => function ($param, $request, $key) {
                            return is_string($param);
                        },
                    ),
                ),
            )
        );

        register_rest_route(
            'api/v1/food',
            '/delete',
            array(
                'methods' => 'GET',
                'callback' => function () {
                    $api = new \Review\Api\Food();
                    return $api->delete();
                },
                'permission_callback' => '__return_true',
            )
        );
    }
}