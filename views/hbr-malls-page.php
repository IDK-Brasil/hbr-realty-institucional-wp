<?php
/* Template Name: Plataformas - HBR MALLS */
get_header();
?>

<?php load_component('header'); ?>

<main class="view">
  <?php
  $id   = get_the_ID();

  $bannerDataRow = get_field('banner_section_hbr_malls', $id);
  $bannerData = [];

  if (is_array($bannerDataRow)) {
    $bannerData = [
      'bg_img' => $bannerDataRow['imagens_banner_section'] ?? null,
      'title'    => $bannerDataRow['title_banner_section'] ?? null,
      'subtitle' => null,
      'logo'     => null,
      'variant'  => 'hbr_malls',
      'scrollTo' => '#sobre',
    ];
  }

  load_component('global/page-simple-banner', null, $bannerData);


  $dataFirstSection = get_field('texto_da_primeira_secao_hbr_malls', $id);

  load_component(
    'global/text-colorful-forms',
    'text-colorful-forms-idk-1225',
    [
      'text'    => $dataFirstSection ?? null,
      'color'    => '#E59177',
      'variant'  => 'hbr_malls',
      'idSection' => 'sobre',
    ]
  );

  load_component('template-parts/hbr_malls/numbers-section');

  load_component('template-parts/hbr_malls/malls-section');

  load_component('template-parts/hbr_malls/comercialization-section');
  ?>
</main>

<?php load_component('footer') ?>