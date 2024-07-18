<?php
global $tenis;
?>

<!-- Comparison Table -->
<div class="relative">
    <div class="w-full px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">

        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-xl font-bold md:text-2xl md:leading-tight dark:text-white">Classificação
                Geral do <?php echo ($tenis->getTitle()) ?>
        </div>

        <div>

            <!-- Section -->
            <div class="mt-6 space-y-4 lg:space-y-0">
                <!-- List -->
                <ul class="grid lg:grid-cols-12 lg:gap-12">
                    <!-- Item -->
                    <li class="lg:col-span-2 lg:py-3">
                        <span class="text-lg font-semibold text-zinc-950 dark:text-neutral-200">
                            Nota
                        </span>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                        1
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                        2
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                        3
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                        4
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                        5
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                        6
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                        7
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                        8
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                        9
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                        10
                    </li>
                    <!-- End Item -->


                </ul>
                <!-- End List -->

                <?php
                foreach ($tenis->getClassificationExplained() as $key => $classification) :
                    $classification = (object) $classification;
                    ?>
                    <!-- List -->
                    <ul class="grid lg:grid-cols-12 lg:gap-12" itemprop="reviewRating" itemscope
                        itemtype="https://schema.org/Rating">

                        <!-- Item -->
                        <li class="lg:col-span-2 pb-1.5 lg:py-3">
                            <span class="text-sm text-zinc-950 capitalize dark:text-neutral-200" itemprop="name">
                                <?php echo ($classification->name); ?>
                            </span>
                        </li>
                        <meta itemprop="ratingValue" content="<?php echo ($classification->value); ?>">
                        <meta itemprop="bestRating" content="10">
                        <meta itemprop="description" content="<?php echo ($classification->description); ?>">

                        <!-- End Item -->


                        <!-- Item -->
                        <li class="col-span-10 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center hs-tooltip inline-block">
                            <div class="grid grid-cols-1 lg:block">
                                <!-- Progress -->
                                <div class="xs:hidden flex w-full h-8 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700"
                                    role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="10">
                                    <span
                                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-2 px-4 bg-zinc-950 text-lime-500 text-xl font-medium rounded shadow-sm dark:bg-neutral-700"
                                        role="tooltip">
                                        <?php echo ($classification->description); ?>
                                    </span>
                                    <div class="flex flex-col justify-center rounded-full overflow-hidden bg-lime-500 text-xs text-white text-left px-3 whitespace-nowrap dark:bg-lime-500 transition duration-500"
                                        style="width: <?php echo ($classification->value * 10); ?>%"
                                        itemprop="<?php echo ($key); ?>Rating">
                                        <?php echo ($classification->value); ?>
                                    </div>
                                </div>
                                <!-- End Progress -->
                            </div>
                        </li>
                        <!-- End Item -->


                    </ul>
                <?php endforeach; ?>
                <!-- End List -->
            </div>
            <!-- End Section -->
        </div>

    </div>
</div>
<!-- End Comparison Table -->