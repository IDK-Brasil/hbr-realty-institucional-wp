<?php
/* Template Name: Plataformas - Opportunities */
get_header();
?>

<?php load_component('header'); ?>

<main class="view">
  <?php
  $id   = get_the_ID();

  $bannerDataRow = get_field('banner_section_opportunities', $id);
  $bannerData = [];

  if (is_array($bannerDataRow)) {
    $bannerData = [
      'bg_img'   => is_array($bannerDataRow['imagem_banner_section'] ?? null)
        ? ($bannerDataRow['imagem_banner_section']['url'] ?? '')
        : ($bannerDataRow['imagem_banner_section'] ?? ''),
      'title'    => $bannerDataRow['title_banner_section'] ?? null,
      'subtitle' => null,
      'logo'     => null,
      'variant'  => 'opportunities',
      'scrollTo' => '#sobre',
    ];
  }

  load_component('global/page-simple-banner', null, $bannerData);


  $dataFirstSection = get_field('texto_da_primeira_secao_opportunities', $id);

  load_component(
    'global/text-colorful-forms',
    'text-colorful-forms-idk-1225',
    [
      'text'    => $dataFirstSection ?? null,
      'color'    => '#FFDF80',
      'idSection' => 'sobre',
    ]
  );

  load_component('template-parts/opportunities/services-section');
  ?>
</main>

<?php load_component('footer') ?>