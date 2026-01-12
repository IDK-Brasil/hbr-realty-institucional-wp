<?php

/** Template name: Single **/
?>

<?php load_component('header'); ?>

<main class="view view__single">
  <?php load_component('template-parts/blog/single/hero'); ?>
  <?php load_component('template-parts/blog/single/content'); ?>
  <?php load_component('template-parts/blog/single/share'); ?>
  <?php load_component('template-parts/blog/single/related'); ?>
  <?php load_component('template-parts/blog/contact'); ?>
</main>

<?php load_component('footer'); ?>