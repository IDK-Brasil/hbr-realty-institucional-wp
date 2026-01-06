<?php
$id = get_the_ID();
$services = get_field('secao_dos_cards_opportunities', $id);
?>

<section class="service-section-opportunities-card-idk-1225">
    <div class="container">
        <div class="service-section-card-wrapper">
            <?php if (!empty($services)): ?>
                <?php foreach ($services as $service): ?>
                    <?php
                    $title = $service['titulo'] ?? '';
                    $description = $service['descricao'] ?? '';

                    $image = $service['background'] ?? [];

                    if (is_array($image)) {
                        $img = $image['url'] ?? null;
                    } elseif (is_string($image)) {
                        $img = $image;
                    } else {
                        $img = null;
                    }
                    ?>
                    <div class="service-card">
                        <div class="service-card__content">
                            <h2 class="service-card__title"><?php echo esc_html($title); ?></h2>
                            <div class="service-card__text">
                                <?php echo wp_kses_post($description); ?>
                            </div>
                        </div>

                        <div class="service-card__media">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="">
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>