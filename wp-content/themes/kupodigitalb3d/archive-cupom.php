<?php get_header(); ?>
<?php
$coupons = (new \Review\Repository\Coupon)->getNoExpired();
?>

<main id="content">
    <!-- Table Section -->
    <div class="max-w-5xl px-4 py-10 sm:px-6 lg:px-0 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div
                        class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-900 dark:border-neutral-700">
                        <!-- Header -->
                        <div class="px-6 py-4 border-b border-gray-200 dark:border-neutral-700">

                            <h1 class="text-2xl font-bold">Aproveite Ofertas Exclusivas com Nossos Cupons de Desconto!
                            </h1>

                            <p class="text-sm text-gray-600 dark:text-neutral-400">
                                Atualizamos regularmente nossos cupons para garantir que você tenha acesso às ofertas
                                mais
                                recentes e vantajosas.
                            </p>
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead class="bg-gray-50 dark:bg-neutral-800">
                                <tr>


                                    <th scope="col" class="px-6 py-3 text-start whitespace-nowrap min-w-64">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                            Loja
                                        </span>
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start whitespace-nowrap">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                            Validade
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start whitespace-nowrap">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                            Cupom
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start whitespace-nowrap">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">

                                        </span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                <?php
                                foreach ($coupons as $coupon) :
                                    $stringOff = $coupon->getPercentage() ? "{$coupon->getPercentage()}" : "PRO";
                                    $html = <<<HTML
                                    <tr>
                                        <td class="size-px whitespace-nowrap px-6 py-3">
                                            <div class="flex items-center gap-x-3">
                                                <span class="font-semibold text-sm text-gray-800 dark:text-white min-w-20">
                                                    <a href="{$coupon->getStore()->getLink()}" target="_blank">
                                                        {$coupon->getStore()->getTitle()}
                                                    </a>
                                                </span>

                                                <span class="text-xs text-gray-500 dark:text-neutral-500 text-ellipsis overflow-hidden max-w-48" title="{$coupon->getTitle()}">
                                                    {$coupon->getTitle()}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="size-px whitespace-nowrap px-6 py-3">
                                            <span class="text-sm text-gray-800 dark:text-white">{$coupon->getEndDate('d/m/Y')}</span>
                                        </td>
                                        <td class="size-px whitespace-nowrap px-6 py-3">
                                            <span class="text-sm text-gray-800 dark:text-white select-none">
                                                {$stringOff}{$coupon->getCodeSecret()}
                                            </span>
                                        </td>
                                        <td class="size-px whitespace-nowrap px-6 py-3">
                                            <div class="inline-block">
                                                <div id="hs-cryptocurrency-market-cap-1">
                                                    <a class="group inline-flex items-center gap-x-2 py-2 px-3 bg-lime-400 font-medium text-sm text-black rounded-md focus:outline-none" href="{$coupon->getLink()}" target="_blank">
                                                        Ver Cupom
                                                        <svg class="shrink-0 size-4 text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="8" height="4" x="8" y="2" rx="1" ry="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                HTML;
                                    echo $html;
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                        <!-- End Table -->


                    </div>


                </div>
                <!-- Title -->
                <div class="w-full px-4 block mx-auto">

                    <p class="mt-1 mb-3 font-light text-xs text-zinc-600">Navegue pela nossa seleção de cupons de
                        desconto das melhores lojas
                        parceiras e
                        economize em suas compras!<br>Encontre cupons válidos e aproveite grandes descontos em
                        produtos de alta qualidade. <br>Não perca a chance de economizar – confira nossos cupons
                        agora e
                        maximize suas economias!</p>
                </div>
                <!-- End Title -->

            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->



</main>
<?php get_footer(); ?>