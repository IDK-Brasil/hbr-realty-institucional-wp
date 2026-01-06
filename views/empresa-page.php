<?php
/* Template Name: A Empresa */
get_header();
?>

<?php load_component('header'); ?>

<main class="view">
  <?php
  $id   = get_the_ID();
  $data = get_field('primeira_secao_empresa', $id);
  $bannerDataRow = get_field('banner_section_empresa', $id);
  $bannerData = [];

  if (is_array($bannerDataRow)) {
    $bannerData = [
      'bg_img'   => is_array($bannerDataRow['imagem_banner_section'] ?? null)
        ? ($bannerDataRow['imagem_banner_section']['url'] ?? '')
        : ($bannerDataRow['imagem_banner_section'] ?? ''),
      'title'    => $bannerDataRow['title_banner_section'] ?? null,
      'subtitle' => $bannerDataRow['subtitle_banner_section'] ?? null,
      'logo'     => null,
      'variant'  => 'empresa',
      'scrollTo' => '#sobre',
    ];
  }

  load_component('global/page-simple-banner', null, $bannerData);

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