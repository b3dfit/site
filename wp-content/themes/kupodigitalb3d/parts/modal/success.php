<div id="modal-msg-success"
    class="hs-overlay hidden size-full fixed top-40 start-0 z-[80] overflow-x-hidden overflow-y-auto">
    <div
        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
        <div
            class="relative flex flex-col bg-white shadow-lg rounded-xl  dark:bg-zinc-950 border  dark:border-lime-400">
            <div class="absolute top-2 z-[10] end-2">
                <button type="button"
                    class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-transparent bg-white/10 text-white hover:bg-white/20 disabled:opacity-50 disabled:pointer-events-none"
                    data-hs-overlay="#modal-msg-success">
                    <span class="sr-only">Close</span>
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>

            <div class="aspect-w-16 aspect-h-7">
                <img class="w-full object-cover rounded-t-xl"
                    src="<?php echo (get_template_directory_uri()); ?>/assets/image/photo-1556705634-7754fc9519f9.jpeg"
                    alt="Message">
            </div>

            <div class="p-4 sm:p-10 text-center overflow-y-auto">
                <h3 class="mb-2 text-2xl font-light text-gray-800 dark:text-neutral-300">
                    Yeahhhh 🎉
                </h3>
                <p class="text-zinc-950 dark:text-neutral-300" id="modal-msg-text">

                </p>

                <div class="mt-6 flex justify-center gap-x-4">
                    <button type="button"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-zinc-950 text-white hover:bg-zinc-800 disabled:opacity-50 disabled:pointer-events-none dark:bg-lime-400 dark:text-black"
                        data-hs-overlay="#modal-msg-success">
                        Fechar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>