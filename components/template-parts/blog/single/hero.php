<?php
// Pega a URL da imagem destacada (tamanho 'full' ou 'large')
$bg_image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
?>

<section class="post-hero" style="background-image: url('<?php echo esc_url($bg_image); ?>');">
    <div class="hero-overlay"></div>
    <div class="hero-container">
        <h1 class="post-title"><?php the_title(); ?></h1>
        <span class="post-date">Publicado em — <?php echo get_the_date('d/m/Y'); ?></span>
    </div>
</section>