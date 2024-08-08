<!-- ========== FOOTER ========== -->
<footer class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
  <!-- Grid -->
  <div class="grid items-baseline grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6 mb-10">

    <div class="">
      <a class="flex-none text-xl font-semibold dark:text-white" href="/"
        aria-label="Brand"><?php echo (get_bloginfo('name')); ?></a>
      <p class="mt-3 text-xs sm:text-sm text-gray-600 dark:text-neutral-400">© <?php echo (date('Y')); ?>
        <?php echo (get_bloginfo('description')); ?>
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
          <a class="flex-none text-xl font-semibold dark:text-white" href="/" aria-label="Brand">B³D</a>
          <p class="mt-1 text-xs sm:text-sm text-gray-600 dark:text-neutral-400">© <?php echo (date('Y')); ?>todos os
            direitos reservados.</p>
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


<!-- Modal Cookie -->
<?php get_template_part('parts/modal-cookie'); ?>
<!-- End Modal Cookie -->


<!-- Modal Success -->
<?php get_template_part('parts/modal-success'); ?>
<!-- End Modal Success -->


<!-- Modal Coupon -->
<?php get_template_part('parts/modal-coupon'); ?>
<!-- End Modal Coupon -->

<!-- Scripts Stats -->
<?php get_template_part('parts/script-stats'); ?>
<!-- End Scripts Stats -->

<?php wp_footer(); ?>

</body>

</html>