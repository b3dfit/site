<?php
global $tenis;
?>

<!-- Comparison Table -->
<div class="relative">
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 md:py-14 lg:py-20 mx-auto">


        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-3xl md:leading-tight dark:text-white">Confira todos os detalhes sobre
                o <?php echo (get_the_title()); ?> e veja se ele é o que você precisa!</h2>
            <p class="mt-1 text-gray-600 dark:text-neutral-400">Todas as informações dos produtos são dinamicas, tendo
                como fonte as informações da marca e o feedback da nossa comunidade.</p>
        </div>

        <!-- <div
            class="relative after:absolute after:inset-x-0 after:bottom-0 after:z-10 after:w-full after:h-48 after:bg-gradient-to-t after:from-white after:via-white/70 dark:after:from-neutral-900 dark:after:via-neutral-900/95"> -->
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



                <?php foreach ($tenis->classification as $key => $classification) : ?>
                    <!-- List -->
                    <ul class="grid lg:grid-cols-12 lg:gap-12">
                        <!-- Item -->
                        <li class="lg:col-span-2 pb-1.5 lg:py-3">
                            <span class="text-sm text-zinc-950 capitalize dark:text-neutral-200">
                                <?php echo ($key); ?>
                            </span>
                        </li>
                        <!-- End Item -->


                        <!-- Item -->
                        <li class="col-span-10 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center ">
                            <div class="grid grid-cols-1 lg:block">
                                <!-- Progress -->
                                <div class="xs:hidden flex w-full h-8 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700"
                                    role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="10">
                                    <div class="flex flex-col justify-center rounded-full overflow-hidden bg-lime-500 text-xs text-white text-left px-3 whitespace-nowrap dark:bg-lime-500 transition duration-500"
                                        style="width: <?php echo ($classification * 10); ?>%">
                                        <?php echo ($classification); ?>
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

        <!-- View More Button -->
        <!-- <div class="mt-8 text-center">
            <button type="button" id="view-all-features"
                class="hs-collapse-toggle hs-collapse-open:rounded-full hs-collapse-open:px-3 group py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-zinc-950 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-white dark:hover:bg-neutral-800"
                data-hs-collapse="#view-all-features-button">
                <span class="hs-collapse-open:hidden">View all features</span>
                <svg class="hidden hs-collapse-open:block group-hover:rotate-180 transition duration-300 flex-shrink-0 size-4"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18" />
                    <path d="m6 6 12 12" />
                </svg>
            </button>
        </div> -->
        <!-- End View More Button -->
    </div>
</div>
<!-- End Comparison Table -->