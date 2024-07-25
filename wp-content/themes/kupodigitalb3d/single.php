<?php get_header(); ?>

<?php
global $post;
$post_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>
<main id="content">
    <!-- Blog Article -->

    <div class="max-w-5xl flex px-4 xl:px-0 py-8 mx-auto" id="single">
        <div class="w-full">
            <!-- Avatar Media -->
            <?php
            $aut = function ($key) use ($post) {
                return get_the_author_meta($key, get_post_field('post_author', $post->ID));
            };
            /*
             * - admin_color
             * - aim
             * - comment_shortcuts
             * - description
             * - display_name
             * - first_name
             * - ID
             * - jabber
             * - last_name
             * - nickname
             * - plugins_last_view
             * - plugins_per_page
             * - rich_editing
             * - syntax_highlighting
             * - user_activation_key
             * - user_description
             * - user_email
             * - user_firstname
             * - user_lastname
             * - user_level
             * - user_login
             * - user_nicename
             * - user_pass
             * - user_registered
             * - user_status
             * - user_url
             * - yim
             * */
            ?>
            <div class="flex justify-between items-center mb-6">
                <div class="flex w-full sm:items-center gap-x-5 sm:gap-x-3">
                    <div class="flex-shrink-0">
                        <img class="size-12 rounded-full" src="<?php echo (get_avatar_url($aut('user_email'))); ?>"
                            alt="<?php echo ($aut('display_name')); ?>">
                    </div>

                    <div class="grow">
                        <div class="flex justify-between items-center gap-x-2">
                            <div>
                                <!-- Tooltip -->
                                <div class="hs-tooltip [--trigger:hover] [--placement:bottom] inline-block">
                                    <div class="hs-tooltip-toggle sm:mb-1 block text-start cursor-pointer">
                                        <span class="font-semibold text-zinc-950 dark:text-white">
                                            <?php echo ($aut('display_name')); ?>
                                        </span>

                                        <!-- Dropdown Card -->
                                        <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 max-w-xs cursor-default bg-zinc-950 divide-y divide-gray-700 shadow-lg rounded-xl dark:bg-neutral-950 dark:divide-neutral-700"
                                            role="tooltip">
                                            <!-- Body -->
                                            <div class="p-4 sm:p-5">
                                                <div class="mb-2 flex w-full sm:items-center gap-x-5 sm:gap-x-3">
                                                    <div class="flex-shrink-0">
                                                        <img class="size-8 rounded-full"
                                                            src="<?php echo (get_avatar_url($aut('user_email'))); ?>"
                                                            alt="<?php echo ($aut('display_name')); ?>">
                                                    </div>

                                                    <div class="grow">
                                                        <p class="text-lg font-semibold text-gray-200 dark:text-white">
                                                            <?php echo ($aut('display_name')); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="text-sm text-gray-400 dark:text-neutral-400">
                                                    <?php echo ($aut('description')); ?>
                                                </p>
                                            </div>
                                            <!-- End Body -->

                                            <!-- Footer -->
                                            <div class="flex justify-between items-center px-4 py-3 sm:px-5">
                                                <!--ul class="text-xs space-x-3">
                                                    <li class="inline-block">
                                                        <span
                                                            class="font-semibold text-gray-200 dark:text-white">56</span>
                                                        <span class="text-gray-400 dark:text-neutral-400">artigos</span>
                                                    </li>
                                                    <li class="inline-block">
                                                        <span
                                                            class="font-semibold text-gray-200 dark:text-white">1k+</span>
                                                        <span
                                                            class="text-gray-400 dark:text-neutral-400">seguidores</span>
                                                    </li>
                                                </ul-->

                                                <div>
                                                    <button type="button"
                                                        onclick="window.open('<?php echo ($aut('user_url')); ?>')"
                                                        class="py-1.5 px-2.5 inline-flex items-center gap-x-2 text-xs font-semibold rounded-lg border border-transparent bg-lime-400 text-black hover:bg-lime-700 disabled:opacity-50 disabled:pointer-events-none">
                                                        <svg class="flex-shrink-0 size-3.5"
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" viewBox="0 0 16 16">
                                                            <path
                                                                d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                            <path fill-rule="evenodd"
                                                                d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                                                        </svg>
                                                        Seguir
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- End Footer -->
                                        </div>
                                        <!-- End Dropdown Card -->
                                    </div>
                                </div>
                                <!-- End Tooltip -->

                                <ul class="text-xs text-gray-500 dark:text-neutral-500">
                                    <li
                                        class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                        <time datetime="<?php echo get_the_date('c'); ?>"
                                            itemprop="datePublished"><?php echo get_the_date(); ?></time>
                                    </li>
                                    <li
                                        class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                        <?php echo (estimated_reading_time()); ?>
                                    </li>
                                </ul>
                            </div>

                            <!-- Button Group -->

                            <div>
                                <button type="button"
                                    onclick="window.open('https://x.com/intent/post?text=<?php echo (get_the_title()); ?>&url=<?php echo (get_the_permalink()); ?>')"
                                    class="py-1.5 px-2.5 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                    <svg class="size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                    </svg>
                                    Tweet
                                </button>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Avatar Media -->

            <!-- Content -->
            <article class="space-y-5 md:space-y-8 content">
                <div class="space-y-2 w-full">
                    <h1 class="text-4xl font-bold md:text-4xl dark:text-white text-wrap"><?php the_title(); ?></h1>
                    <p class="text-lg "><?php the_excerpt(); ?></p>
                </div>

                <?php if ($post_image) : ?>
                    <img class="-left-0  h-auto rounded-none size-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out"
                        src="<?php echo $post_image; ?>" alt="<?php echo get_the_title(); ?>" />
                <?php endif; ?>

                <div class="text-lg --space-y-3 mt-80 text-wrap">
                    <?php the_content(); ?>
                </div>
            </article>
            <!-- End Content -->

            <?php get_template_part('parts/last-articles'); ?>

            <?php get_template_part('parts/last-tenis'); ?>

        </div>

    </div>
    <!-- End Blog Article -->

    <!-- Sticky Share -->
    <?php get_template_part('parts/share'); ?>
    <!-- End Sticky Share -->

</main>

<script async type="application/javascript" src="https://news.google.com/swg/js/v1/swg-basic.js"></script>
<script>
    (self.SWG_BASIC = self.SWG_BASIC || []).push(basicSubscriptions => {
        basicSubscriptions.init({
            type: "NewsArticle",
            isPartOfType: ["Product"],
            isPartOfProductId: "CAows8DYCw:openaccess",
            clientOptions: { theme: "light", lang: "pt-BR" },
        });
    });
</script>
<?php get_footer(); ?>