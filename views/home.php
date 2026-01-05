<?php
    /* Template Name: Home */
    get_header();
?>

<?php load_component('header'); ?>

<main class="view view__homepage">
  <?php
      load_component('template-parts/home/hero-banner');
      load_component('template-parts/home/portfolio');
      load_component('template-parts/home/stats');
      load_component('template-parts/home/blog');
      load_component('template-parts/home/cta-image');
  ?>
</main>

<?php load_component('footer')?>