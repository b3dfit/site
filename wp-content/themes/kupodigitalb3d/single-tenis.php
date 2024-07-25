<?php get_header(); ?>

<?php
use Review\Utils\TypeTenis;
use Review\Utils\RatingTenis;
use Review\Repository\Store;
use Review\Repository\Tenis;

$tenis = (new Tenis('PAGETENIS0' . get_the_ID()))->getById(get_the_ID());
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
                                <?php if ($tenis->getImage()) : ?>
                                    <img class="h-auto rounded-none size-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out"
                                        src="<?php echo $tenis->getImage(); ?>" alt="<?php echo $tenis->getTitle(); ?>"
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
                        <p class=" text-sm">Marca: <a href="<?php echo ($tenis->getBrand()['link']); ?>"
                                class="hover:underline" itemprop="brand">
                                <?php echo ($tenis->getBrand()['title']); ?>
                            </a>
                        </p>
                        <p class=" text-xs mt-2">Tipo: <?php echo ($tenis->getType()->getName()); ?>
                        </p>
                        <div class="flex items-center space-x-4 my-4" itemprop="offers" itemscope
                            itemtype="https://schema.org/Offer">
                            <div>
                                <div class="rounded-lg bg-gray-100 dark:text-black flex py-2 px-3">
                                    <span class="mr-1 mt-1" itemprop="priceCurrency" content="BRL">R$</span>
                                    <span
                                        class="font-bold text-3xl"><?php echo ($tenis->getOfferBest()->getPriceFormated()); ?></span>
                                </div>
                            </div>


                            <div class="flex-1">

                                <!-- TAG MENOR PREÇO -->
                                <?php if ($tenis->getOfferBest()->getDiscount()) : ?>
                                    <p class="text-lime-500 text-xl font-semibold">
                                        Economize
                                        <span
                                            itemprop="discount"><?php echo ($tenis->getOfferBest()->getDiscount()); ?></span>%
                                    </p>
                                <?php endif; ?>
                                <!-- END TAG MENOR PREÇO -->

                                <p class="text-gray-400 text-sm">Menor preço.</p>
                            </div>

                            <meta itemprop="availability" content="https://schema.org/InStock" />
                            <meta itemprop="url" content="<?php echo ($tenis->getLink()); ?>" />
                            <meta itemprop="validThrough"
                                content="<?php echo (date('Y-12-31', time() + YEAR_IN_SECONDS)); ?>" />
                            <meta itemprop="price" content="<?php echo ($tenis->getPriceRegular()); ?>" />
                            <meta itemprop="lowPrice" content="<?php echo ($tenis->getOfferBest()->getPrice()); ?>" />
                            <meta itemprop="highPrice" content="<?php echo ($tenis->getPriceRegular()); ?>" />
                        </div>
                        <p itemprop="description"><?php $tenis->getResume(); ?></p>

                        <!-- BUTTON OFFER -->
                        <div class="flex py-4 space-x-4">
                            <button type="button"
                                onclick="window.open('<?php echo ($tenis->getOfferBest()->getUrlOffer()); ?>')"
                                class="h-14 px-6 py-2 m-auto font-semibold rounded-xl bg-zinc-950 text-lime-400 dark:bg-lime-400 dark:text-black">
                                Ver Ofertas para esse Produto
                            </button>
                        </div>
                        <!-- END BUTTON OFFER -->

                    </div>
                    <!-- END PRODUCT DETAILS -->

                </div>
            </div>

            <div class="max-w-3xl mx-auto text-center">
                <div class="w-full mx-auto text-center mt-24">
                    <h2 class="text-2xl font-bold md:text-3xl md:leading-tight dark:text-white">Confira todos os
                        detalhes
                        sobre
                        o <?php echo ($tenis->getTitle()); ?> e veja se ele é o que você precisa!</h2>
                    <p class="mt-1 text-gray-600 dark:text-neutral-400">Todas as informações dos produtos são dinamicas,
                        tendo
                        como fonte as informações da marca e o feedback da nossa comunidade.</p>
                </div>
            </div>




            <div class="border-b border-gray-200 dark:border-neutral-700 mt-20">
                <nav class="flex space-x-5" aria-label="Tabs" role="tablist">
                    <button type="button"
                        class="hs-tab-active:font-semibold hs-tab-active:border-lime-400 hs-tab-active:text-zinc-800 py-4 px-1 inline-flex items-center gap-x-2 border-b-4 border-transparent text-lg whitespace-nowrap text-gray-500 hover:text-zinc-800 focus:outline-none focus:text-zinc-800 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 active"
                        id="tabs-with-underline-item-1" data-hs-tab="#tabs-with-underline-1"
                        aria-controls="tabs-with-underline-1" role="tab">
                        Classificação Geral
                    </button>
                    <button type="button"
                        class="hs-tab-active:font-semibold hs-tab-active:border-lime-400 hs-tab-active:text-zinc-800 py-4 px-1 inline-flex items-center gap-x-2 border-b-4 border-transparent text-lg whitespace-nowrap text-gray-500 hover:text-zinc-800 focus:outline-none focus:text-zinc-800 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500"
                        id="tabs-with-underline-item-2" data-hs-tab="#tabs-with-underline-2"
                        aria-controls="tabs-with-underline-2" role="tab">
                        Características
                    </button>
                    <button type="button"
                        class="hs-tab-active:font-semibold hs-tab-active:border-lime-400 hs-tab-active:text-zinc-800 py-4 px-1 inline-flex items-center gap-x-2 border-b-4 border-transparent text-lg whitespace-nowrap text-gray-500 hover:text-zinc-800 focus:outline-none focus:text-zinc-800 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500"
                        id="tabs-with-underline-item-3" data-hs-tab="#tabs-with-underline-3"
                        aria-controls="tabs-with-underline-3" role="tab">
                        Beneficios
                    </button>
                </nav>
            </div>

            <div class="mt-3">
                <div id="tabs-with-underline-1" role="tabpanel" aria-labelledby="tabs-with-underline-item-1">
                    <p class="text-gray-500 dark:text-neutral-400">
                        <?php get_template_part('parts/tenis-classification'); ?>
                    </p>
                </div>
                <div id="tabs-with-underline-2" class="hidden" role="tabpanel"
                    aria-labelledby="tabs-with-underline-item-2">
                    <p class="text-gray-500 dark:text-neutral-400">
                        <?php get_template_part('parts/tenis-characteristics'); ?>
                    </p>
                </div>
                <div id="tabs-with-underline-3" class="hidden" role="tabpanel"
                    aria-labelledby="tabs-with-underline-item-3">
                    <p class="text-gray-500 dark:text-neutral-400">
                        <?php get_template_part('parts/tenis-benefits'); ?>
                    </p>
                </div>
            </div>


        </div>



    </article>

    <?php get_template_part('parts/last-tenis'); ?>

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