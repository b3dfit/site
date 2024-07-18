<?php
global $tenis;
$items = explode("\n", $tenis->getCharacteristics());
$numbersInEnglish = [
    "1" => 'one',
    "2" => 'two',
    "3" => 'three',
    "4" => 'four',
    "5" => 'five',
    "6" => 'six',
    "7" => 'seven',
    "8" => 'eight',
    "9" => 'nine',
    "10" => 'ten',
    "11" => 'eleven',
    "12" => 'twelve',
    "13" => 'thirteen',
    "14" => 'fourteen',
    "15" => 'fifteen',
    "16" => 'sixteen',
    "17" => 'seventeen',
    "18" => 'eighteen',
    "19" => 'nineteen',
    "20" => 'twenty'
];
?>

<!-- benefits -->
<div class="w-full px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
        <h2 class="text-xl font-bold md:text-2xl md:leading-tight dark:text-white">Características do <?php echo($tenis->getTitle())?></h2>
    </div>
    <!-- End Title -->
    <div class="w-full mx-auto">
        <!-- Accordion -->
        <div class="hs-accordion-group">
            <?php
            foreach ($items as $key => $text) :
                $textPart = explode(":", $text);
                $title = $textPart[0];
                $description = $textPart[1];
                $key = $key + 1;
                $isActive = $key == 1 ? 'active' : '';
                $isHidden = $key != 1 ? 'hidden' : '';
                ?>
                <div class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-white/10 <?php echo ($isActive); ?>"
                    id="hs-basic-with-title-and-arrow-stretched-heading-<?php echo ($numbersInEnglish[$key]); ?>">
                    <button
                        class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400"
                        aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-<?php echo ($numbersInEnglish[$key]); ?>">
                        <?php echo ($title); ?>
                        <svg class="hs-accordion-active:hidden block flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                        <svg class="hs-accordion-active:block hidden flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6" />
                        </svg>
                    </button>
                    <div id="hs-basic-with-title-and-arrow-stretched-collapse-<?php echo ($numbersInEnglish[$key]); ?>"
                        class="hs-accordion-content <?php echo ($isHidden); ?> w-full overflow-hidden transition-[height] duration-300"
                        aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-<?php echo ($numbersInEnglish[$key]); ?>">
                        <p class="text-gray-800 dark:text-neutral-200">
                            <?php echo ($description); ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
        <!-- End Accordion -->
    </div>
</div>
<!-- End benefits -->