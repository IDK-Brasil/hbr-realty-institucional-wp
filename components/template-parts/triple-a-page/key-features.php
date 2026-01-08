<?php

$id = get_the_ID();
$content = get_field('secao_diferenciais_triple_a', $id);

$img = $content['imagem'] ?? null;

if (is_array($img) && !empty($img['url'])) {
    $content['imagem'] = $img['url'];
}
?>

<section class="key-features-section-idk-1225">
    <div class="text-container">
        <div class="text-wrapper">
            <h2 class="title"><?php echo esc_html($content['titulo']); ?></h2>

            <div class="description">
                <?php echo wp_kses_post($content['descricao']); ?>
            </div>

            <div class="topics">
                <?php if (is_array($content['topicos'])): ?>
                    <?php foreach ($content['topicos'] as $topic): ?>
                        <div class="topic">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/circle-check-icon.svg" alt="" width="24" height="24">
                            <p class="topic-title"><?php echo esc_html($topic['texto_do_topico']); ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <button class="primary-btn-blue open-contact-modal">
                <?php echo esc_html($content['titulo_do_botao']); ?>
            </button>
        </div>
    </div>

    <div class="image-wrapper">
        <img src="<?php echo esc_url($content['imagem']); ?>" alt="<?php echo esc_attr($content['titulo']); ?>">
    </div>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/circle-yellow-vector.svg" alt="" class="circle-vector">
</section>