<?php
$id          = get_the_ID();
$banner_rows = get_field('banner_section_empresa', $id);

if ($banner_rows && is_array($banner_rows)) {
    $banner  = $banner_rows[0];
    $bg_img  = is_array($banner['imagem_banner_section'])
        ? ($banner['imagem_banner_section']['url'] ?? '')
        : $banner['imagem_banner_section'];
    $title = $banner['titulo_banner_section'];
    $sub   = $banner['subtitle_banner_section'];
} else {
    $banner = $title = $sub = $bg_img = null;
}
?>

<section class="hero-banner-idk-1225">
    <?php if ($bg_img): ?>
        <img src="<?php echo esc_url($bg_img); ?>" class="hero-bg">
    <?php endif; ?>

    <div class="hero-content hero-content-empresa">
        <?php if ($title): ?>
            <h1><?php echo esc_html($title); ?></h1>
        <?php endif; ?>


        <?php if ($sub): ?>
            <div class="subtitle subtitle-empresa">
                <p><?php echo wp_kses_post($sub); ?></p>
            </div>
        <?php endif; ?>
    </div>

    <a class="scroll-down" href="#sobre">
        <p> Confira mais conteúdos abaixo </p>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mouse-scroll-down.svg" alt="Scroll para baixo" class="mouse-icon">
    </a>
</section>