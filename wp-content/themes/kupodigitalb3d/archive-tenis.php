<?php
/* Template Name: Artigos */

get_header();
// TODO page list tenis https://tailwindcomponents.com/component/sopping-cart
?>
<main id="content">
    <div class="max-w-5xl flex  px-4 xl:px-0 py-10 mx-auto" id="category">

        <!-- Card Tenis -->
        <div class="max-w-[85rem] px-4 py-2 sm:px-6 lg:px-8 mx-auto dark:text-white">
            
            <!-- Title -->
            <div class="w-4/5 block mx-auto">
                <h2 class="text-2xl font-bold">Todos os Tênis de Performance: Encontre o Par Perfeito</h2>
                <p class="mt-1 mb-3">Explore nossa extensa coleção de tênis de performance, cuidadosamente selecionados
                    para atender corredores de todos os níveis. Utilize filtros de busca para encontrar o modelo ideal
                    com base em marca, tipo de uso, características técnicas e avaliações da comunidade.</p>
            </div>
            <!-- End Title -->

            <!-- Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $args = array(
                    'post_type' => 'tenis',
                    'posts_per_page' => 20,
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    $post_count = 0;
                    while ($query->have_posts()) :
                        $query->the_post();
                        $post_count++;
                        if ($post_count == 3) {
                            ?>
                            <!-- Card -->
                            <?php get_template_part('parts/call-telegram'); ?>
                            <!-- End Card -->
                            <?php
                        }
                        ?>
                        <!-- Card -->
                        <a class="group" href="<?php the_permalink(); ?>">
                            <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden">
                                
                            
                       

                                    <?php if (get_the_post_thumbnail_url(get_the_ID(), 'full')) : 
                                    $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                    $image_small = getCdnImage($image, 372, 344);
                                    $image_medium = getCdnImage($image, 472, 444);
                                    $image = <<<HTML
                                    <picture class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-xl">
                                        <source srcset="{$image_medium}" media="(min-width: 1024px)">
                                        <source srcset="{$image_small}" media="(min-width: 320px)">
                                        <img 
                                            src="{$image_medium}"
                                            alt="Image Description">
                                    </picture>
                                    HTML;
                                    echo $image;
                                endif; ?>
                            </div>
                            <div class="mt-7">
                                <h3
                                    class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
                                    <?php the_title(); ?>
                                </h3>
                                <p class="mt-3 text-gray-800 dark:text-neutral-200">
                                    <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
                                </p>
                                <p
                                    class="mt-5 inline-flex items-center gap-x-1 text-blue-600 decoration-2 group-hover:underline font-medium">
                                    Continue lendo
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </p>
                            </div>
                        </a>
                        <!-- End Card -->
                        <?php

                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Card Tenis -->
    </div>
</main>
<?php get_footer(); ?>