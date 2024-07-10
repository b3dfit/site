<?php
$stats = [
    "runners" => [
        [
            "stats" => "50 milhões",
            "title" => "Número Total de Corredores",
            "description" => "Mais de 50 milhões de corredores usam o Strava em todo o mundo."
        ],
        [
            "stats" => "2,1 bilhões",
            "title" => "Distância Total Percorrida",
            "description" => "Em 2023, os usuários do Strava correram um total de 2,1 bilhões de quilômetros."
        ],
        [
            "stats" => "15 milhões",
            "title" => "Atividades Registradas por Semana",
            "description" => "Em média, são registradas 15 milhões de atividades de corrida por semana no Strava."
        ],
        [
            "stats" => "40 vezes",
            "title" => "Voltas ao Mundo",
            "description" => "A distância total corrida pelos usuários do Strava em 2023 é equivalente a dar 40 voltas ao redor da Terra."
        ]
    ],
    "performance" => [
        [
            "stats" => "50 minutos",
            "title" => "Tempo Médio de Corrida",
            "description" => "A duração média de uma corrida é de aproximadamente 50 minutos."
        ],
        [
            "stats" => "8 km",
            "title" => "Distância Média por Corrida",
            "description" => "A distância média percorrida por corrida é de cerca de 8 km."
        ],
        [
            "stats" => "25%",
            "title" => "Melhorias na Performance",
            "description" => "25% dos corredores no Strava registram uma melhoria na performance (tempo de corrida) em um ano."
        ],
        [
            "stats" => "20%",
            "title" => "PRs (Personal Records)",
            "description" => "Corredores estabelecem um novo PR em 20% das suas corridas anuais."
        ],
        [
            "stats" => "80%",
            "title" => "Uso de GPS e Wearables",
            "description" => "80% dos corredores usam dispositivos GPS ou smartwatches para registrar suas corridas."
        ],
        [
            "stats" => "65%",
            "title" => "Compartilhamento em Redes Sociais",
            "description" => "65% dos usuários do Strava compartilham suas atividades de corrida nas redes sociais."
        ]
    ],
    "investment" => [
        [
            "stats" => "600-800 km",
            "title" => "Troca de Tênis",
            "description" => "Corredores trocam seus tênis de corrida, em média, a cada 600-800 km."
        ],
        [
            "stats" => "R$ 1K - R$ 2K",
            "title" => "Investimento Anual em Tênis",
            "description" => "Os corredores gastam, em média, R$ 1.000 a R$ 2.000 por ano em tênis de corrida."
        ],
        [
            "stats" => "5K e 10K",
            "title" => "Corridas Mais Populares",
            "description" => "As corridas de 5K e 10K são as mais populares entre os corredores do Strava."
        ],
        [
            "stats" => "1 em cada 3",
            "title" => "Desafios Concluídos",
            "description" => "1 em cada 3 usuários participa de desafios mensais no Strava, como correr 100 km em um mês."
        ],
        [
            "stats" => "10 pares",
            "title" => "Total de Tênis Usados",
            "description" => "Se um corredor médio trocar seus tênis a cada 700 km, ele usará cerca de 10 pares de tênis ao longo de 7.000 km."
        ]
    ],
];
$runners = (object) $stats['runners'][rand(0, count($stats['runners'])-1)];
$performance = (object) $stats['performance'][rand(0, count($stats['runners'])-1)];
$investment = (object) $stats['investment'][rand(0, count($stats['runners'])-1)];
?>




<div class="dark:bg-zinc-950 bg-gradient-to-t dark:from-black to-transparent">
    <div class="max-w-5xl px-4 xl:px-0 py-24 mx-auto">
        <!-- Title -->
        <div class="max-w-3xl mb-10 lg:mb-14">
            <h2 class="dark:text-white font-semibold text-2xl md:text-4xl md:leading-tight">Big numbers</h2>
            <p class="mt-1 dark:text-neutral-400">Acompanhe os números que impulsionam a paixão pelas corridas de rua e
                veja como você se compara à comunidade global de corredores. Seja parte desta jornada e use essas
                informações para inspirar sua próxima corrida!</p>
        </div>
        <!-- End Title -->

        <!-- Card Grid -->
        <div
            class="grid grid-cols-1 lg:grid-cols-3 items-center border dark:dark:border-neutral-700 divide-y lg:divide-y-0 lg:divide-x divide-neutral-700 rounded-xl">
            <!-- Card -->
            
            <div
                class="group relative z-10 p-4 md:p-6 h-full flex flex-col dark:bg-zinc-950 first:rounded-t-xl last:rounded-b-xl lg:first:rounded-l-xl lg:first:rounded-tr-none lg:last:rounded-r-xl lg:last:rounded-bl-none before:absolute before:inset-0 before:bg-gradient-to-b before:hover:from-transparent before:hover:via-transparent before:hover:to-zinc-50/10 before:via-80% before:-z-[1] before:last:rounded-b-xl lg:before:first:rounded-s-xl lg:before:last:rounded-e-xl lg:before:last:rounded-bl-none before:opacity-0 before:hover:opacity-100">
                <div class="mb-5">
                    <svg class="flex-shrink-0 w-8 h-8" width="32" height="32" viewBox="0 0 48 48"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" stroke="#000000" class="a"
                            d="M16.2017,29.6636c-.8763.5008-4.34,3.2133-4.34,3.2133s5.3416,4.6739,5.8841,5.425C17.7458,38.3019,16.2017,30.79,16.2017,29.6636Z" />
                        <path fill="none" stroke="#000000" class="a"
                            d="M20.3748,19.9821c-1.7527,0-4.1731,1.9474-6.3848,4.1453S6.1864,31.166,6.1864,33.2942,17.245,43.4765,21.0842,43.4765s9.0139.3756,12.0185-1.8779,8.2209-7.47,8.43-8.3878a12.9,12.9,0,0,0,.1669-4.1314,1.8869,1.8869,0,0,0-1.5857-1.1684c-.8138,0-2.9421.8763-2.9421,2.3577a13.6812,13.6812,0,0,0,.5425,2.8169,60.3878,60.3878,0,0,1-5.55,3.86s.1252-7.5742-.2712-9.4521-3.86-4.8825-3.86-5.4667,1.1893-4.4652,1.1893-4.4652,2.4413.5425,2.7125-.9389.0835-1.5441.0835-1.5441a1.954,1.954,0,0,0,.5634-1.5857c-.167-.8764-.6677-.6886-.6469-1.1893S32.8732,4.5,26.0293,4.5s-6.8855,5.6337-6.8855,6.6978,3.1506,5.4041,2.8376,7.1359S21.71,19.92,21.71,19.92,21.0179,19.9821,20.3748,19.9821Z" />
                        <path fill="none" stroke="#000000" class="a"
                            d="M19.9784,13.7642c-.7721.2295-5.1538,6.5935-7.95,6.5935a5.5982,5.5982,0,0,1-3.6724-1.94c2.4622.1461,5.592-4.6321,7.9915-4.9868A12.4614,12.4614,0,0,1,19.9784,13.7642Z" />
                    </svg>
                    <div class="mt-5">
                        <p class="font-semibold text-4xl dark:text-white"><?php echo($runners->stats);?></p>
                        <h3 class="mt-5 font-medium text-lg dark:text-white"><?php echo($runners->title);?></h3>
                        <p class="mt-1 dark:text-neutral-400"><?php echo($runners->description);?></p>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div
                class="group relative z-10 p-4 md:p-6 h-full flex flex-col dark:bg-zinc-950 first:rounded-t-xl last:rounded-b-xl lg:first:rounded-l-xl lg:first:rounded-tr-none lg:last:rounded-r-xl lg:last:rounded-bl-none before:absolute before:inset-0 before:bg-gradient-to-b before:hover:from-transparent before:hover:via-transparent before:hover:to-zinc-50/10 before:via-80% before:-z-[1] before:last:rounded-b-xl lg:before:first:rounded-s-xl lg:before:last:rounded-e-xl lg:before:last:rounded-bl-none before:opacity-0 before:hover:opacity-100">
                <div class="mb-5">
                    <svg class="flex-shrink-0 w-8 h-8" width="33" height="32" viewBox="0 0 48 48" id="a"
                        xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <style>
                                .c {
                                    fill: none;
                                    stroke: #000000;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                }
                            </style>
                        </defs>
                        <path id="b" class="c"
                            d="m4.5,33.75c0-10.7696,8.7304-19.5,19.5-19.5s19.5,8.7304,19.5,19.5H4.5Z" />
                        <path class="c"
                            d="m33.9347,23.3195l-8.2682,2.2983c-.9065-.5602-2.0688-.6598-3.0909-.1465-1.5668.7867-2.1991,2.6946-1.4124,4.2614.7867,1.5667,2.6947,2.1991,4.2613,1.4123,1.0223-.5133,1.6366-1.5049,1.7287-2.5666l6.7815-5.2589Z" />
                    </svg>


                    <div class="mt-5">
                        <p class="font-semibold text-4xl dark:text-white"><?php echo($performance->stats);?></p>
                        <h3 class="mt-5 font-medium text-lg dark:text-white"><?php echo($performance->title);?></h3>
                        <p class="mt-1 dark:text-neutral-400"><?php echo($performance->description);?></p>
                    </div>
                </div>

            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="group relative z-10 p-4 md:p-6 h-full flex flex-col dark:bg-zinc-950 first:rounded-t-xl last:rounded-b-xl lg:first:rounded-l-xl lg:first:rounded-tr-none lg:last:rounded-r-xl lg:last:rounded-bl-none before:absolute before:inset-0 before:bg-gradient-to-b before:hover:from-transparent before:hover:via-transparent before:hover:to-zinc-50/10 before:via-80% before:-z-[1] before:last:rounded-b-xl lg:before:first:rounded-s-xl lg:before:last:rounded-e-xl lg:before:last:rounded-bl-none before:opacity-0 before:hover:opacity-100"
               >
                <div class="mb-5">
                    <svg class="flex-shrink-0 w-8 h-8" width="33" height="32" viewBox="0 0 48 48"
                        xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <style>
                                .a {
                                    fill: none;
                                    stroke: #000000;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                }
                            </style>
                        </defs>
                        <path class="a" d="M17.7283,31.5213h-8.43l-2.106,5.4438" />
                        <path class="a" d="M7.1918,36.965v5.7794H18.3585" />
                        <path class="a" d="M17.0417,31.5177l-.9506,5.4471v5.7794" />
                        <path class="a"
                            d="M20.04,33.2718c1.2349.2119,2.08.6422,2.08,1.1386,0,.4437-.675.8346-1.7,1.0639m-4.1615.0172c-1.0693-.2266-1.7792-.6261-1.7792-1.0811,0-.4986.8526-.9306,2.0965-1.1415" />
                        <path class="a" d="M17.7283,31.5213l9.6087,0,2.1874,5.4438-8.8982,0m-4.5347,0H7.1924" />
                        <path class="a" d="M29.5244,36.965v5.7794H18.3577" />
                        <path class="a" d="M19.6746,31.5177l.716,4.1024.2346,1.3447v5.7794" />
                        <path class="a" d="M10.7635,33.5992h1.6874" />
                        <path class="a" d="M10.04,35.3832h1.6874" />
                        <path class="a" d="M24.975,33.5992H23.2876" />
                        <path class="a" d="M25.6988,35.3832H24.0113" />
                        <path class="a" d="M15.0363,27.5678h-8.43L4.5,33.0116" />
                        <path class="a" d="M4.5,33.0115v5.7793H7.1655" />
                        <path class="a" d="M14.35,27.5651l-.6643,3.8063-.0217.1244" />
                        <path class="a"
                            d="M17.3482,29.3183c1.2349.2119,2.08.6422,2.08,1.1386,0,.4437-.675.8346-1.7,1.0639m-4.3468-.0246c-.9652-.2321-1.5939-.6112-1.5939-1.0394,0-.4986.8526-.9306,2.0965-1.1415" />
                        <path class="a" d="M15.0363,27.5678h9.6911l1.5293,3.9531M8.6015,33.0116H4.5" />
                        <path class="a" d="M16.9836,27.5651l.683,3.9137" />
                        <path class="a" d="M8.0717,29.6466H9.7591" />
                        <path class="a" d="M22.2831,29.6466H20.5957" />
                        <path class="a"
                            d="M39.2907,30.38c0,1.1436-1.8845,2.0707-4.2091,2.0707h0c-2.3246,0-4.2091-.9271-4.2091-2.0707h0c0-1.1437,1.8845-2.0708,4.2091-2.0708h0c2.3246,0,4.2091.9271,4.2091,2.0708Z" />
                        <path class="a"
                            d="M39.2907,33.4585c0,1.1436-1.8845,2.0707-4.2091,2.0707s-4.2091-.9271-4.2091-2.0707" />
                        <path class="a"
                            d="M39.2907,36.5092c0,1.1436-1.8845,2.0707-4.2091,2.0707s-4.2091-.9271-4.2091-2.0707" />
                        <path class="a"
                            d="M39.2907,39.56c0,1.1436-1.8845,2.0707-4.2091,2.0707s-4.2091-.9271-4.2091-2.0707h.0006V30.38" />
                        <path class="a" d="M35.0814,28.3088l0-6.1" />
                        <path class="a" d="M43.5,37.4892c0,1.1436-1.8845,2.0708-4.2091,2.0708" />
                        <path class="a"
                            d="M38.64,20.1376V6.8842a1.6286,1.6286,0,0,0-1.6286-1.6286H10.14A1.6286,1.6286,0,0,0,8.5114,6.8842V27.5134" />
                        <path class="a" d="M14.7126,23.8075l4.87-7.8931,7.7335,4.6426L31.67,12.5205" />
                        <path class="a" d="M43.5,31.3879c0,1.1436-1.8845,2.0707-4.2091,2.0707" />
                        <path class="a" d="M43.5,34.4386c0,1.1436-1.8845,2.0707-4.2091,2.0707" />
                        <path class="a" d="M39.2909,39.56c2.3246,0,4.2091-.9272,4.2091-2.0708V22.2083" />
                        <path class="a"
                            d="M43.5,22.2083c0,1.1436-1.8845,2.0707-4.2091,2.0707h0c-2.3246,0-4.2091-.9271-4.2091-2.0707h0c0-1.1437,1.8845-2.0707,4.2091-2.0707h0c2.3246,0,4.2091.927,4.2091,2.0707Z" />
                        <path class="a"
                            d="M43.5,25.259c0,1.1436-1.8845,2.0707-4.2091,2.0707s-4.2091-.9271-4.2091-2.0707" />
                        <path class="a" d="M43.5,28.31c0,1.1436-1.8845,2.0708-4.2091,2.0708" />
                        <line class="a" x1="39.2907" y1="39.5599" x2="39.2907" y2="30.3804" />
                        <line class="a" x1="28.8532" y1="35.2945" x2="30.8731" y2="35.2945" />
                    </svg>

                    <div class="mt-5">
                        <p class="font-semibold text-4xl dark:text-white"><?php echo($investment->stats);?></p>
                        <h3 class="mt-5 font-medium text-lg dark:text-white"><?php echo($investment->title);?></h3>
                        <p class="mt-1 dark:text-neutral-400"><?php echo($investment->description);?></p>
                    </div>
                </div>

                </d>
                <!-- End Card -->
            </div>
            <!-- End Card Grid -->

        </div>
    </div>