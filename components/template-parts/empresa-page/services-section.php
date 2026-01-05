<?php
$id = get_the_ID();
$services = get_field('secao_dos_servicos_empresa', $id);
?>

<section class="service-section-card-idk-1225">
    <div class="container">
        <div class="service-section-card-wrapper">
            <?php if (!empty($services)): ?>
                <?php foreach ($services as $service): ?>
                    <?php
                    $title = $service['titulo'] ?? '';
                    $description = $service['descricao'] ?? '';
                    $images = $service['imagens'] ?? [];
                    ?>
                    <div class="service-card">
                        <div class="service-card__content">
                            <h2 class="service-card__title"><?php echo esc_html($title); ?></h2>
                            <div class="service-card__text">
                                <?php echo wp_kses_post($description); ?>
                            </div>
                        </div>

                        <div class="service-card__media">
                            <div class="swiper service-swiper image-card-swiper">
                                <div class="swiper-wrapper">
                                    <?php foreach ($images as $image): ?>
                                        <div class="swiper-slide">
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="">
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>