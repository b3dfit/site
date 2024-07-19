<?php
/* Template Name: Artigos */

get_header();
?>

<main id="content">
    <div class="max-w-5xl flex  px-4 xl:px-0 py-10 mx-auto" id="category">








        <!-- Card Blog -->
        <div class="max-w-[85rem] px-4 py-2 sm:px-6 lg:px-8 mx-auto dark:text-white">
            <!-- Title -->
            <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                <h2 class="text-2xl font-bold md:text-4xl md:leading-tight ">
                <?php echo get_the_title(); ?>
                </h2>
                <p class="mt-1">
                    <?php the_excerpt();?>
                </p>
            </div>
            <!-- End Title -->

            <!-- Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">


                <?php
                $args = array(
                    'post_type' => 'post',
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
                            <a class="group relative flex flex-col w-full min-h-60 bg-[url('https://images.unsplash.com/photo-1634017839464-5c339ebe3cb4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3000&q=80')] bg-center bg-cover rounded-xl hover:shadow-lg transition"
                                href="#">
                                <div class="flex-auto p-4 md:p-6">
                                    <h3 class="text-xl text-white/90 group-hover:text-white"><span class="font-bold">Preline</span>
                                        Press publishes books about economic and technological advancement.</h3>
                                </div>
                                <div class="pt-0 p-4 md:p-6">
                                    <div
                                        class="inline-flex items-center gap-2 text-sm font-medium text-white group-hover:text-white/70">
                                        Visit the site
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m9 18 6-6-6-6" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <!-- End Card -->
                            <?php
                        }

                            ?>
                            <!-- Card -->
                            <a class="group" href="<?php the_permalink(); ?>">
                                <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden">
                                    <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-xl"
                                        src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
                                        alt="<?php echo get_the_title(); ?>">
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
        <!-- End Card Blog -->



    </div>
</main>


<?php get_footer(); ?>