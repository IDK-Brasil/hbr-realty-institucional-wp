<?php

/**
 * Espera receber:
 * $bg_img   (string|array|null) // string = 1 imagem | array = várias imagens
 * $title
 * $subtitle
 * $logo
 * $variant
 * $scrollTo
 */
?>

<section class="hero-banner-idk-1225 <?php echo esc_attr($variant ?? ''); ?>">

    <?php if (is_array($bg_img) && !empty($bg_img)): ?>
        <!-- CARROSSEL -->
        <div class="hero-bg-swiper swiper">
            <div class="swiper-wrapper">
                <?php foreach ($bg_img as $img): ?>
                    <?php
                    $url = is_array($img) ? ($img['url'] ?? '') : $img;
                    ?>
                    <?php if ($url): ?>
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url($url); ?>" alt="">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>

    <?php elseif (is_string($bg_img) && $bg_img): ?>
        <!-- IMAGEM ÚNICA -->
        <img src="<?php echo esc_url($bg_img); ?>" class="hero-bg" alt="">
    <?php endif; ?>

    <div class="hero-content <?php echo esc_attr($variant ? "hero-content-{$variant}" : ''); ?>">
        <?php if (!empty($logo)): ?>
            <img src="<?php echo esc_url($logo); ?>" class="hero-logo" alt="">
        <?php endif; ?>

        <?php if (!empty($title)): ?>
            <h1><?php echo esc_html($title); ?></h1>
        <?php endif; ?>

        <?php if (!empty($subtitle)): ?>
            <div class="subtitle">
                <p><?php echo wp_kses_post($subtitle); ?></p>
            </div>
        <?php endif; ?>
    </div>

    <div class="scroll-down-wrapper">
        <a class="scroll-down" href="<?php echo esc_url($scrollTo ?? '#'); ?>">
            <p>Confira mais conteúdos abaixo</p>
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/mouse-scroll-down.svg"
                alt="Scroll para baixo"
                class="mouse-icon">
        </a>

        <?php if (is_array($bg_img) && !empty($bg_img)): ?>
            <div class="hero-swiper-pagination"></div>
        <?php endif; ?>
    </div>
</section>