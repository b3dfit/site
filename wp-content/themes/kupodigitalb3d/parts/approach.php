<?php
$steps = [
    ["title" => "Motivação e Objetivo", "message" => "Ajudamos você a identificar o motivo para querer mudar e os objetivos que deseja alcançar. Definir um propósito claro é o primeiro passo para uma jornada de sucesso."],
    ["title" => "Informação e Preparação", "message" => "Busque entender como definir metas e o que é necessário para dar o primeiro passo. Conhecimento e planejamento são essenciais para começar sua jornada com segurança e eficácia."],
    ["title" => "Atividade e Monitoramento", "message" => "Comece as atividades escolhidas de forma gradual e monitore cada uma desde o primeiro momento. Identificar progresso e pontos de evolução é crucial para manter a motivação e ajustar seu plano conforme necessário."],
];
?>


<div class="dark:bg-zinc-950">
    <!-- Approach -->
    <div class="max-w-5xl px-4 xl:px-0 py-10 lg:pt-20  mx-auto">
        <!-- Title -->
        <div class="max-w-4xl mb-10 lg:mb-14">
            <h2 class="dark:text-white font-semibold text-2xl md:text-4xl md:leading-tight">Sua jornada para a
                Performance Começa Aqui!</h2>
            <p class="mt-1 text-zinc-950 dark:text-white">Acreditamos que todos podem alcançar um estilo de vida ativo e
                saudável. Nossa metodologia exclusiva foi projetada para motivar você a sair do sedentarismo, equipá-lo
                com o conhecimento necessário e monitorar seu progresso para que você atinja seus objetivos de
                performance. Junte-se a nós e descubra como pequenos passos podem levar a grandes conquistas!</p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 lg:items-center">
            <div class="aspect-w-16 aspect-h-9 lg:aspect-none">
                <img class="w-full object-cover rounded-xl" src="/files/dist/images/theme/pexels-cottonbro-5319494.jpg"
                    alt="Sua jornada para a Performance Começa Aqui!">
            </div>
            <!-- End Col -->

            <!-- Timeline -->
            <div>
                <!-- Heading -->
                <div class="mb-4">
                    <h3 class="text-sm font-medium uppercase dark:text-zinc-50">
                        Passo-a-Passo
                    </h3>
                </div>
                <!-- End Heading -->


                <?php
                foreach ($steps as $key => $message) :
                    $message = (object) $message;
                    $key = $key + 1;
                    ?>
                    <!-- Item -->
                    <div class="flex gap-x-5 ms-1">
                        <!-- Icon -->
                        <div
                            class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] dark:after:bg-zinc-800">
                            <div class="relative z-10 size-8 flex justify-center items-center">
                                <span
                                    class="flex flex-shrink-0 justify-center items-center size-8 border dark:dark:border-neutral-800 dark:text-zinc-50 font-semibold text-xs uppercase rounded-full">
                                    <?php echo ($key); ?>
                                </span>
                            </div>
                        </div>
                        <!-- End Icon -->

                        <!-- Right Content -->
                        <div class="grow pt-0.5 pb-8 sm:pb-12">
                            <p class="dark:text-sm lg:text-base dark:text-zinc-50">
                                <span class="dark:text-white font-semibold"><?php echo ($message->title); ?>:</span>
                                <?php echo ($message->message); ?>
                            </p>
                        </div>
                        <!-- End Right Content -->
                    </div>
                    <!-- End Item -->
                <?php endforeach; ?>
                <a class="group inline-flex items-center gap-x-2 py-2 px-3 bg-lime-400 text-black  font-medium text-sm  rounded-full focus:outline-none"
                    href="<?php echo (getUrlByName('cadastro')); ?>">

                    <svg class="flex-shrink-0 size-6" viewBox="0 0 48 48" version="1.1" id="svg4"
                        xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                        <defs id="defs1">
                            <style id="style1">
                                .a {
                                    fill: none;
                                    stroke: #000000;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                }
                            </style>
                        </defs>
                        <path class="a" d="M24,5.5a9.2371,9.2371,0,1,1-9.22,9.2543v-.0172A9.2371,9.2371,0,0,1,24,5.5Z"
                            id="path1" />
                        <path class="a"
                            d="M24,27.3973c10.3208,0,18.457,6.8726,18.457,10.2956V42.5H5.543V37.6069C5.543,34.1839,13.6792,27.3973,24,27.3973Z"
                            id="path2" />
                        <path
                            class="opacity-0 group-hover:opacity-100 group-focus:opacity-100 group-hover:delay-100 transition"
                            d="m 35.7565,0.47585 a 9.4519125,15.455516 0 0 1 8.4017,13.6352" id="path3"
                            style="stroke-width:1.34295" />
                        <path class="opacity-0 group-hover:opacity-100 group-focus:opacity-100 transition"
                            d="m 31.95115,3.5334 a 8.8407595,14.634876 0 0 1 6.9842,11.7079" id="path4"
                            style="stroke-width:2.27493" />
                        <path style="fill:#84cc16;stroke-width:0.06" d="M 17.9388,18.1269 29.2542,17.6742 Z"
                            id="path5" />
                        <path
                            class="opacity-0 group-hover:opacity-100 group-focus:opacity-100 group-hover:delay-100 transition"
                            d="m 28.435755,16.929382 -9.412366,0.07395 c 0,0 2.2995,3.39345 4.807156,3.4395 2.507656,0.04605 4.60521,-3.51345 4.60521,-3.51345 z"
                            id="path7" sodipodi:nodetypes="ccsc" />
                    </svg>

                    <!-- 
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path
                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                        </path>
                        <path
                            class="opacity-0 group-hover:opacity-100 group-focus:opacity-100 group-hover:delay-100 transition"
                            d="M14.05 2a9 9 0 0 1 8 7.94"></path>
                        <path class="opacity-0 group-hover:opacity-100 group-focus:opacity-100 transition"
                            d="M14.05 6A5 5 0 0 1 18 10"></path>
                    </svg> -->
                    Cadastre-se Gratuitamente!
                </a>
            </div>
            <!-- End Timeline -->
        </div>
        <!-- End Grid -->
    </div>
</div>