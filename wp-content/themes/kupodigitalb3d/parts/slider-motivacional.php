<?php

$messages = [
    "Você deve esperar grandes coisas de si mesmo antes de poder realizá-las. – Michael Jordan",
    "O sucesso é o resultado da perfeição, do trabalho árduo, da aprendizagem com o fracasso, da lealdade e da persistência. – Colin Powell",
    "Não se pode colocar um limite em nada. Quanto mais você sonha, mais longe você chega. – Michael Phelps",
    "O importante não é vencer todos os dias, mas lutar sempre. – Ayrton Senna",
    "A dor é temporária. Ela pode durar um minuto, uma hora, um dia ou um ano, mas eventualmente acabará e algo mais tomará o seu lugar. Se eu desistir, no entanto, essa dor será para sempre. – Lance Armstrong",
    "A diferença entre o impossível e o possível reside na determinação de uma pessoa. – Tommy Lasorda",
    "O esporte não constrói caráter. Ele revela caráter. – Heywood Hale Broun",
    "Você não pode colocar um limite em nada. Quanto mais você sonha, mais longe você chega. – Usain Bolt",
    "Para alcançar grandes conquistas, devemos não apenas agir, mas também sonhar; não apenas planejar, mas também acreditar. – Anatole France"
];

?>

<div class="w-10/12 mx-auto bg-white rounded-lg shadow-sm dark:bg-zinc-950">
    <div data-hs-carousel='{
      "loadingClasses": "opacity-0"
    }' class="relative">
        <div class="hs-carousel relative overflow-hidden w-full min-h-64 bg-white rounded-lg">
            <div
                class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">

                <?php foreach ($messages as $message) : ?>
                    <div class="hs-carousel-slide">
                        <div class="flex px-28 justify-center h-full bg-white p-6 dark:bg-zinc-950">
                            <span
                                class=" self-center text-center text-3xl text-zinc-950 transition duration-700 dark:text-white">
                                <blockquote class="relative">
                                    <svg class="absolute -top-6 -start-8 size-16 text-gray-100 dark:text-neutral-700"
                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path
                                            d="M7.39762 10.3C7.39762 11.0733 7.14888 11.7 6.6514 12.18C6.15392 12.6333 5.52552 12.86 4.76621 12.86C3.84979 12.86 3.09047 12.5533 2.48825 11.94C1.91222 11.3266 1.62421 10.4467 1.62421 9.29999C1.62421 8.07332 1.96459 6.87332 2.64535 5.69999C3.35231 4.49999 4.33418 3.55332 5.59098 2.85999L6.4943 4.25999C5.81354 4.73999 5.26369 5.27332 4.84476 5.85999C4.45201 6.44666 4.19017 7.12666 4.05926 7.89999C4.29491 7.79332 4.56983 7.73999 4.88403 7.73999C5.61716 7.73999 6.21938 7.97999 6.69067 8.45999C7.16197 8.93999 7.39762 9.55333 7.39762 10.3ZM14.6242 10.3C14.6242 11.0733 14.3755 11.7 13.878 12.18C13.3805 12.6333 12.7521 12.86 11.9928 12.86C11.0764 12.86 10.3171 12.5533 9.71484 11.94C9.13881 11.3266 8.85079 10.4467 8.85079 9.29999C8.85079 8.07332 9.19117 6.87332 9.87194 5.69999C10.5789 4.49999 11.5608 3.55332 12.8176 2.85999L13.7209 4.25999C13.0401 4.73999 12.4903 5.27332 12.0713 5.85999C11.6786 6.44666 11.4168 7.12666 11.2858 7.89999C11.5215 7.79332 11.7964 7.73999 12.1106 7.73999C12.8437 7.73999 13.446 7.97999 13.9173 8.45999C14.3886 8.93999 14.6242 9.55333 14.6242 10.3Z"
                                            fill="currentColor"></path>
                                    </svg>

                                    <div class="relative z-10">
                                        <p class="text-zinc-950 sm:text-xl dark:text-white"><em><?php echo ($message); ?></em></p>
                                    </div>
                                </blockquote>

                            </span>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>
        </div>

        <button type="button"
            class="hs-carousel-prev hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-zinc-950 hover:bg-zinc-800/10 rounded-s-lg dark:text-white dark:hover:bg-white/10">
            <span class="text-2xl" aria-hidden="true">
                <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
            </span>
            <span class="sr-only">Anterior</span>
        </button>
        <button type="button"
            class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 rounded-e-lg dark:text-white dark:hover:bg-white/10">
            <span class="sr-only">Proxima</span>
            <span class="text-2xl" aria-hidden="true">
                <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </span>
        </button>

        <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2">

            <?php foreach ($messages as $message) : ?>
                <span
                    class="hs-carousel-active:bg-lime-500 hs-carousel-active:border-lime-500 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-zinc-50 dark:hs-carousel-active:bg-lime-500 dark:hs-carousel-active:border-blue-500"></span>
            <?php endforeach; ?>

        </div>
    </div>
</div>