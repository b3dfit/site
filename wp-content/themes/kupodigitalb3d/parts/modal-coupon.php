<div id="modal-coupon" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto"
    role="dialog" tabindex="-1" aria-labelledby="modal-coupon-label">
    <div
        class="hs-overlay-open:mt-80 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 md:mt-24 opacity-0 ease-out transition-all m-3 sm:mx-auto md:w-1/2">
        <!-- sm:max-w-lg sm:w-full  -->
        <div class="relative flex flex-col bg-white shadow-lg rounded-xl dark:bg-zinc-950 border  dark:border-lime-400">
            <div class="absolute top-2 end-2">
                <button type="button" id="close-modal"
                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                    aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>

            <div class="p-4 sm:p-10 text-center overflow-y-auto">
                <!-- Icon -->
                <span
                    class="mb-4 inline-flex justify-center items-center size-[46px] rounded-full border-4 border-lime-50 bg-lime-400 text-lime-500 dark:bg-lime-700 dark:border-lime-600 dark:text-lime-100">
                    <svg class="shrink-0 size-9" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 248.774 248.774" xml:space="preserve">
                        <g>
                            <g>
                                <g>
                                    <path
                                        d="M219.179,51.502H29.6C13.277,51.502,0,63.539,0,78.335v92.104c0,14.796,13.277,26.833,29.6,26.833h189.577 c16.318,0,29.597-12.037,29.597-26.833V78.335C248.774,63.539,235.495,51.502,219.179,51.502z M233.557,170.439 c0,6.404-6.455,11.616-14.38,11.616H29.6c-7.931,0-14.383-5.212-14.383-11.616V78.335c0-6.404,6.452-11.616,14.383-11.616 h189.577c7.926,0,14.38,5.212,14.38,11.616V170.439z" />
                                    <rect x="67.622" y="104.742" width="15.217" height="13.097" />
                                    <rect x="67.622" y="157.127" width="15.217" height="13.097" />
                                    <rect x="67.622" y="78.548" width="15.217" height="13.097" />
                                    <rect x="67.622" y="130.936" width="15.217" height="13.094" />
                                    <path
                                        d="M152.026,103.507c0-11.874-9.858-21.611-21.616-21.611c-11.874,0-21.613,9.62-21.613,21.611 c0,12.115,9.741,21.613,21.613,21.613C142.168,125.12,152.026,115.503,152.026,103.507z M121.029,103.507 c0-5.225,4.276-9.379,9.379-9.379s9.379,4.157,9.379,9.379c0,5.227-4.276,9.381-9.379,9.381 C125.305,112.888,121.029,108.731,121.029,103.507z" />
                                    <path
                                        d="M186.189,124.41c-11.874-0.043-21.651,9.544-21.697,21.537c-0.041,12.11,9.665,21.649,21.542,21.695 c11.76,0.043,21.646-9.546,21.692-21.537C207.767,134.227,197.947,124.45,186.189,124.41z M186.108,155.407 c-5.103,0-9.376-4.162-9.376-9.384c0-5.227,4.276-9.381,9.376-9.381c5.108,0,9.381,4.157,9.381,9.381 C195.492,151.248,191.216,155.407,186.108,155.407z" />
                                    <rect x="109.054" y="117.595"
                                        transform="matrix(0.4696 -0.8829 0.8829 0.4696 -26.7873 205.8196)" width="97.7"
                                        height="15.217" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </span>
                <!-- End Icon -->
                <div class="inline-flex text-left w-full text-xs  text-gray-600 dark:text-neutral-300">
                    Cupom de Desconto da loja <span class="ml-1" id="store-modal-label"></span>
                </div>
                <h3 id="coupon-modal-label"
                    class="mt-0 w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-2xl font-medium rounded-lg border border-neutral-300 dark:border-lime-400 bg-white text-black shadow-sm  disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent   dark:text-lime-400 ">
                </h3>
                <p class="mt-2 text-sm text-gray-600 dark:text-neutral-300">
                    Clicando no botão abaixo, o código do cupom será copiado e você será redirecionado
                    para a página da promoção!
                </p>

                <div class="mt-6 flex justify-center gap-x-4">
                    <button type="button"
                        class="buttonActiveModal group w-full inline text-center mx-auto  py-2 px-3 bg-lime-400 font-medium text-sm text-black rounded-md focus:outline-none">
                        Ativar Cupom
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>