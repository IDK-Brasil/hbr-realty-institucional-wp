<?php
/* Template Name: A Empresa */
get_header();
?>

<?php load_component('header'); ?>

<main class="view">
  <?php
  $id   = get_the_ID();
  $data = get_field('primeira_secao_empresa', $id);

  load_component('template-parts/empresa-page/hero-banner');
  load_component(
    'global/text-circle-section',
    'about-section--highlight',
    [
      'title'    => $data['titulo'] ?? null,
      'subtitle' => $data['subtitulo'] ?? null,
      'idSection' => 'sobre',
    ]
  );
  load_component('template-parts/empresa-page/numbers-section');
  load_component('template-parts/empresa-page/values-section');
  load_component('template-parts/empresa-page/services-section');
  ?>
</main>

<?php load_component('footer') ?>