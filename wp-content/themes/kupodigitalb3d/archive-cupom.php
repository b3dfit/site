<?php get_header(); ?>

<?php

function convertToDate($date)
{
    $datetime = \DateTime::createFromFormat('d/m/Y H:i:s', $date);
    return $datetime ? $datetime->format('Ymd H:i:s') : '';
}

$current_date = current_time('d/m/Y H:i:s');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$posts_per_page = get_option('posts_per_page');
$current_date_ymd = convertToDate($current_date);
$orderTerm = 'coupon_endDate';

$query_args = [
    'posts_per_page' => $posts_per_page,
    'paged' => $paged,
    's' => null,
    'post_type' => 'cupom',
    'orderby' => 'meta_value',
    'order' => 'ASC',
    'meta_key' => $orderTerm,
    'meta_query' => array(
        array(
            'key' => 'coupon_endDate',
            'value' => $current_date_ymd,
            'compare' => '>=',
            'type' => 'DATETIME'
        ),
    ),
];

$query = new \WP_Query($query_args);

$total_pages = $query->max_num_pages;

$coupons = (new \Review\Repository\Coupon)->getNoExpired($posts_per_page, $paged, null, 'coupon_endDate');
?>

<main id="content">
    <!-- Table Section -->
    <div class="max-w-5xl px-4 py-10 sm:px-6 lg:px-0 lg:py-14 mx-auto">
        
        <!-- Card -->
        <div class="flex flex-col">

            <!-- Header -->
            <div class="w-full md:px-12 py-4 text-center mb-10">

                <h1 class="mx-auto text-3xl font-bold">
                    Aproveite Ofertas Exclusivas com Nossos Cupons de Desconto!
                </h1>

                <p class="mx-auto text-sm text-gray-600 dark:text-neutral-400">
                    Atualizamos regularmente nossos cupons para garantir que você tenha acesso às ofertas mais recentes
                    e vantajosas.
                </p>
            </div>
            <!-- End Header -->

            <?php
            if ($coupons) :
                foreach ($coupons as $coupon) :
                    // component-coupon
                    get_template_part('parts/components/component-coupon');
                    // end component-coupon
                endforeach;
            else :
                echo '<p>Nenhum cupom disponível no momento.</p>';
            endif;
            ?>

        </div>
        <!-- End Card -->

        <!-- Paginação -->
        <div class="pagination flex justify-center space-x-2 mt-6">
            <?php
            echo paginate_links([
                'total' => $total_pages,
                'current' => $paged,
                'format' => 'page/%#%',
                'prev_text' => '<span class="px-3 py-2 bg-lime-400 text-white rounded">&laquo; Anterior</span>',
                'next_text' => '<span class="px-3 py-2 bg-lime-400 text-white rounded">Próxima &raquo;</span>',
                'before_page_number' => '<span class="px-3 py-2 bg-lime-400 text-white rounded">',
                'after_page_number' => '</span>',
            ]);
            ?>
        </div>
        <!-- Fim da Paginação -->

    </div>
    <!-- End Table Section -->
</main>

<?php get_footer(); ?>
