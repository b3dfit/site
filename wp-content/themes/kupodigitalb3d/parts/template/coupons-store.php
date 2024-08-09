<?php 
global $coupon;
global $coupons;
global $storeName;
?>
<!-- Component Coupons -->
<div class=" w-full ">
    <div class="mt-5 p-10">
        <h2 class="text-3xl text-center font-bold md:leading-tight dark:text-white" itemprop="name">
            Cupons da <?php echo ($storeName); ?> para você!
        </h2>
        <p itemprop="description" class="text-center ">
            <?php
            $linkCoupons = getUrlByName('cupom');
            if (empty($coupons)) :
                echo <<<HTML
                            No momento a {$storeName} está sem cupom de desconto!
                            <svg version="1.1" class="text-center mx-auto w-16 h-16 fill-black stroke-black dark:fill-white pt-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 103.696 103.696" 	 xml:space="preserve"> <g> 	<path d="M74.836,70.501c0.658,1.521-0.042,3.287-1.562,3.944c-1.521,0.66-3.286-0.042-3.944-1.562 c-2.894-6.689-9.731-11.012-17.421-11.012c-7.868,0-14.747,4.318-17.523,11.004c-0.479,1.154-1.596,1.85-2.771,1.85 c-0.384,0-0.773-0.074-1.15-0.229c-1.53-0.636-2.255-2.392-1.62-3.921c3.71-8.932,12.764-14.703,23.064-14.703 C61.994,55.872,70.994,61.614,74.836,70.501z M31.06,35.17c0-3.423,2.777-6.201,6.201-6.201c3.423,0,6.2,2.777,6.2,6.201 c0,3.426-2.777,6.203-6.2,6.203C33.836,41.373,31.06,38.597,31.06,35.17z M59.176,35.17c0-3.423,2.78-6.201,6.203-6.201 c3.424,0,6.201,2.777,6.201,6.201c0,3.426-2.777,6.203-6.201,6.203C61.957,41.373,59.176,38.597,59.176,35.17z M85.467,103.696 H18.23C8.179,103.696,0,95.518,0,85.467V18.23C0,8.178,8.179,0,18.23,0h67.235c10.053,0,18.23,8.178,18.23,18.23v67.235 C103.697,95.518,95.518,103.696,85.467,103.696z M18.23,8.579c-5.321,0-9.651,4.33-9.651,9.651v67.235 c0,5.321,4.33,9.651,9.651,9.651h67.235c5.321,0,9.651-4.33,9.651-9.651V18.23c0-5.321-4.33-9.651-9.651-9.651H18.23z"/></g></svg>
                             <!-- Card -->
                            <div class="text-center mt-5">
                                <div class="inline-block bg-white border shadow-sm rounded-full dark:bg-neutral-900 dark:border-neutral-800">
                                    <div class="py-3 px-4 flex items-center gap-x-2">
                                        <p class="text-gray-600 dark:text-neutral-400">
                                            Quer ver todos os cupons disponíveis?
                                        </p>
                                        <a class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-500"
                                            href="{$linkCoupons}">
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
                            HTML;
            else :
                echo ("Os cupons da loja {$storeName} são atualizados
                        frequêntemente!");
            endif;
            ?>
        </p>
        <?php
        foreach ($coupons as $coupon) :
            // component-coupon
            get_template_part('/parts/components/component-coupon');
            // end component-coupon
        endforeach;
        ?>
    </div>
</div>
<!-- End Component Coupons -->