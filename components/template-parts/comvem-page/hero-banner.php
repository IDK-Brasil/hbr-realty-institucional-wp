<?php
$id          = get_the_ID();
$banner_rows = get_field('banner_section_comvem', $id);


if ($banner_rows && is_array($banner_rows)) {
    $bg_img  = is_array($banner_rows['imagem_banner_section'])
        ? ($banner_rows['imagem_banner_section']['url'] ?? '')
        : $banner_rows['imagem_banner_section'] ?? '';
    $logo = is_array($banner_rows['logo_banner_section'])
        ? ($banner_rows['logo_banner_section']['url'] ?? '')
        : $banner_rows['logo_banner_section'];
    $sub   = $banner_rows['subtitle_banner_section'] ?? '';
} else {
    $banner = $bg_img = $sub = $logo = null;
}
?>

<section class="hero-banner-idk-1225">
    <?php if ($bg_img): ?>
        <img src="<?php echo esc_url($bg_img); ?>" class="hero-bg">
    <?php endif; ?>

    <div class="hero-content hero-content-comvem">
        <?php if ($logo): ?>
            <img src="<?php echo esc_url($logo); ?>" class="logo-comvem">
        <?php endif; ?>


        <?php if ($sub): ?>
            <div class="subtitle subtitle-comvem">
                <p><?php echo wp_kses_post($sub); ?></p>
            </div>
        <?php endif; ?>
    </div>

    <a class="scroll-down" href="#sobre">
        <p> Confira mais conteúdos abaixo </p>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mouse-scroll-down.svg" alt="Scroll para baixo" class="mouse-icon">
    </a>
</section>