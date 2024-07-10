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
                        <div class="flex justify-center h-full bg-white p-6 dark:bg-zinc-950">
                            <span class="self-center text-center text-3xl text-zinc-950 transition duration-700 dark:text-white">
                                <blockquote>❝<?php echo ($message); ?>❞</blockquote>
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