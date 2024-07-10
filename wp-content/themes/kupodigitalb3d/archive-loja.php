<?php get_header(); ?>



<main id="content">
    <div class="max-w-5xl px-4 xl:px-0 py-10 mx-auto  text-zinc-950 dark:text-white" id="category-store">


        <!-- Title -->
        <div class="w-4/5 block mx-auto">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Nossas Marcas e Lojas Parceiras
                Confiáveis</h2>
            <p class="mt-1 mb-3">Explore nossa seleção de marcas e lojas parceiras
                de
                confiança, onde você encontrará os melhores produtos e serviços para aprimorar sua experiência
                esportiva.</p>
            <p class="mt-1 mb-3">Selecionamos cuidadosamente cada parceiro para garantir
                que você tenha acesso a produtos de
                alta qualidade e ofertas exclusivas.</p>
            <p class="mt-1 mb-3">Descubra onde comprar seus tênis de performance e
                acessórios
                esportivos com total segurança e confiança.</p>
        </div>
        <!-- End Title -->


        <!-- Card Blog -->
        <div class="max-w-5xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Grid -->
            <div class="grid lg:grid-cols-2 lg:gap-y-16 gap-10">





                <?php
                $args = array(
                    'post_type' => 'loja',
                    'posts_per_page' => 50,
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'meta_query' => array(
                        array(
                            'key' => 'store_logosvg',
                            'compare' => 'EXISTS'
                        ),
                        array(
                            'key' => 'store_logosvg',
                            'value' => '',
                            'compare' => '!='
                        )
                    )
                );

                $loja_query = new WP_Query($args);
                if ($loja_query->have_posts()) :
                    while ($loja_query->have_posts()) :
                        $loja_query->the_post();
                        $link = get_permalink($post->ID);
                        $svg = getValueCustomPostTypeReview($post->ID, 'logosvg', 'store');
                        $name = get_the_title($post->ID);
                        $image = getValueCustomPostTypeReview($post->ID, 'logo', 'store');
                        $svg = getValueCustomPostTypeReview($post->ID, 'logosvg', 'store');
                        $description = get_the_excerpt($post->ID);
                        $html = <<<HTML
                    <!-- Card -->
                    <a class="group rounded-xl overflow-hidden shadow-md px-1" href="{$link}">
                        <div class="flex">
                            <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full sm:w-56 h-44">
                                <div class="flex group-hover:scale-105 transition-transform duration-500 ease-in-out size-full absolute top-0 start-0 object-cover rounded-xl fill-black bg-white dark:bg-zinc-950  items-center svg-page-stores">
                                    {$svg}
                                </div>
                            </div>
                            <div class="grow mt-4 sm:mt-0 sm:ms-6 px-4 sm:px-0 mb-2">
                                <h3
                                    class="text-xl font-semibold  group-hover:text-gray-600  dark:group-hover:text-white">
                                    {$name}
                                </h3>
                                <p class="mt-3 ">
                                    {$description}
                                </p>
                                <p
                                    class="mt-4 inline-flex items-center gap-x-1 text-blue-600 decoration-2 hover:underline font-medium">
                                    Acessar
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->
                    HTML;
                        echo $html;
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>

            </div>
            <!-- End Grid -->
        </div>
        <!-- End Card Blog -->







    </div>
</main>
<?php get_footer(); ?>