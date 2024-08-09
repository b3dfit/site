<?php
$breadcrumbs = get_custom_breadcrumb();
?>

<nav class=" max-w-5xl mx-auto mt-10 rounded-[10px] px-3 py-3 md:flex md:items-center md:justify-between md:py-0 lg:mx-auto"
    aria-label="Breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
    <ol class="flex items-center whitespace-nowrap">
        <?php foreach ($breadcrumbs as $index => $breadcrumb) : ?>
            <li class="inline-flex justify-start items-center" itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
                <?php if ($index !== count($breadcrumbs) - 1) : ?>
                    <a class="flex items-center text-sm text-gray-500 hover:text-zinc-600 focus:outline-none focus:text-zinc-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500 text-wrap"
                        href="<?php echo esc_url($breadcrumb['url']); ?>" itemprop="item">
                        <span itemprop="name"><?php echo esc_html($breadcrumb['label']); ?></span>
                    </a>
                    <meta itemprop="position" content="<?php echo $index + 1; ?>" />
                    <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                <?php else : ?>
                    <span class="flex text-sm font-semibold text-gray-800  dark:text-neutral-200  overflow-hidden truncate"
                        aria-current="page">
                        <?php $label = mb_convert_case(esc_html($breadcrumb['label']), MB_CASE_TITLE_SIMPLE); ?>
                        <?php echo mb_substr($breadcrumb['label'], 0 , 20); ?>...
                        <meta itemprop="name" content="<?php echo $label; ?>">
                    </span>
                    <meta itemprop="position" content="<?php echo $index + 1; ?>" />
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ol>
    <meta itemprop="name" content="Navegação">
</nav>