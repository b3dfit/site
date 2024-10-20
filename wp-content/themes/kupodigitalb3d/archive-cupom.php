<?php get_header(); ?>
<?php

function convertToDate($date)
{
        $datetime = \DateTime::createFromFormat('d/m/Y H:i:s', $date);
        return $datetime ? $datetime->format('Ymd H:i:s') : '';
}

$current_date = current_time('d/m/Y H:i:s');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1-1;
$posts_per_page = get_option('posts_per_page');
$current_date_ymd = convertToDate($current_date);
$orderTerm = 'coupon_endDate';

$query = [
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

$query = new \WP_Query($query);

$total_pages = $query->max_num_pages;




















$coupons = (new \Review\Repository\Coupon)->getNoExpired($posts_per_page, $paged, null, 'coupon_endDate');
?>

<?php
// Função que gera o HTML da paginação
function generatePaginationHtml($total_pages, $paged) {
    // Se não houver mais de uma página, não mostra a paginação
    if ($total_pages <= 1) return '';

    $pagination_html = '<nav class="flex justify-center items-center space-x-1 mt-4">';

    // Link para a página anterior
    if ($paged > 1) {
        $prev_page = $paged - 1;
        $pagination_html .= <<<HTML
            <a href="?paged={$prev_page}" class="px-3 py-1 bg-lime-200 text-zinc-900 rounded hover:bg-lime-300">
                &laquo; Anterior
            </a>
        HTML;
    }

    // Links para cada página
    for ($i = 1; $i <= $total_pages; $i++) {
        if ($i == $paged) {
            // Página atual
            $pagination_html .= <<<HTML
                <span class="px-3 py-1 bg-lime-400 text-zinc-900 rounded">
                    {$i}
                </span>
            HTML;
        } else {
            // Outras páginas
            $pagination_html .= <<<HTML
                <a href="?paged={$i}" class="px-3 py-1 bg-lime-200 text-zinc-900 rounded hover:bg-lime-300">
                    {$i}
                </a>
            HTML;
        }
    }

    // Link para a próxima página
    if ($paged < $total_pages) {
        $next_page = $paged + 1;
        $pagination_html .= <<<HTML
            <a href="?paged={$next_page}" class="px-3 py-1 bg-lime-200 text-zinc-900 rounded hover:bg-lime-300">
                Próxima &raquo;
            </a>
        HTML;
    }

    $pagination_html .= '</nav>';

    return $pagination_html;
}
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
            foreach ($coupons as $coupon) :
                // component-coupon
                get_template_part('parts/components/component-coupon');
                // end component-coupon
            endforeach;
            ?>


        </div>
        <!-- End Card -->

        <?php 
        echo generatePaginationHtml($total_pages, $paged);
        ?>

    </div>
    <!-- End Table Section -->


    
</main>

<?php get_footer(); ?>
