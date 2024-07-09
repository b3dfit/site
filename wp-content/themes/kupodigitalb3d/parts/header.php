<header class="sticky top-4 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full">

    <nav class="relative max-w-[66rem] w-full bg-zinc-950 rounded-[10px] py-3 pl-5 pr-2 md:flex md:items-center md:justify-between md:py-0 mx-2 lg:mx-auto"
        aria-label="Global">


        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
                href="/" aria-label="Logo">
                <img src="/files/dist/images/b3d-lime.svg" width="50px"class="mb-2"
                    alt="Logo">
            </a>
            <!-- End Logo -->

            <div class="md:hidden">
                <button type="button"
                    class="hs-collapse-toggle size-8 flex justify-center items-center text-sm font-semibold rounded-full dark:bg-zinc-800 dark:text-white disabled:opacity-50 disabled:pointer-events-none"
                    data-hs-collapse="#navbar-collapse" aria-controls="navbar-collapse" aria-label="Toggle navigation">
                    <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Collapse -->
        <div id="navbar-collapse"
            class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block">
            <div
                class="flex flex-col gap-y-4 gap-x-0 mt-5 md:flex-row md:items-center md:justify-end md:gap-y-0 md:gap-x-7 md:mt-0 md:ps-7">
                <a class="text-sm dark:text-white text-zinc-50 hover:text-neutral-300 md:py-4 focus:outline-none focus:text-neutral-300"
                    href="/" aria-current="page">Home</a>





                <div class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] md:py-4">
                    <button type="button"
                        class="flex items-center w-full text-sm dark:text-white text-zinc-50 hover:text-neutral-300 focus:outline-none focus:text-neutral-300">
                        Artigos
                        <svg class="flex-shrink-0 ms-1 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>
                    <div
                        class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 md:w-48 hidden z-10 dark:bg-zinc-800 bg-zinc-800 md:shadow-md rounded-lg p-2 before:absolute top-full before:-top-5 before:start-0 before:w-full before:h-5">
                        <?php
                        $categories = get_categories(array(
                            'orderby' => 'name',
                            'order' => 'ASC'
                        ));
                        foreach ($categories as $category) {
                            $category_link = get_category_link($category->term_id);
                            $category_name = $category->name;

                            echo '<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm dark:text-white text-zinc-50 hover:text-neutral-300 font-medium focus:outline-none focus:text-neutral-300" href="' . esc_url($category_link) . '">' . esc_html($category_name) . '</a>';
                        }
                        ?>
                    </div>
                </div>




                <a class="text-sm dark:text-white text-zinc-50 hover:text-neutral-300 md:py-4 focus:outline-none focus:text-neutral-300"
                    href="#">Reviews</a>
                <div class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] md:py-4">
                    <button type="button"
                        class="flex items-center w-full text-sm dark:text-white text-zinc-50 hover:text-neutral-300 focus:outline-none focus:text-neutral-300">
                        Sobre a Plataforma
                        <svg class="flex-shrink-0 ms-1 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>

                    <div
                        class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 md:w-48 hidden z-10 dark:bg-zinc-800 bg-zinc-800 md:shadow-md rounded-lg p-2 before:absolute top-full before:-top-5 before:start-0 before:w-full before:h-5">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm dark:text-white text-zinc-50 hover:text-neutral-300 font-medium focus:outline-none focus:text-neutral-300"
                            href="<?php echo (getUrlByName('sobre')); ?>">
                            Sobre nós
                        </a>
                        <div
                            class="hs-dropdown relative [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover]">
                            <button type="button"
                                class="w-full flex justify-between items-center py-2 px-3 text-sm dark:text-white text-zinc-50 hover:text-neutral-300 font-medium focus:outline-none focus:text-neutral-300">
                                Legal
                                <svg class="sm:-rotate-90 flex-shrink-0 ms-2 size-4" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </button>

                            <div
                                class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 md:w-48 hidden z-10 md:mt-2 dark:bg-zinc-800 bg-zinc-800 md:shadow-md rounded-lg p-2 before:absolute before:-end-5 before:top-0 before:h-full before:w-5 top-0 end-full !mx-[10px]">
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm dark:text-white text-zinc-50 hover:text-neutral-300 font-medium focus:outline-none focus:text-neutral-300"
                                    href="<?php echo (getUrlByName('diretrizescomunidade')); ?>">
                                    Diretrizes da Comunidade
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm dark:text-white text-zinc-50 hover:text-neutral-300 font-medium focus:outline-none focus:text-neutral-300"
                                    href="<?php echo (getUrlByName('políticacookies')); ?>">
                                    Política de Cookies
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm dark:text-white text-zinc-50 hover:text-neutral-300 font-medium focus:outline-none focus:text-neutral-300"
                                    href="<?php echo (getUrlByName('políticaprivacidade')); ?>">
                                    Política de Privacidade
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm dark:text-white text-zinc-50 hover:text-neutral-300 font-medium focus:outline-none focus:text-neutral-300"
                                    href="<?php echo (getUrlByName('termosuso')); ?>">
                                    Termos de Uso
                                </a>
                            </div>
                        </div>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm dark:text-white text-zinc-50 hover:text-neutral-300 font-medium focus:outline-none focus:text-neutral-300"
                            href="<?php echo (getUrlByName('suporte')); ?>">
                            Suporte e Ajuda
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm dark:text-white text-zinc-50 hover:text-neutral-300 font-medium focus:outline-none focus:text-neutral-300"
                            href="<?php echo (getUrlByName('desenvolvedor')); ?>">
                            Desenvolvedor
                        </a>

                    </div>
                </div>

                <div class="mx-2">
                    <a class="group inline-flex items-center gap-x-2 py-2 px-3   bg-zinc-800 font-medium text-sm text-zinc-50 rounded-full focus:outline-none"
                        href="<?php echo (getUrlByName('contato')); ?>">
                        Fale Conosco
                    </a>
                </div>
            </div>
        </div>
        <!-- End Collapse -->
    </nav>
</header>