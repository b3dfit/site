<?php get_header(); ?>

<?php
global $post;
$food = (new \Review\Repository\Food())->getById($post->ID);
$numbersInEnglish = ["1" => 'one', "2" => 'two', "3" => 'three', "4" => 'four', "5" => 'five', "6" => 'six', "7" => 'seven', "8" => 'eight', "9" => 'nine', "10" => 'ten', "11" => 'eleven', "12" => 'twelve', "13" => 'thirteen', "14" => 'fourteen', "15" => 'fifteen', "16" => 'sixteen', "17" => 'seventeen', "18" => 'eighteen', "19" => 'nineteen', "20" => 'twenty'];
$grouped_compositions = [];
$compositionArray = array_values(array_filter($food->getComposition(), fn ($obj) => $obj->getId() !== "alimento_id")); // remove form index alimento_id
foreach ($compositionArray as $composition) {
    $grouped_compositions[$composition->getGroup()][] = $composition;
}
ksort($grouped_compositions);


$title = strtr(get_the_title(), ['.' => ' ']);


function simplifyTitle($title)
{
    return strtr($title, [
        'sem' => '',
        'com' => '',
        'pronto' => '',
        'para' => '',
        'mistura'=>'',
        'enriquecida'=>'',
        'fresca'=>'',
        'drenado'=>'',
        'barra'=>'',
        'cozimento'=>'',
        // ''=>'',
        // ''=>'',
    ]);
}
function getRandomImageURLFromPixabay($title)
{
    $title = simplifyTitle($title);

    // URL da API do Pixabay
    $apiUrl = "https://pixabay.com/api/?category=food&image_type=photo&lang=pt&key=35249326-7bd30e46e604979e7ceb78001&q={$title}&image_type=photo";

    // Obtendo os dados da API
    $response = file_get_contents($apiUrl);

    // Decodificando os dados JSON
    $data = json_decode($response, true);

    // Verificando se 'hits' existe e é um array
    if (! isset($data['hits']) || ! is_array($data['hits'])) {
        return null;
    }

    // Selecionando um item aleatório do array 'hits'
    $randomItem = $data['hits'][0];//[array_rand($data['hits'])];

    // Verificando se 'largeImageURL' existe no item selecionado
    if (! isset($randomItem['largeImageURL'])) {
        return null;
    }

    // Criando a URL concatenada
    $largeImageURL = $randomItem['largeImageURL'];
    $concatenatedURL = "https://static.b3d.com.br/?key=YjNkLmNvbS5icg==&w=1280&h=770&u={$largeImageURL}";

    return $concatenatedURL;
}
?>

<main id="content">

    <article class="max-w-5xl grid grid-cols-1 px-4 xl:px-0 pt-10 mx-auto" id="single-food" itemscope
        itemtype="http://schema.org/NutritionInformation">


        <div class="container mx-auto p-4" itemscope itemtype="https://schema.org/Food">
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-1/2 p-2">
                    <div class="p-4">
                        <img class="rounded-md shadow-md" src="<?php echo getRandomImageURLFromPixabay($title); ?>" alt="<?php echo ($title); ?>"  itemprop="image">
                    </div>
                </div>
                <div class="w-full md:w-1/2 p-2">
                    <div class=" p-4">
                        <h1 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white" itemprop="name">
                            Tabela nutricional do Alimento <?php echo $title; ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>



        <!-- Title -->
        <div class="lg:w-3/5 w-full mx-auto text-center mb-10 lg:mb-14">
            <p class="mt-1 text-gray-600 dark:text-neutral-400">Em 100g de <?php echo $title; ?> contém os seguintes
                nutrientes.</p>
            <p class="mt-1 text-gray-600 dark:text-neutral-400">Quantas calorias tem em 100g de <?php echo $title; ?>?
            </p>
        </div>
        <!-- End Title -->

        <div class="lg:w-3/5 w-full mx-auto">

            <!-- Accordion -->
            <div class="hs-accordion-group">

                <?php
                $group_titles = [
                    'INFO' => 'Informações Gerais',
                    'MACRONUTRIENTES' => 'Macronutrientes',
                    'MICRONUTRIENTES_MINERAIS' => 'Micronutrientes Minerais',
                    'MICRONUTRIENTES_VITAMINAS' => 'Micronutrientes Vitaminas',
                    'COMPONENTES_ADICIONAIS' => 'Componentes Adicionais',
                ];
                $indexGroup = 1;
                foreach ($grouped_compositions as $group => $compositions) :
                    $isActive = $group == 'COMPONENTES_ADICIONAIS' ? 'active' : '';
                    $isHidden = $group == 'COMPONENTES_ADICIONAIS' ? '' : 'hidden';
                    ;

                    if (isset($group_titles[$group])) {
                        $indexText = $numbersInEnglish[$indexGroup];
                        $indexName = $group_titles[$group];
                        $html = <<<HTML
                            <div class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-white/10 {$isActive}" id="hs-basic-with-title-and-arrow-stretched-heading-{$indexText}">
                                <button
                                    class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-2xl font-semibold text-start text-zinc-950 rounded-lg transition hover:text-zinc-700 focus:outline-none focus:text-zinc-700 dark:text-white dark:hover:text-white dark:focus:text-white"
                                    aria-expanded="true"
                                    aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-{$indexText}">
                                    <!-- Title --> {$indexName} <!-- End Title -->
                                    <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-white"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-white"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>
                                </button>
                                <div id="hs-basic-with-title-and-arrow-stretched-collapse-{$indexText}"
                                class="hs-accordion-content {$isHidden} w-full overflow-hidden transition-[height] duration-300"
                                role="region"
                                aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-{$indexText}">
                            HTML;
                        echo $html;
                    }
                    foreach ($compositions as $composition) :
                        $value = $composition->getValue() ? number_format($composition->getValue(), 2, ',', '.') : ' - ';
                        $type = (Review\Utils\SchemaNutrition::getById(
                            strtr($composition->getId(), ['alimento_' => ''])
                        ));
                        $htmlContent = <<<HTML
                        <p class="text-zinc-950 dark:text-white">
                            <strong class="w-44 inline-block">{$composition->getName()}</strong> {$value} {$composition->getPlaceholder()}
                        </p>
                        <meta itemprop="{$type->getName()}" content="{$composition->getValue()}"/>
                        HTML;
                        echo $htmlContent;
                        $indexGroup++;
                    endforeach;
                    echo ('</div></div>');
                endforeach;
                ?>
            </div>
            <!-- End Accordion -->
        </div>

        <div class="lg:w-3/5 w-full mx-auto text-left mb-10 lg:mb-14">
            <h5>Abreviações</h5>
            <ol class="text-xs">
                <li><strong>g</strong>: grama</li>
                <li><strong>mg</strong>: miligrama</li>
                <li><strong>mcg</strong>: micrograma</li>
                <li><strong>kcal</strong>: kilocaloria</li>
                <li><strong>kJ</strong>: kilojoule</li>
                <li><strong>NA</strong>: não aplicável</li>
                <li><strong>Tr</strong>: traço</li>
            </ol>

            <h5>Traço (Tr) Adotado nas seguintes situações</h5>
            <ol class="text-xs">
                <li>Valores arredondados entre 0 e 0,5</li>
                <li>Valores arredondados para números com uma casa decimal entre 0 e 0,05</li>
                <li>Valores arredondados para números com duas casas decimais entre 0 e 0,005</li>
                <li>Valores abaixo dos limites de quantificação</li>
            </ol>

            <h5>Limites de Quantificação</h5>
            <ol class="text-xs">
                <li>Composição centesimal: 0,1 g/100 g</li>
                <li>Colesterol: 1 mg/100 g</li>
                <li>Cobre, Ferro, Manganês e Zinco: 0,001 mg/100 g</li>
                <li>Cálcio, Sódio: 0,04 mg/100 g</li>
                <li>Potássio e Fósforo: 0,001 mg/100 g</li>
                <li>Magnésio: 0,015 mg/100 g</li>
                <li>Tiamina, Riboflavina e Piridoxina: 0,03 mg/100 g</li>
                <li>Niacina e Vitamina C: 1 mg/100 g</li>
                <li>Retinol em produtos cárneos e outros: 3 μg/100 g</li>
                <li>Retinol em lácteos: 20 μg/100 g</li>
            </ol>
        </div>



    </article>
</main>
<?php get_footer(); ?>