<?php
/* Template Name: Plataformas - Triple A */
get_header();
?>

<?php load_component('header'); ?>

<main class="view">
  <?php
  $id   = get_the_ID();
  $dataImageSection = get_field('secao_sobre_triple_a', $id);
  $dataCta = get_field('secao_cta_triple_a', $id);

  $bannerDataRow = get_field('banner_section_triple_a', $id);
  $bannerData = [];

  if (is_array($bannerDataRow)) {
    $bannerData = [
      'bg_img'   => is_array($bannerDataRow['imagem_banner_section'] ?? null)
        ? ($bannerDataRow['imagem_banner_section']['url'] ?? '')
        : ($bannerDataRow['imagem_banner_section'] ?? ''),
      'title'    => $bannerDataRow['title_banner_section'] ?? null,
      'variant'  => 'triple_a',
      'scrollTo' => '#sobre',
    ];
  }

  load_component('global/page-simple-banner', null, $bannerData);


  load_component(
    'global/image-text-section-form',
    'triple-a-section--highlight',
    [
      'title'    => $dataImageSection['titulo'] ?? null,
      'description' => $dataImageSection['descricao'] ?? null,
      'image'    => $dataImageSection['imagem'] ?? null,
      'formColor' => '#FFDF80',
      'idSection' => 'sobre',
    ]
  );

  load_component('template-parts/triple-a-page/key-features');

  load_component('template-parts/triple-a-page/units-section');
  ?>
</main>

<?php load_component('footer') ?>