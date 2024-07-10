<?php get_header(); ?>

<main id="content">
    <div class="max-w-5xl mx-auto flex" id="page">
        <!-- Content -->
        <article class="w-3/4 left-0 px-4 pt-6 pb-12 ">
            <h1 class="text-base font-bold md:text-3xl "><?php the_title(); ?></h1>
            <div class="flex justify-between w-full mb-5 text-zinc-600 text-sm">
                <p class="pr-4 py-2 rounded-full">
                    Institucional
                </p>
                <p class="pl-4 py-2 rounded-full ">
                    Publicado em <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished">
                        <?php echo get_the_date(); ?></time>
                </p>
            </div>
            <div class="content">
                <?php the_content(); ?>
            </div>
        </article>
        <!-- End Content -->

        <!-- Sidebar -->
        <div class="w-1/4  ">
            <div class="py-8 pl-4 sticky top-0 start-0 ">
                <div class="flex flex-row flex-wrap mt-28">
                    <?php
                    $all_pages = get_pages([
                        'post_type' => 'page',
                        'post_status' => 'publish',
                        //'exclude' => [get_the_ID()] // Exclui a página atual do loop
                    ]);

                    function find_children_pages($pages, $parent_id = 0)
                    {
                        $children = [];
                        foreach ($pages as $page) {
                            if ($page->post_parent == $parent_id) {
                                $page->children = find_children_pages($pages, $page->ID);
                                $children[] = $page;
                            }
                        }
                        return $children;
                    }

                    $pages_with_children = find_children_pages($all_pages);
                    ?>
                    <?php function display_page_link($page)
                    { ?>
                        <a class="w-full" href="<?php echo get_permalink($page->ID); ?>">
                            <span class="text-sm font-extralight text-blue-500">
                                <?php echo get_the_title($page->ID); ?>
                            </span>
                        </a>
                        <!-- Recursivamente exibe filhas, se houver -->
                        <?php if (! empty($page->children)) : ?>
                            <div class="m-0 flex flex-row flex-wrap">
                                <?php foreach ($page->children as $child) : ?>
                                    <?php display_page_link($child); ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    <?php } ?>

                    <?php foreach ($pages_with_children as $page) : ?>
                        <!-- Media -->
                        <?php display_page_link($page); ?>
                        <!-- End Media -->
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->


    </div>
</main>
<?php get_footer(); ?>