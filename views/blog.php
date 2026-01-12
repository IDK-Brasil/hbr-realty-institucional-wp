<?php
    /* Template Name: Blog */
    get_header();
?>

<?php load_component('header'); ?>

<main class="view view__blog">
    <?php load_component('template-parts/blog/banner'); ?>
    <?php load_component('template-parts/blog/search'); ?>
    <?php load_component('template-parts/blog/posts'); ?>
    <?php load_component('template-parts/blog/contact'); ?>
</main>

<?php load_component('footer')?>