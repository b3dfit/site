<!-- ========== FOOTER ========== -->
<footer class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
  <!-- Grid -->
  <div class="grid items-baseline grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6 mb-10">

    <div class="">
      <a class="flex-none text-xl font-semibold dark:text-white" href="/" aria-label="Brand">Marca</a>
      <p class="mt-3 text-xs sm:text-sm text-gray-600 dark:text-neutral-400">© <?php echo (date('Y')); ?>
        <?php echo (get_bloginfo('name')); ?> - <?php echo (get_bloginfo('description')); ?>.
      </p>
    </div>
    <!-- End Col -->

    <div>
      <h4 class="text-xs font-semibold text-zinc-950 uppercase dark:text-neutral-100">Empresa</h4>
      <?php
      // Encontra a página pelo slug 'legal'
      $legal_page = get_page_by_path('sobre-nos');
      $legal_page_id = $legal_page ? $legal_page->ID : null;

      // Argumentos para obter todas as páginas publicadas
      $pages = get_pages([
        'post_type' => 'page',
        'post_status' => 'publish',
      ]);

      echo '<div class="mt-3 grid space-y-3 text-sm">';
      foreach ($pages as $page) {
        // Pula a iteração se não for a página "legal" e nem filha dela
        if ($page->ID != $legal_page_id && $page->post_parent != $legal_page_id) {
          continue;
        }

        // Cria o link para a página
        $link = get_permalink($page->ID);
        $title = get_the_title($page->ID);

        // Exibe o link da página
        echo '<p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="' . esc_url($link) . '">' . esc_html($title) . '</a></p>';
      }
      echo '</div>';
      ?>
    </div>
    <!-- End Col -->

    <!-- LEGAL -->
    <div>
      <h4 class="text-xs font-semibold text-zinc-950 uppercase dark:text-neutral-100">Legal</h4>
      <?php
      // Encontra a página pelo slug 'legal'
      $legal_page = get_page_by_path('legal');
      $legal_page_id = $legal_page ? $legal_page->ID : null;

      // Argumentos para obter todas as páginas publicadas
      $pages = get_pages([
        'post_type' => 'page',
        'post_status' => 'publish',
      ]);

      echo '<div class="mt-3 grid space-y-3 text-sm">';
      foreach ($pages as $page) {
        // Pula a iteração se não for a página "legal" e nem filha dela
        if ($page->ID != $legal_page_id && $page->post_parent != $legal_page_id) {
          continue;
        }

        // Cria o link para a página
        $link = get_permalink($page->ID);
        $title = get_the_title($page->ID);

        // Exibe o link da página
        echo '<p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="' . esc_url($link) . '">' . esc_html($title) . '</a></p>';
      }
      echo '</div>';
      ?>
    </div>
    <!-- END LEGAL -->

    <div>
      <h4 class="text-xs font-semibold text-zinc-950 uppercase dark:text-neutral-100">Suporte</h4>
      <?php
      // Encontra a página pelo slug 'legal'
      $legal_page = get_page_by_path('suporte-e-ajuda');
      $legal_page_id = $legal_page ? $legal_page->ID : null;

      // Argumentos para obter todas as páginas publicadas
      $pages = get_pages([
        'post_type' => 'page',
        'post_status' => 'publish',
      ]);

      echo '<div class="mt-3 grid space-y-3 text-sm">';
      foreach ($pages as $page) {
        // Pula a iteração se não for a página "legal" e nem filha dela
        if ($page->ID != $legal_page_id && $page->post_parent != $legal_page_id) {
          continue;
        }

        // Cria o link para a página
        $link = get_permalink($page->ID);
        $title = get_the_title($page->ID);

        // Exibe o link da página
        echo '<p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="' . esc_url($link) . '">' . esc_html($title) . '</a></p>';
      }
      echo '</div>';
      ?>
    </div>
    <!-- End Col -->

    <div>
      <h4 class="text-xs font-semibold text-zinc-950 uppercase dark:text-neutral-100">Desenvolvedores</h4>
      <?php
      // Encontra a página pelo slug 'legal'
      $legal_page = get_page_by_path('desenvolvedor');
      $legal_page_id = $legal_page ? $legal_page->ID : null;

      // Argumentos para obter todas as páginas publicadas
      $pages = get_pages([
        'post_type' => 'page',
        'post_status' => 'publish',
      ]);

      echo '<div class="mt-3 grid space-y-3 text-sm">';
      foreach ($pages as $page) {
        // Pula a iteração se não for a página "legal" e nem filha dela
        if ($page->ID != $legal_page_id && $page->post_parent != $legal_page_id) {
          continue;
        }

        // Cria o link para a página
        $link = get_permalink($page->ID);
        $title = get_the_title($page->ID);

        // Exibe o link da página
        echo '<p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="' . esc_url($link) . '">' . esc_html($title) . '</a></p>';
      }
      echo '</div>';
      ?>
    </div>
    <!-- End Col -->
  </div>
  <!-- End Grid -->

  <div class="pt-5 mt-5 border-t border-gray-200 dark:border-neutral-700">
    <div class="sm:flex sm:justify-between sm:items-center">
      <div class="flex items-center gap-x-3">
        <!-- Language Dropdown -->
        <?php /*
<div class="hs-dropdown [--placement:top-left] relative inline-flex">
<button id="footer-language-dropdown" type="button"
class="hs-dropdown-toggle py-2 px-3 inline-flex items-center gap-x-2 text-sm rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
<svg class="size-3 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us1"
viewBox="0 0 512 512">
<g fill-rule="evenodd">
<g stroke-width="1pt">
<path fill="#bd3d44"
d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
transform="scale(3.9385)" />
<path fill="#fff"
d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
transform="scale(3.9385)" />
</g>
<path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)" />
<path fill="#fff"
d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
transform="scale(3.9385)" />
</g>
</svg>
English (US)
<svg class="hs-dropdown-open:rotate-180 flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500"
xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
<path d="m18 15-6-6-6 6" />
</svg>
</button>

<div
class="hs-dropdown-menu w-40 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 bg-white shadow-md rounded-lg p-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700"
aria-labelledby="footer-language-dropdown">
<a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300"
href="#">
<svg class="size-3.5 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us"
viewBox="0 0 512 512">
<g fill-rule="evenodd">
<g stroke-width="1pt">
<path fill="#bd3d44"
d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
transform="scale(3.9385)" />
<path fill="#fff"
d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
transform="scale(3.9385)" />
</g>
<path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)" />
<path fill="#fff"
d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
transform="scale(3.9385)" />
</g>
</svg>
English (US)
</a>
<a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300"
href="#">
<svg class="size-3 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-de"
viewBox="0 0 512 512">
<path fill="#ffce00" d="M0 341.3h512V512H0z" />
<path d="M0 0h512v170.7H0z" />
<path fill="#d00" d="M0 170.7h512v170.6H0z" />
</svg>
Deutsch
</a>
<a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300"
href="#">
<svg class="size-3 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-dk"
viewBox="0 0 512 512">
<path fill="#c8102e" d="M0 0h512.1v512H0z" />
<path fill="#fff" d="M144 0h73.1v512H144z" />
<path fill="#fff" d="M0 219.4h512.1v73.2H0z" />
</svg>
Dansk
</a>
<a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300"
href="#">
<svg class="size-3 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-it"
viewBox="0 0 512 512">
<g fill-rule="evenodd" stroke-width="1pt">
<path fill="#fff" d="M0 0h512v512H0z" />
<path fill="#009246" d="M0 0h170.7v512H0z" />
<path fill="#ce2b37" d="M341.3 0H512v512H341.3z" />
</g>
</svg>
Italiano
</a>
<a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300"
href="#">
<svg class="size-3 rounded-full" xmlns="http://www.w3.org/2000/svg"
xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn" viewBox="0 0 512 512">
<defs>
<path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z" />
</defs>
<path fill="#de2910" d="M0 0h512v512H0z" />
<use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)" xlink:href="#a" />
<use width="30" height="20" transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a" />
<use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a" />
<use width="30" height="20" transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a" />
<use width="30" height="20" transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a" />
</svg>
中文 (繁體)
</a>
</div>
</div>

<!-- End Language Dropdown -->
*/ ?>

        <div class="space-x-4 text-sm ms-4">
          <?php
          // Encontra a página pelo slug 'legal'
          $legal_page = get_page_by_path('legal');
          $legal_page_id = $legal_page ? $legal_page->ID : null;

          // Argumentos para obter todas as páginas publicadas
          $pages = get_pages([
            'post_type' => 'page',
            'post_status' => 'publish',
          ]);


          foreach ($pages as $page) {
            // Pula a iteração se não for a página "legal" e nem filha dela
            if ($page->ID != $legal_page_id && $page->post_parent != $legal_page_id) {
              continue;
            }

            // Cria o link para a página
            $link = get_permalink($page->ID);
            $title = get_the_title($page->ID);

            $link = esc_url($link);
            $title = esc_html($title);
            echo "<a class='inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200'
            href='{$link}'>{$title}</a>";
          }

          ?>

          <button type="button"
            class="hs-dark-mode hs-dark-mode-active:hidden block inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
            data-hs-theme-click-value="dark">
            Tema Dark
          </button>
          <button type="button"
            class="hs-dark-mode hs-dark-mode-active:inline-flex hidden inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
            data-hs-theme-click-value="light">
            Tema Light
          </button>
        </div>
      </div>

      <div class="flex justify-between items-center">
        <div class="mt-3 sm:hidden">
          <a class="flex-none text-xl font-semibold dark:text-white" href="/" aria-label="Brand">Marca</a>
          <p class="mt-1 text-xs sm:text-sm text-gray-600 dark:text-neutral-400">© <?php echo (date('Y')); ?> b³d -
            todos os direitos reservados.</p>
        </div>

        <!-- Social Brands -->
        <div class="space-x-4">
          <a class="inline-block text-gray-500 hover:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200"
            href="<?php echo (getUrlByName('twitter')); ?>" rel="me" target="_blank">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
              fill="currentColor" viewBox="0 0 16 16">
              <path
                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
            </svg>
          </a>
          <a class="inline-block text-gray-500 hover:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200"
            href="<?php echo (getUrlByName('github')); ?>" rel="me" target="_blank">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
              fill="currentColor" viewBox="0 0 16 16">
              <path
                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
            </svg>
          </a>
          <a class="inline-block text-gray-500 hover:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200"
            href="<?php echo (getUrlByName('slack')); ?>" rel="me" target="_blank">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
              fill="currentColor" viewBox="0 0 16 16">
              <path
                d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z" />
            </svg>
          </a>
        </div>
        <!-- End Social Brands -->
      </div>
      <!-- End Col -->
    </div>
  </div>
</footer>
<!-- ========== END FOOTER ========== -->



<!-- ========== COOKIE ========== -->
<div id="cookies-dismiss-button" class="fixed hidden bottom-0 end-0 z-[60] sm:max-w-sm w-full mx-auto p-6">
  <!-- Card -->
  <div class="p-4 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-zinc-900 dark:border-zinc-900">
    <div class="flex gap-x-4">
      <svg class="flex-shrink-0 w-8 h-auto" width="72" height="63" viewBox="0 0 72 63" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
          d="M15.5174 56.1528C16.2903 57.6825 16.929 61.4559 14.8118 60.9459C13.5013 60.5381 11.4445 57.6213 12.493 56.1528C12.661 55.8468 13.2189 55.2757 14.106 55.4389"
          stroke="currentColor" class="dark:stroke-neutral-200" stroke-width="2" stroke-linecap="round" />
        <path
          d="M15.5173 49.6263L14.0262 48.5579C13.5346 48.2056 12.8477 48.3707 12.658 48.945C12.3456 49.8907 12.1258 51.1463 12.462 52.2324C12.5336 52.4636 12.7127 52.6466 12.9449 52.7146C13.8342 52.9751 15.2568 52.9048 15.8197 51.054"
          stroke="currentColor" class="dark:stroke-neutral-200" stroke-width="2" stroke-linecap="round" />
        <mask id="path-3-inside-1_4542_101166" fill="currentColor" class="text-gray-800 dark:fill-neutral-200">
          <ellipse rx="1.09811" ry="0.738034" transform="matrix(0.921654 0.388014 -0.38048 0.924789 14.2069 43.4055)" />
        </mask>
        <path
          d="M13.3756 43.0555C13.6288 42.4402 14.1378 42.259 14.3273 42.2214C14.5316 42.1809 14.6503 42.223 14.687 42.2384L13.1651 45.9376C13.7607 46.1884 14.4484 46.2907 15.1206 46.1574C15.7781 46.0269 16.654 45.5999 17.0622 44.6076L13.3756 43.0555ZM14.687 42.2384C14.7237 42.2539 14.8369 42.3094 14.9524 42.4846C15.0596 42.6471 15.2913 43.1401 15.0381 43.7554L11.3515 42.2034C10.9432 43.1957 11.261 44.1253 11.6329 44.689C12.0131 45.2654 12.5694 45.6868 13.1651 45.9376L14.687 42.2384ZM15.0381 43.7554C14.7849 44.3708 14.2759 44.552 14.0864 44.5895C13.8821 44.6301 13.7634 44.588 13.7267 44.5725L15.2486 40.8734C14.653 40.6226 13.9653 40.5203 13.2931 40.6536C12.6357 40.784 11.7597 41.2111 11.3515 42.2034L15.0381 43.7554ZM13.7267 44.5725C13.69 44.5571 13.5768 44.5015 13.4613 44.3264C13.3541 44.1638 13.1225 43.6709 13.3756 43.0555L17.0622 44.6076C17.4705 43.6153 17.1527 42.6857 16.7809 42.1219C16.4007 41.5455 15.8443 41.1241 15.2486 40.8734L13.7267 44.5725Z"
          fill="black" mask="url(#path-3-inside-1_4542_101166)" />
        <mask id="path-5-inside-2_4542_101166" fill="currentColor" class="text-gray-800 dark:fill-neutral-200">
          <ellipse rx="1.00988" ry="1.0181" transform="matrix(0.921654 0.388014 -0.38048 0.924789 21.3702 57.2201)" />
        </mask>
        <path
          d="M20.4576 56.8359C20.6581 56.3486 21.2257 56.094 21.7438 56.312L20.2219 60.0112C21.768 60.6621 23.5159 59.9153 24.1442 58.388L20.4576 56.8359ZM21.7438 56.312C22.2618 56.5301 22.4832 57.1169 22.2827 57.6043L18.5961 56.0522C17.9677 57.5795 18.6757 59.3603 20.2219 60.0112L21.7438 56.312ZM22.2827 57.6043C22.0822 58.0916 21.5146 58.3462 20.9966 58.1281L22.5185 54.429C20.9724 53.7781 19.2245 54.5249 18.5961 56.0522L22.2827 57.6043ZM20.9966 58.1281C20.4785 57.9101 20.2571 57.3233 20.4576 56.8359L24.1442 58.388C24.7726 56.8607 24.0646 55.0799 22.5185 54.429L20.9966 58.1281Z"
          fill="black" mask="url(#path-5-inside-2_4542_101166)" />
        <mask id="path-7-inside-3_4542_101166" fill="currentColor" class="text-gray-800 dark:fill-neutral-200">
          <ellipse rx="1.00988" ry="1.0181" transform="matrix(0.921654 0.388014 -0.38048 0.924789 6.75397 38.8236)" />
        </mask>
        <path
          d="M5.84142 38.4394C6.04192 37.9521 6.60952 37.6975 7.12756 37.9156L5.60564 41.6147C7.15177 42.2656 8.89966 41.5188 9.52804 39.9915L5.84142 38.4394ZM7.12756 37.9156C7.6456 38.1337 7.86701 38.7205 7.66651 39.2078L3.9799 37.6557C3.35152 39.1831 4.05951 40.9638 5.60564 41.6147L7.12756 37.9156ZM7.66651 39.2078C7.46601 39.6951 6.89842 39.9498 6.38037 39.7317L7.90229 36.0325C6.35616 35.3816 4.60827 36.1284 3.9799 37.6557L7.66651 39.2078ZM6.38037 39.7317C5.86233 39.5136 5.64092 38.9268 5.84142 38.4394L9.52804 39.9915C10.1564 38.4642 9.44843 36.6834 7.90229 36.0325L6.38037 39.7317Z"
          fill="black" mask="url(#path-7-inside-3_4542_101166)" />
        <path d="M31.6479 50.2383C31.5807 51.2241 32.1721 53.053 35.0756 52.4819" stroke="currentColor"
          class="dark:stroke-neutral-200" stroke-width="2" stroke-linecap="round" />
        <path d="M50.9903 34.6769C50.1699 34.1428 48.3973 33.5907 47.8709 35.6552" stroke="currentColor"
          class="dark:stroke-neutral-200" stroke-width="2" stroke-linecap="round" />
        <path d="M40.9087 17.4562C40.0882 16.9221 38.3156 16.37 37.7892 18.4345" stroke="currentColor"
          class="dark:stroke-neutral-200" stroke-width="2" stroke-linecap="round" />
        <path d="M27.8502 29.3345C27.1279 29.998 26.1419 31.587 27.977 32.6357" stroke="currentColor"
          class="dark:stroke-neutral-200" stroke-width="2" stroke-linecap="round" />
        <path d="M62.1917 19.585C62.4894 18.6451 62.5577 16.7703 60.4502 16.7902" stroke="currentColor"
          class="dark:stroke-neutral-200" stroke-width="2" stroke-linecap="round" />
        <ellipse cx="51.2061" cy="22.3973" rx="3.02446" ry="3.05945" fill="currentColor"
          class="text-gray-800 dark:fill-neutral-200" />
        <path
          d="M67.7398 29.6361C68.8249 31.2826 67.6381 32.6215 66.8281 33.1457C66.7645 33.1869 66.695 33.2184 66.6214 33.2363C65.0504 33.618 63.6063 31.5388 63.6063 30.0441C63.6064 28.8034 66.3283 27.4945 67.7398 29.6361Z"
          fill="currentColor" class="text-gray-800 dark:fill-neutral-200" />
        <path
          d="M58.868 38.6126C57.9809 36.4914 54.6002 37.7288 53.0207 38.6126C51.7101 39.2284 52.0126 41.4681 53.6256 43.3038C54.9161 44.7723 56.5157 44.1196 57.1542 43.6097C58.0951 42.8279 59.7552 40.7339 58.868 38.6126Z"
          fill="currentColor" class="text-gray-800 dark:fill-neutral-200" />
        <path
          d="M5.85665 41.8048C5.21042 40.2694 2.74791 41.1651 1.59743 41.8048C0.642774 42.2505 0.863078 43.8717 2.03804 45.2004C2.978 46.2634 4.14317 45.7909 4.60826 45.4219C5.29365 44.8559 6.50288 43.3402 5.85665 41.8048Z"
          stroke="currentColor" class="dark:stroke-neutral-200" stroke-width="2" stroke-linecap="round" />
        <path
          d="M45.4596 49.2172C40.9431 47.667 40.2844 51.6987 40.5196 53.9083C40.8221 55.3361 42.4351 55.54 43.4433 55.2341C45.5677 54.5894 51.1052 51.1548 45.4596 49.2172Z"
          fill="currentColor" class="text-gray-800 dark:fill-neutral-200" />
        <ellipse rx="2.96295" ry="3.45694" transform="matrix(0.855131 0.518411 -0.509711 0.860345 30.4996 41.3871)"
          fill="currentColor" class="text-gray-800 dark:fill-neutral-200" />
        <path
          d="M38.5032 29.1282C39.471 27.8228 37.8983 26.0687 36.991 25.3549C36.0836 24.6411 34.8335 24.8654 33.8657 26.1707C32.7567 27.6664 37.2934 30.7599 38.5032 29.1282Z"
          fill="currentColor" class="text-gray-800 dark:fill-neutral-200" />
        <path
          d="M19.2476 18.9295C16.4247 18.2768 15.7862 19.8813 15.8198 20.7652C16.0215 23.8246 20.5582 24.4365 21.6672 23.6207C22.4364 23.0548 22.7761 19.7453 19.2476 18.9295Z"
          fill="currentColor" class="text-gray-800 dark:fill-neutral-200" />
        <path
          d="M36.6888 6.79381C35.6403 4.67259 33.2947 5.02613 32.2529 5.46805C28.7042 6.61025 29.3292 8.52749 30.1358 9.13938C31.3456 10.1252 34.2289 12.0153 36.0839 11.6889C38.4027 11.281 37.9994 9.44533 36.6888 6.79381Z"
          fill="currentColor" class="text-gray-800 dark:fill-neutral-200" />
        <path
          d="M56.9526 54.9284C57.7592 53.5006 60.2795 51.0735 65.1187 49.9313C66.0596 49.7953 67.9818 48.5647 68.1431 44.7302C68.3448 39.9371 73.5872 32.9003 69.3529 28.1072C67.5382 26.053 68.4456 23.2121 67.5382 17.7051"
          stroke="currentColor" class="dark:stroke-neutral-200" stroke-width="2" stroke-linecap="round" />
        <path
          d="M66.7316 16.176C65.1521 14.2383 60.6625 9.8939 55.3394 8.01743C48.703 5.67797 55.8063 4.55591 44.1399 4.75246C44.0816 4.75344 44.0194 4.76029 43.9617 4.76836C43.019 4.90008 40.5102 4.51266 37.2614 1.95295C37.2161 1.91728 37.1681 1.88406 37.1153 1.86091C36.6 1.63502 35.1744 1.43154 32.9584 2.2045C30.6195 3.02036 24.0531 5.46791 21.0622 6.58971C20.4237 6.92965 19.0056 8.05825 18.441 9.85312C17.7353 12.0967 5.93991 23.5187 9.56927 28.9237"
          stroke="currentColor" class="dark:stroke-neutral-200" stroke-width="2" stroke-linecap="round" />
        <path
          d="M10.4768 30.1484C11.9084 30.3333 14.621 31.3895 15.0562 34.1372C15.1369 34.6464 15.5068 35.0847 16.0079 35.2063C18.8253 35.8904 22.6446 38.4014 20.8122 44.4603C20.7218 44.7592 20.7652 45.0847 20.9158 45.3583C21.7327 46.8422 22.367 49.4462 20.6725 51.7386C20.1262 52.4776 20.4167 53.842 21.2912 54.1243C23.3727 54.7962 25.8398 55.985 27.2662 57.833C27.5533 58.2049 28.0338 58.3932 28.4956 58.3062C30.4142 57.9446 33.9492 57.9776 37.2937 60.233C42.1328 63.4964 42.3345 60.0291 48.6858 60.7429C53.7669 61.314 55.7765 58.3294 56.1462 56.7656"
          stroke="currentColor" class="dark:stroke-neutral-200" stroke-width="2" stroke-linecap="round" />
      </svg>

      <p class="text-sm text-gray-800 dark:text-neutral-200">
        Ao navegar neste site, você aceita nossas <a
          class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-500"
          href="<?php echo (getUrlByName('politicacookies')); ?>" rel="nofollow" target="_blank">Políticas de
          Cookies</a>
      </p>

      <div>
        <button type="button"
          class="p-2 inline-flex items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700"
          data-hs-remove-element="#cookies-dismiss-button">
          <span class="sr-only">De Acordo</span>
          <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>
  <!-- End Card -->
</div>
<!-- ========== END COOKIE ========== -->





<!-- ========== MODAL SUCCESS ========== -->

<div id="modal-msg-success"
  class="hs-overlay hidden size-full fixed top-40 start-0 z-[80] overflow-x-hidden overflow-y-auto">
  <div
    class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
    <div class="relative flex flex-col bg-white shadow-lg rounded-xl dark:bg-neutral-900">
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
        <h3 class="mb-2 text-2xl font-light text-gray-800 dark:text-neutral-200">
          Yeahhhh 🎉
        </h3>
        <p class="text-zinc-950 dark:text-zinc-950" id="modal-msg-text">

        </p>

        <div class="mt-6 flex justify-center gap-x-4">
          <button type="button"
            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-zinc-950 text-white hover:bg-zinc-800 disabled:opacity-50 disabled:pointer-events-none"
            data-hs-overlay="#modal-msg-success">
            Fechar
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ========== END MODAL SUCCESS ========== -->

<?php wp_footer(); ?>

<script>
  window.fbAsyncInit = function () {
    FB.init({
      appId: '{your-app-id}', // 61562854045242 - https://web.facebook.com/profile.php?id=61562854045242
      cookie: true,
      xfbml: true,
      version: '{api-version}'
    });

    FB.AppEvents.logPageView();

  };

  (function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) { return; }
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/pt_BR/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
</body>

</html>