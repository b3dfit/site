<?php
$args = array(
    'post_type' => 'tenis',
    'posts_per_page' => 4,
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
);

$latest_posts = new WP_Query($args);
?>

<!-- Card Blog -->
<div class="max-w-5xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="max-w-2xl text-center mx-auto mb-10 lg:mb-14">
        <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Novidades em Tênis de Performance
        </h2>
        <p class="mt-1 text-gray-600 dark:text-neutral-400">Confira os modelos mais recentes de tênis de performance
            adicionados à nossa plataforma. Encontre opções inovadoras e de alta qualidade que atendem às suas
            necessidades de corrida, com avaliações e reviews detalhadas da nossa comunidade.</p>
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10 lg:mb-14">


        <?php
        if ($latest_posts->have_posts()) :
            while ($latest_posts->have_posts()) :
                $latest_posts->the_post();
                $image = has_post_thumbnail() ? wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium_large', false)[0] : '';
                $categories = get_the_category($post->ID) ? get_the_category($post->ID)[0]->name : null;
                $title = get_the_title($post->ID);
                $url = get_permalink($post->ID);
                $html = <<<HTML
                <!-- Card -->
                <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="{$url}">
                    <div class="aspect-w-16 aspect-h-9">
                        <img class="w-full object-cover rounded-t-xl"
                            src="{$image}"
                            alt="Image Description">
                    </div>
                    <div class="p-4 md:p-5">
                        <p class="mt-2 text-xs uppercase text-gray-600 dark:text-neutral-400">
                            {$categories}
                        </p>
                        <h3
                            class="mt-2 text-lg font-medium text-gray-800 group-hover:text-blue-600 dark:text-neutral-300 dark:group-hover:text-white">
                            {$title}
                        </h3>
                    </div>
                </a>
                <!-- End Card -->
                HTML;
                echo ($html);
            endwhile;
            wp_reset_postdata();
        endif;
        ?>

    </div>
    <!-- End Grid -->
    <?php /* ?>
   
<!-- Card -->
<div class="text-center">
   <div class="inline-block bg-white border shadow-sm rounded-full dark:bg-neutral-900 dark:border-neutral-800">
       <div class="py-3 px-4 flex items-center gap-x-2">
           <p class="text-gray-600 dark:text-neutral-400">
               Quer ler mais?
           </p>
           <a class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-500"
               href="<?php echo (getUrlByName('artigos')); ?>">
               vem aqui
               <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                   viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round">
                   <path d="m9 18 6-6-6-6" />
               </svg>
           </a>
       </div>
   </div>
</div>
<!-- End Card -->
<?php */ ?>
</div>
<!-- End Card Blog -->