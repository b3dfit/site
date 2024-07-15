<?php get_header(); ?>

<?php
use Review\Utils\TypeTenis;
use Review\Repository\Store;
use Review\Repository\Tenis;

$tenisData = (new Tenis())->getById(get_the_ID());
$tenisJson = json_encode($tenisData);
$tenis = json_decode($tenisJson);


// echo('<pre>');var_dump($tenis->offer_best);die;
?>
<main id="content">

    <article class="max-w-5xl flex px-4 xl:px-0 py-24 mx-auto" id="single-tenis" itemscope
        itemtype="https://schema.org/Product">
        <div class="w-full dark:text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
                <div class="flex flex-col md:flex-row -mx-4">
                    <div class="md:flex-1 px-4">
                        <div class="h-64 md:h-80 rounded-lg bg-white mb-4">


                            <!-- IMAGE -->
                            <div class="h-64 md:h-80 rounded-lg bg-white p-5 mb-4 flex items-center justify-center">
                                <?php if ($tenis->image) : ?>
                                    <img class="h-auto rounded-none size-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out"
                                        src="<?php echo $tenis->image; ?>" alt="<?php echo get_the_title(); ?>"
                                        itemprop="image" />
                                <?php endif; ?>
                            </div>
                            <!-- END IMAGE -->



                        </div>
                    </div>

                    <!-- PRODUCT DETAILS -->
                    <div class="md:flex-1 px-4">
                        <h1 class="mb-2 leading-tight tracking-tight font-bold text-2xl md:text-3xl" itemprop="name">
                            <?php the_title(); ?>
                        </h1>
                        <p class=" text-sm">Marca <a href="<?php echo ($tenis->brand->link); ?>"
                                class=" hover:underline" itemprop="brand">
                                <?php echo ($tenis->brand->title); ?>
                            </a></p>
                        <div class="flex items-center space-x-4 my-4" itemprop="offers" itemscope
                            itemtype="https://schema.org/Offer">
                            <div>
                                <div class="rounded-lg bg-gray-100 dark:text-black flex py-2 px-3">
                                    <span class=" mr-1 mt-1" itemprop="priceCurrency" content="BRL">R$</span>
                                    <span class="font-bold text-3xl"
                                        itemprop="price"><?php echo ($tenis->offer_best->price_formated); ?></span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <p class="text-lime-500 text-xl font-semibold">Economize
                                    <span itemprop="discount"><?php echo ($tenis->offer_best->discount); ?></span>%
                                </p>
                                <p class="text-gray-400 text-sm">Menor preço.</p>
                            </div>
                            <meta itemprop="availability" content="https://schema.org/InStock" />
                            <meta itemprop="url" content="<?php echo ($tenis->link); ?>" />
                            <meta itemprop="validThrough" content="2023-12-31" />
                        </div>
                        <p itemprop="description"><?php the_excerpt(); ?></p>
                        <div class="flex py-4 space-x-4">
                            <button type="button"
                                class="h-14 px-6 py-2 m-auto font-semibold rounded-xl bg-zinc-950 text-lime-400 dark:bg-lime-400 dark:text-black">
                                Ver Ofertas para esse Produto
                            </button>
                        </div>
                    </div>
                    <!-- END PRODUCT DETAILS -->

                </div>
            </div>

            <div class="max-w-3xl mx-auto text-center">
                <div class="w-full mx-auto text-center mt-24">
                    <h2 class="text-2xl font-bold md:text-3xl md:leading-tight dark:text-white">Confira todos os
                        detalhes
                        sobre
                        o <?php echo (get_the_title()); ?> e veja se ele é o que você precisa!</h2>
                    <p class="mt-1 text-gray-600 dark:text-neutral-400">Todas as informações dos produtos são dinamicas,
                        tendo
                        como fonte as informações da marca e o feedback da nossa comunidade.</p>
                </div>
            </div>
            <?php get_template_part('parts/tenis-classification'); ?>

            <?php get_template_part('parts/tenis-characteristics'); ?>

            <?php get_template_part('parts/tenis-benefits'); ?>
        </div>
    </article>


    <!-- Sticky Share -->
    <?php get_template_part('parts/share'); ?>
    <!-- End Sticky Share -->

</main>
<?php get_footer(); ?>