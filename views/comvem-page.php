<?php
/* Template Name: Plataformas - ComVem */
get_header();
?>

<?php load_component('header'); ?>

<main class="view">
  <?php
  $id   = get_the_ID();
  $dataImageSection = get_field('secao_sobre_comvem', $id);
  $dataCta = get_field('secao_cta_comvem', $id);

  $bannerDataRow = get_field('banner_section_comvem', $id);
  $bannerData = [];

  if (is_array($bannerDataRow)) {
    $bannerData = [
      'bg_img'   => is_array($bannerDataRow['imagem_banner_section'] ?? null)
        ? ($bannerDataRow['imagem_banner_section']['url'] ?? '')
        : ($bannerDataRow['imagem_banner_section'] ?? ''),
      'title'    => null,
      'subtitle' => $bannerDataRow['subtitle_banner_section'] ?? null,
      'logo'     => is_array($bannerDataRow['logo_banner_section'] ?? null)
        ? ($bannerDataRow['logo_banner_section']['url'] ?? '')
        : ($bannerDataRow['logo_banner_section'] ?? ''),
      'variant'  => 'comvem',
      'scrollTo' => '#sobre',
    ];
  }

  load_component('global/page-simple-banner', null, $bannerData);


  load_component(
    'global/image-text-section',
    'comvem-section--highlight',
    [
      'title'    => $dataImageSection['titulo'] ?? null,
      'description' => $dataImageSection['descricao'] ?? null,
      'image'    => $dataImageSection['imagem'] ?? null,
      'idSection' => 'sobre',
    ]
  );
  load_component('template-parts/comvem-page/partners-section');

  load_component('template-parts/comvem-page/data-section');

  load_component(
    'global/cta-section',
    'comvem-section--highlight',
    [
      'bg'    => $dataCta['background'] ?? null,
      'title'    => $dataCta['titulo'] ?? null,
      'description' => $dataCta['descricao'] ?? null,
      'cta_text'    => $dataCta['texto_do_botao'] ?? null,
      'cta_link'    => $dataCta['link_do_botao'] ?? null,
    ]
  );

  load_component('template-parts/comvem-page/units-section');

  load_component('template-parts/comvem-page/find-section');
  ?>
</main>

<?php load_component('footer') ?>