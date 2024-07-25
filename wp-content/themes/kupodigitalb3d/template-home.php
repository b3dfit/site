<?php
/*
Template Name: Home
*/
get_header();
?>



<!-- ========== MAIN CONTENT ========== -->
<main id="content">

  <!-- Hero -->
  <?php get_template_part('parts/hero'); ?>
  <!-- End Hero -->

  <!-- Clients -->
  <?php get_template_part('parts/stores'); ?>
  <!-- End Clients -->

  <!-- Last Articles -->
  <?php get_template_part('parts/last-articles'); ?>
  <!-- End Last Articles -->

  <!-- Last Tenis -->
  <?php get_template_part('parts/last-tenis'); ?>
  <!-- End Last Tenis -->

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

  <!-- Sticky Share -->
  <?php get_template_part('parts/share'); ?>
  <!-- End Sticky Share -->
</main>
<!-- ========== END MAIN CONTENT ========== -->

<script async type="application/javascript" src="https://news.google.com/swg/js/v1/swg-basic.js"></script>
<script>
  (self.SWG_BASIC = self.SWG_BASIC || []).push(basicSubscriptions => {
    basicSubscriptions.init({
      type: "NewsArticle",
      isPartOfType: ["Product"],
      isPartOfProductId: "CAows8DYCw:openaccess",
      clientOptions: { theme: "light", lang: "pt-BR" },
    });
  });
</script>
<?php get_footer(); ?>