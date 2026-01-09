<?php
/* Template Name: Unidade de Empreendimentos */
get_header();
?>

<?php load_component('header'); ?>

<?php
$id = get_the_ID();

$nome        = get_field('nome_da_unidade_empreendimentos', $id);
$descricao   = get_field('descricao_da_pagina', $id);
$galeria     = get_field('galeria_de_imagens_da_unidade_empreendimentos', $id);
$iframe_map  = get_field('iframe_google_maps', $id);
$endereco    = get_field('endereco_unidade_empreendimentos', $id);
$ficha_pdf   = get_field('ficha_tecnica', $id); // file (PDF)
?>

<main class="enterprise-single-idk-1225">
    <?php
    load_component('template-parts/single-enterprises/hero-banner', null,  [
        'bg_img'   => is_array($galeria[0] ?? null)
            ? ($galeria[0]['url'] ?? '')
            : ($galeria[0] ?? ''),
        'address'   => $endereco ?? null,
        'title'    => $nome ?? null,
        'subtitle' => $descricao ?? null,
        'pdf'      => $ficha_pdf ?? null,
        'variant'  => 'unidade-empreendimentos',
        'scrollTo' => '#galeria',
    ]);

    load_component('template-parts/single-enterprises/gallery-section', null,  [
        'nome'    => $nome ?? null,
        'galeria' => $galeria ?? null,
    ]);

    load_component('template-parts/single-enterprises/location-section', null,  [
        'nome'    => $nome ?? null,
        'iframe_map' => $iframe_map ?? null,
    ]);

    load_component('template-parts/single-enterprises/contact-section', null,  [
        'img'   => is_array($galeria[0] ?? null)
            ? ($galeria[0]['url'] ?? '')
            : ($galeria[0] ?? ''),
    ]);
    ?>
</main>

<?php load_component('footer') ?>