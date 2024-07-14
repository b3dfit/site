<?php

$user_count = count_users();
$total_users = $user_count['total_users'];

$post_count = wp_count_posts();
$total_posts = 0;
foreach ($post_count as $status => $count) {
    $total_posts += $count;
}

?>

<div class="dark:bg-zinc-950">
    <div class="max-w-5xl px-4 xl:px-0 py-10 mx-auto">
        <div class="border dark:dark:border-neutral-800 rounded-xl">
            <div
                class="p-4 lg:p-8 bg-gradient-to-bl dark:from-neutral-800 dark:via-neutral-900 to-neutral-950 rounded-xl">
                <div class="grid grid-cols-1 sm:grid-cols-3 items-center gap-y-20 gap-x-12">
                    <!-- Stats -->
                    <div
                        class="relative text-center first:before:hidden before:absolute before:-top-full sm:before:top-1/2 before:start-1/2 sm:before:-start-6 before:w-px before:h-20 before:bg-zinc-800 before:rotate-[60deg] sm:before:rotate-12 before:transform sm:before:-translate-y-1/2 before:-translate-x-1/2 sm:before:-translate-x-0 before:mt-3.5 sm:before:mt-0">

                        <svg class="flex-shrink-0 size-6 sm:size-8 dark:text-zinc-50 dark:stroke-white mx-auto" viewBox="0 0 48 48"
                            xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <style>
                                    .a {
                                      
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-width: 4;
                                    }
                                </style>
                            </defs>
                            <path class="a dark:stroke-white"
                                d="M39.5,15.5h-9a2,2,0,0,1-2-2v-9h-18a2,2,0,0,0-2,2v35a2,2,0,0,0,2,2h27a2,2,0,0,0,2-2Zm-11-11,11,11M15,23H33M15,32H33" />
                        </svg>
                        <div class="mt-3 sm:mt-5">
                            <h3 class="dark:text-lg sm:text-3xl font-semibold dark:text-white">
                                <?php echo ($total_posts); ?>+
                            </h3>
                            <p class="mt-1 text-sm sm:text-base dark:text-neutral-400">Conteúdos Publicados</p>
                        </div>
                    </div>
                    <!-- End Stats -->

                    <!-- Stats -->
                    <div
                        class="relative text-center first:before:hidden before:absolute before:-top-full sm:before:top-1/2 before:start-1/2 sm:before:-start-6 before:w-px before:h-20 before:bg-zinc-800 before:rotate-[60deg] sm:before:rotate-12 before:transform sm:before:-translate-y-1/2 before:-translate-x-1/2 sm:before:-translate-x-0 before:mt-3.5 sm:before:mt-0">
                        <div class="flex justify-center items-center -space-x-5">
                            <img class="relative z-[2] flex-shrink-0 size-8 rounded-full border-[3px] dark:dark:border-neutral-800"
                                src="https://images.unsplash.com/photo-1601935111741-ae98b2b230b0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                alt="Image Description">
                            <img class="relative z-[1] flex-shrink-0 size-8 rounded-full border-[3px] dark:dark:border-neutral-800 -mt-7"
                                src="https://images.unsplash.com/photo-1570654639102-bdd95efeca7a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                alt="Image Description">
                            <img class="relative flex-shrink-0 size-8 rounded-full border-[3px] dark:dark:border-neutral-800"
                                src="https://images.unsplash.com/photo-1679412330254-90cb240038c5?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2.5&amp;w=320&amp;h=320&amp;q=80"
                                alt="Image Description">
                        </div>
                        <div class="mt-3 sm:mt-5">
                            <h3 class="dark:text-lg sm:text-3xl font-semibold dark:text-white">
                                <?php echo ($total_users * 4); ?>
                            </h3>
                            <p class="mt-1 text-sm sm:text-base dark:text-neutral-400">Membros da Comunidade</p>
                        </div>
                    </div>
                    <!-- End Stats -->

                    <!-- Stats -->
                    <div
                        class="relative text-center first:before:hidden before:absolute before:-top-full sm:before:top-1/2 before:start-1/2 sm:before:-start-6 before:w-px before:h-20 before:bg-zinc-800 before:rotate-[60deg] sm:before:rotate-12 before:transform sm:before:-translate-y-1/2 before:-translate-x-1/2 sm:before:-translate-x-0 before:mt-3.5 sm:before:mt-0">

                        <svg class="flex-shrink-0 size-6 sm:size-8 dark:text-zinc-50 mx-auto" viewBox="0 0 48 48"
                            id="a">
                            <defs>
                                <style>
                                    .b {
                                        fill: none;
                                        stroke: #000000;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-width: 4;
                                    }
                                </style>
                            </defs>
                            <g>
                                <path class="b dark:stroke-white"
                                    d="m20.505,4.5h6.67c.5523,0,1,.4477,1,1v3h4.63c1.1046,0,2,.8954,2,2v31c0,1.1046-.8954,2-2,2H15.195c-1.1046,0-2-.8954-2-2V10.5c0-1.1046.8954-2,2-2h4.31v-3c0-.5523.4477-1,1-1Z" />
                                <line class="b" x1="19.505" y1="8.5" x2="28.175" y2="8.5" />
                            </g>
                            <polyline class="b dark:stroke-white" points="25.8683 17.5 20 26 28 26 22.1317 34.5" />
                        </svg>
                        <div class="mt-3 sm:mt-5">
                            <h3 class="dark:text-lg sm:text-3xl font-semibold dark:text-white">100%</h3>
                            <p class="mt-1 text-sm sm:text-base dark:text-neutral-400">Energia para continuar</p>
                        </div>
                    </div>
                    <!-- End Stats -->
                </div>
            </div>
        </div>
    </div>
</div>