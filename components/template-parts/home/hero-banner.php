<?php
$id          = get_the_ID();
$banner_rows = get_field('banner_section_home', $id);

if ($banner_rows && is_array($banner_rows)) {
    $banner  = $banner_rows[0];
    $bg_tipo = $banner['type_banner_section_home']; // video ou imagem
    $bg_img  = is_array($banner['imagem_banner_section_home'])
        ? ($banner['imagem_banner_section_home']['url'] ?? '')
        : $banner['imagem_banner_section_home'];
    $bg_vid = is_array($banner['video_banner_section_home'])
        ? ($banner['video_banner_section_home']['url'] ?? '')
        : $banner['video_banner_section_home'];
    $title = $banner['titulo_banner_section_home'];
    $sub   = $banner['subtitle_banner_section_home'];
} else {
    $bg_tipo = $title = $sub = $bg_img = $bg_vid = null;
}
?>

<section class="hero-banner-idk-1225" id="home">
    <?php if ($bg_tipo === 'video' && ! empty($bg_vid)): ?>
        <video autoplay muted loop playsinline class="hero-video">
            <source src="<?php echo esc_url($bg_vid); ?>" type="video/mp4">
        </video>

    <?php elseif ($bg_img): ?>
        <img src="<?php echo esc_url($bg_img); ?>" class="hero-bg">
    <?php endif; ?>

    <div class="hero-content">
        <?php if ($title): ?>
            <h1><?php echo esc_html($title); ?></h1>
        <?php endif; ?>


        <?php if ($sub): ?>
            <div class="subtitle">
                <p><?php echo wp_kses_post($sub); ?></p>
            </div>
        <?php endif; ?>

        <div class="hero-buttons">
            <a class="primary-btn-white" href="#portfolio">
                Nosso portfólio
            </a>

            <a class="secondary-btn-white" href="/empresa">
                Quem somos
            </a>
        </div>
    </div>

    <a class="scroll-down" href="#portfolio">
        <p> Confira mais conteúdos abaixo </p>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mouse-scroll-down.svg" alt="Scroll para baixo" class="mouse-icon">
    </a>
</section>