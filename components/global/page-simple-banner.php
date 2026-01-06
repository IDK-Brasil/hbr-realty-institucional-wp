<?php

/**
 * Espera receber:
 * $bg_img   (string|null)
 * $title    (string|null)
 * $subtitle (string|null)
 * $logo     (string|null)
 * $variant  (string|null) // empresa | comvem | default
 * $scrollTo (string|null)
 */
?>

<section class="hero-banner-idk-1225 <?php echo esc_attr($variant ?? ''); ?>">
    <?php if (!empty($bg_img)): ?>
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

    <a class="scroll-down" href="<?php echo esc_url($scrollTo ?? '#'); ?>">
        <p>Confira mais conteúdos abaixo</p>
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/mouse-scroll-down.svg"
            alt="Scroll para baixo"
            class="mouse-icon">
    </a>
</section>