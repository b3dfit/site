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

    <!-- Sticky Share Group -->
    <div class="sticky bottom-6 inset-x-0 text-center">
        <div class="inline-block bg-white shadow-md rounded-full py-3 px-4 dark:bg-neutral-800">
            <div class="flex items-center gap-x-1.5">
                <!-- Button -->
                <div class="hs-tooltip inline-block">
                    <button type="button"
                        class="hs-tooltip-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-white">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                        </svg>
                        875
                        <span
                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-zinc-950 text-xs font-medium text-white rounded shadow-sm dark:bg-black"
                            role="tooltip">
                            Like
                        </span>
                    </button>
                </div>
                <!-- Button -->
                <?php /*
<div class="block h-3 border-e border-gray-300 mx-3 dark:border-neutral-600"></div>

<!-- Button -->
<div class="hs-tooltip inline-block">
<button type="button"
class="hs-tooltip-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-white">
<svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
stroke-linejoin="round">
<path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z" />
</svg>
16
<span
class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-zinc-950 text-xs font-medium text-white rounded shadow-sm dark:bg-black"
role="tooltip">
Comment
</span>
</button>
</div>
<!-- Button -->
*/ ?>
                <div class="block h-3 border-e border-gray-300 mx-3 dark:border-neutral-600"></div>

                <!-- Button -->
                <div class="hs-dropdown relative inline-flex">
                    <button type="button" id="blog-article-share-dropdown"
                        class="hs-dropdown-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-white">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
                            <polyline points="16 6 12 2 8 6" />
                            <line x1="12" x2="12" y1="2" y2="15" />
                        </svg>
                        Compartilhe
                    </button>
                    <div class="hs-dropdown-menu w-56 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden mb-1 z-10 bg-zinc-950 shadow-md rounded-xl p-2 dark:bg-neutral-950"
                        aria-labelledby="blog-article-share-dropdown">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-left text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-gray-400 dark:text-neutral-400 dark:hover:bg-neutral-900 dark:focus:ring-neutral-400"
                            href id="copyToClipboard">
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
                                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                            </svg>
                            Copiar link
                        </a>
                        <div class="border-t border-gray-600 my-2 dark:border-neutral-800"></div>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-left text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-gray-400 dark:text-neutral-400 dark:hover:bg-neutral-900 dark:focus:ring-neutral-400"
                            rel="nofollow" target="_blank"
                            href="https://x.com/intent/post?text=<?php echo (get_the_title()); ?>&url=<?php echo (get_the_permalink()); ?>'">
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                            Compartilhar no X.com
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-left text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-gray-400 dark:text-neutral-400 dark:hover:bg-neutral-900 dark:focus:ring-neutral-400"
                            rel="nofollow" target="_blank"
                            href="https://www.facebook.com/sharer/sharer.php?u=<?php echo (get_the_permalink()); ?>&t=<?php echo (get_the_title()); ?>">
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                            Compartilhar no Facebook
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-left text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-gray-400 dark:text-neutral-400 dark:hover:bg-neutral-900 dark:focus:ring-neutral-400"
                            rel="nofollow" target="_blank"
                            href="https://www.linkedin.com/feed/?shareActive=true&text=<?php echo (get_the_title()); ?> <?php echo (get_the_permalink()); ?>">
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                            </svg>
                            Compartilhar no LinkedIn
                        </a>
                    </div>
                </div>
                <!-- Button -->
            </div>
        </div>
    </div>
    <!-- End Sticky Share Group -->

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