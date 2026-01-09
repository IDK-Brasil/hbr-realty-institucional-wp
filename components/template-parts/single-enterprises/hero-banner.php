<?php

/**
 * Espera receber:
 * $nome
 * $galeria_de_imagens_da_unidade_empreendimentos[0]['url']
 * $endereco_unidade_empreendimentos
 * $descricao_da_pagina
 */
?>

<section class="hero-banner-idk-1225" id="home">
    <?php if ($bg_img): ?>
        <img src="<?php echo esc_url($bg_img); ?>" class="hero-bg">
    <?php endif; ?>

    <div class="hero-content enterprise-subtitle">
        <?php if ($address): ?>
            <div class="address">
                <img class="pin-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/pin-location-map.svg" alt="" width="24" height="24">
                <p><?php echo esc_html($address); ?></p>
            </div>
        <?php endif; ?>

        <?php if ($title): ?>
            <h1><?php echo esc_html($title); ?></h1>
        <?php endif; ?>


        <?php if ($subtitle): ?>
            <div class="subtitle enterprise-subtitle">
                <p><?php echo wp_kses_post($subtitle); ?></p>
            </div>
        <?php endif; ?>

        <div class="hero-buttons enterprise-buttons">
            <button class="primary-btn-white fit-content" onclick="window.open('<?php echo esc_url($pdf); ?>', '_blank')">
                Ficha técnica
            </button>
        </div>
    </div>

    <div class="scroll-down-wrapper">
        <a class="scroll-down" href="<?php echo esc_url($scrollTo ?? '#'); ?>">
            <p> Confira mais conteúdos abaixo </p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mouse-scroll-down.svg" alt="Scroll para baixo" class="mouse-icon">
        </a>
    </div>
</section>