<?php get_header(); ?>



<!-- ========== MAIN CONTENT ========== -->
<main id="content">
  <!-- Hero -->
  <div class="dark:bg-zinc-950">
    <div class="max-w-5xl mx-auto px-4 xl:px-0 pt-24 lg:pt-24 pb-24">
      <h1 class="font-semibold dark:text-white text-5xl md:text-6xl">
        <span class="text-white bg-zinc-950 dark:text-zinc-950 dark:bg-white rounded-lg ">&nbsp;Building<span
            class="text-lime-400 dark:text-lime-500 ">³</span> Discipline </span>: o primeiro passo rumo ao seu novo eu!
      </h1>
      <div class="max-w-4xl">
        <p class="mt-5 dark:text-neutral-400 text-lg">
          A plataforma definitiva para entusiastas de corrida e atividades físicas. Com o B3D, você terá acesso a
          recomendações especializadas de tênis de performance, projetadas para melhorar seu desempenho e conforto
          durante cada passo.
        </p>
      </div>
    </div>
  </div>
  <!-- End Hero -->

  <!-- Clients -->
  <?php get_template_part('parts/stores'); ?>
  <!-- End Clients -->

  <!-- Last Articles -->
  <?php get_template_part('parts/last-articles'); ?>
  <!-- End Last Articles -->

  <!-- Case Stories -->
  <?php get_template_part('parts/stats'); ?>
  <!-- End Case Stories -->

  <!-- Testimonials -->
  <?php get_template_part('parts/testimonials'); ?>
  <!-- End Testimonials -->

  <!-- Stats -->
  <?php get_template_part('parts/stats-platform'); ?>
  <!-- End Stats -->

  <!-- Approach -->
  <?php get_template_part('parts/approach'); ?>
  <!-- End Approach -->

  <!-- Contact -->
  <?php //get_template_part('parts/contact'); ?>
  <!-- End Contact -->
</main>
<!-- ========== END MAIN CONTENT ========== -->
<?php get_footer(); ?>