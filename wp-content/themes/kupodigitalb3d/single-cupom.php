<?php get_header(); ?>

<?php
global $post;
$coupon = (new \Review\Repository\Coupon)->getById($post->ID);
?>
<main id="content">

    <article class="max-w-5xl flex px-4 xl:px-0 pt-0 mx-auto" id="single-coupon">


        <div class="w-full">
            <div class="mx-auto">

                <div class="mt-5 p-10">
                    <h1><?php echo (nl2br($coupon->getTitle())); ?></h1>
                    <p>
                        Desconto de
                        <?php echo ($coupon->getPercentage() ? "<span class='font-semibold rounded-md px-3 py-1 text-lime-400 bg-black'>{$coupon->getPercentage()}% OFF</span>" : ""); ?>
                        na loja <a href="<?php echo ($coupon->getStore()->getLink()); ?>"
                            target="_blank"><?php echo ($coupon->getStore()->getTitle()); ?></a>
                    </p>
                </div>






                <div class="text-center">
                    <button type="button"
                        class="py-3 inline-flex items-center gap-x-2 font-medium rounded-lg border border-transparent bg-lime-500 text-black hover:bg-lime-400 focus:outline-none focus:bg-lime-400 disabled:opacity-50 disabled:pointer-events-none px-11 text-2xl"
                        aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-subscription-with-image"
                        data-hs-overlay="#hs-subscription-with-image">
                        Abrir Cupom
                    </button>
                </div>

                <div id="hs-subscription-with-image"
                    class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto"
                    role="dialog" tabindex="-1" aria-labelledby="hs-subscription-with-image-label">
                    <div
                        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                        <div class="relative flex flex-col bg-white shadow-lg rounded-xl dark:bg-neutral-900">
                            <div class="absolute top-2 z-[10] end-2">
                                <button type="button"
                                    class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-transparent bg-white/10 text-white hover:bg-white/20 disabled:opacity-50 disabled:pointer-events-none"
                                    aria-label="Close" data-hs-overlay="#hs-subscription-with-image">
                                    <span class="sr-only">Close</span>
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 6 18" />
                                        <path d="m6 6 12 12" />
                                    </svg>
                                </button>
                            </div>

                            <!-- <div class="aspect-w-4 aspect-h-4">
                                <img class="w-full object-cover rounded-t-xl"
                                    src="https://images.unsplash.com/photo-1580828343064-fde4fc206bc6?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDJ8fGRpc2NvdW50fGVufDB8fDB8fHww"
                                    alt="Modal Hero Image">
                            </div> -->

                            <div class="p-4 sm:p-10 text-center overflow-y-auto">
                                <h3 id="hs-subscription-with-image-label"
                                    class="mb-2 p-5 text-2xl font-bold text-lime-500 dark:text-neutral-200 bg-black select-none rounded-md">
                                    <?php echo ($coupon->getCode()); ?>
                                </h3>
                                <p class="text-gray-800 p-10 dark:text-neutral-500">
                                    Clicando no botão abaixo, o código do cupom será copiado e você será redirecionado para a página da promoção!
                                </p>

                                <div class="mt-6 flex justify-center gap-x-4">
                                    <button type="button" onclick="window.open('<?php echo ($coupon->getUrl()); ?>')"
                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-2xl font-medium rounded-lg border border-transparent bg-lime-400 text-black hover:bg-lime-400 focus:outline-none focus:bg-lime-400 disabled:opacity-50 disabled:pointer-events-none"
                                        data-hs-overlay="#hs-subscription-with-image">
                                        Ativar Cupom
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


























                <div class="mt-5 p-10 text-gray-800 dark:text-white">
                    <p class="text-xs">
                    <h3 class="text-base">Validade</h3>
                    <?php echo ($coupon->getEndDate('d/m/Y')); ?>
                    </p>
                    <p class="text-xs">
                    <h3 class="text-base">Descrição</h3>
                    <?php echo ($coupon->getDescription()); ?>
                    </p>
                    <p class="text-xs mt-10">
                    <h3 class="text-base">Confira os termos</h3>
                    <?php echo (nl2br($coupon->getTerms())); ?>
                    </p>
                </div>
            </div>
        </div>

    </article>



    <!-- Sticky Share -->
    <?php get_template_part('parts/share'); ?>
    <!-- End Sticky Share -->

</main>
<?php get_footer(); ?>