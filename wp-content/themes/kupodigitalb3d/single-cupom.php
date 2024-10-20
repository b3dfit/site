<?php get_header(); ?>

<?php
global $post;
$coupon = (new \Review\Repository\Coupon)->getById($post->ID);
$urlOffer = base64_encode($coupon->getUrl());
$cupomOffer = base64_encode($coupon->getCode());
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
        "information" => <<<HTML
        <button type="button"
            class=" group text-center p-2 px-5 bg-lime-400 font-medium text-sm text-black rounded-md focus:outline-none"
            aria-haspopup="dialog" aria-expanded="false" data-hs-overlay="#modal-coupon"
            data-coupon-code="{$cupomOffer}"
            data-coupon-url="{$urlOffer}"
            data-store-name="{$coupon->getStore()->getTitle()}"
            onclick="openModal(this)">Desbloquear Cupom {$coupon->getCodeSecret()}</button>
        HTML,
        "itemprop" => "",
        "attr" => '',
    ],
    [
        "name" => "Sobre a Loja",
        "information" => nl2br($coupon->getStore()->getDescription()),
        "itemprop" => "",
        "attr" => "",
    ]

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
                <?php
                $storeName = $coupon->getStore()->getTitle();
                get_template_part('parts/components/component-coupon');
                ?>
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
                                        <h3 class="pt-0 mt-0 text-sm md:text-sm font-light text-gray-600 dark:text-neutral-200">
                                            {$item->name}
                                        </h3>
                                        <p class="mt-1 md:text-sm text-sm text-gray-500 dark:text-neutral-500" itemprop="{$item->itemprop}" {$item->attr}>
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

            <!-- Coupons -->
            <?php
            $storeName = $coupon->getStore()->getTitle();
            $coupons = (new \Review\Repository\Coupon)->getByStore($coupon->getStore()->getId(), $coupon->getId());
            load_template(locate_template('parts/template/coupons-store.php'), false);
            ?>
            <!-- End Coupons -->

    </article>



    <!-- Sticky Share -->
    <?php get_template_part('parts/share'); ?>
    <!-- End Sticky Share -->

</main>
<?php get_footer(); ?>