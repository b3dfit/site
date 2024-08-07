<?php get_header(); ?>

<?php
global $post;
$coupon = (new \Review\Repository\Coupon)->getById($post->ID);
$details = [
    [
        "name" => "Validade",
        "information" => $coupon->getEndDate('d/m/Y'),
        "itemprop" => "validThrough",
        "attr" => "datetime='" . $coupon->getEndDate('Y-m-dTH:i:s') . "'"
    ],
    [
        "name" => "Descrição",
        "information" => wp_filter_nohtml_kses($coupon->getDescription()),
        "itemprop" => "description",
        "attr" => ""
    ],
    [
        "name" => "Termos de Utilização",
        "information" => nl2br($coupon->getTerms()),
        "itemprop" => "",
        "attr" => ""
    ],
    [
        "name" => "Loja",
        "information" => "<span itemprop=\"name\">" . $coupon->getStore()->getTitle() . "</span>",
        "itemprop" => "seller",
        "attr" => "itemscope itemtype='http://schema.org/Organization'",
    ],
    [
        "name" => "Código do Cupom",
        "information" => $coupon->getCode(),
        "itemprop" => "",
        "attr" => "",
    ],

];
?>
<main id="content">

    <article class="max-w-5xl flex px-4 xl:px-0 pt-0 mx-auto" id="single-coupon">


        <div class="w-full">
            <div class="mx-auto" itemscope itemtype="http://schema.org/Offer">

                <div class="mt-5 p-10">
                    <h1 class="text-3xl font-bold md:leading-tight dark:text-white" itemprop="name">
                        <?php echo ($coupon->getTitle()); ?>
                    </h1>
                    <p itemprop="description">
                        Desconto de
                        <?php echo ($coupon->getPercentage() ? "{$coupon->getPercentage()}% OFF" : ""); ?>
                        na loja <a href="<?php echo ($coupon->getStore()->getLink()); ?>"
                            target="_blank"><?php echo ($coupon->getStore()->getTitle()); ?></a>
                    </p>
                </div>


                <!-- Card -->
                <div class="mt-2 p-0 rounded-lg border border-gray-200 bg-white text-black shadow-sm  disabled:opacity-50 disabled:pointer-events-none">


                    <div class="relative flex items-center overflow-hidden">
                        <div
                            class="md:w-32 grow p-4 relative flex items-center justify-center bg-lime-400  rounded-s-lg">
                            <div class="h-28 w-28 flex items-center justify-center">
                                <?php echo ($coupon->getStore()->getLogoSvg()); ?>
                            </div>
                        </div>
                        <div class="md:w-1/2 grow p-4">
                            <div class="min-h-24 flex flex-col justify-normal">

                                <p class="text-neutral-700"><?php echo ($coupon->getTitle()); ?></p>

                                <p class="select-none mt-5 text-sm text-zinc-950 dark:text-neutral-500 mb-3">
                                    <span
                                        class="hs-tooltip hs-tooltip-toggle px-8 py-2  text-base rounded-lg border border-gray-200 bg-white text-black shadow-sm  disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 text-left">

                                        Cupom <?php echo ($coupon->getCodeSecret()); ?>

                                        <span
                                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible   opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700"
                                            role="tooltip">
                                            Clique no botão Usar Cupom
                                        </span>

                                    </span>

                                </p>
                                <meta itemprop="priceCurrency" content="BRL" />
                                <meta itemprop="price" content="0" />
                                <link itemprop="url" href="<?php echo ($coupon->getUrl()); ?>" />
                            </div>
                        </div>
                        <div class="md:w-48 text-right right-0 p-4">
                            <button type="button"
                                class="w-full group text-center py-2 px-3 mr-10 bg-lime-400 font-medium text-sm text-black rounded-md focus:outline-none"
                                onclick="window.open(atob('<?php echo (base64_encode($coupon->getUrl())); ?>'))">
                                Usar Cupom
                            </button>
                        </div>
                    </div>

                </div>
                <!-- End Card -->


                <!-- Detail Cupom -->
                <div class="w-full px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                    <div class="mx-auto">
                        <h2 class="text-lg font-normal md:leading-tight text-gray-600 dark:text-white">Sobre o Cupom de
                            Desconto</h2>
                    </div>
                    <div class="w-full mx-auto divide-y divide-gray-200 dark:divide-neutral-700">
                        <?php
                        foreach ($details as $item) :
                            $item = (object) $item;
                            echo <<<HTML
                            <div class="py-4 first:pt-0 last:pb-0">
                                <div class="flex gap-x-5">
                                <svg class="shrink-0 mt-1 size-6 w-3 h-3 text-zinc-950 dark:text-neutral-500"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10" />
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                        <path d="M12 17h.01" />
                                    </svg>

                                    <div class="grow">
                                        <h3 class="pt-0 mt-0 md:text-sm font-light text-gray-600 dark:text-neutral-200">
                                            {$item->name}
                                        </h3>
                                        <p class="mt-1 md:text-sm text-gray-500 dark:text-neutral-500" itemprop="{$item->itemprop}" {$item->attr}>
                                            {$item->information}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            HTML;
                        endforeach; ?>

                    </div>
                    <!-- End Detail Cupom -->
                </div>
            </div>

    </article>



    <!-- Sticky Share -->
    <?php get_template_part('parts/share'); ?>
    <!-- End Sticky Share -->

</main>
<?php get_footer(); ?>