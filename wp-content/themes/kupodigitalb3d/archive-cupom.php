<?php get_header(); ?>
<?php
$coupons = (new \Review\Repository\Coupon)->getNoExpired(100, 0, null, 'coupon_endDate');
?>

<main id="content">
    <!-- Table Section -->
    <div class="max-w-5xl px-4 py-10 sm:px-6 lg:px-0 lg:py-14 mx-auto">
        
        <!-- Card -->
        <div class="flex flex-col">

            <!-- Header -->
            <div class="w-full md:px-12 py-4 text-center mb-10">

                <h1 class="mx-auto text-3xl font-bold">
                    Aproveite Ofertas Exclusivas com Nossos Cupons de Desconto!
                </h1>

                <p class="mx-auto text-sm text-gray-600 dark:text-neutral-400">
                    Atualizamos regularmente nossos cupons para garantir que você tenha acesso às ofertas mais recentes
                    e vantajosas.
                </p>
            </div>
            <!-- End Header -->

            <?php
            foreach ($coupons as $coupon) :
                // component-coupon
                get_template_part('parts/components/component-coupon');
                // end component-coupon
            endforeach;
            ?>


        </div>
        <!-- End Card -->

    </div>
    <!-- End Table Section -->


    
</main>

<?php get_footer(); ?>