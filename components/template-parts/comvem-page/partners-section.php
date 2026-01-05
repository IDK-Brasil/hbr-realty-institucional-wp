<?php
$id          = get_the_ID();
$partner = get_field('principais_parceiros_comvem', $id);

$title = $partner['titulo'] ?? null;
$description = $partner['descricao'] ?? null;
$partners = $partner['parceiros'] ?? [];
?>

<section class="partners-section-idk-1225">
    <div class="container">
        <h2><?php echo esc_html($title); ?></h2>
        <h6>
            <?php echo esc_html($description); ?>
        </h6>
    </div>

    <span class="partners-bar partners-bar--top"></span>

    <div class="partners-carousel">
        <div class="partners-track">
            <?php foreach ($partners as $partner): ?>
                <div class="partner-item">
                    <img src="<?php echo esc_url($partner['logo_parceiros']['url']); ?>" alt="">
                </div>
            <?php endforeach; ?>

            <?php foreach ($partners as $partner): ?>
                <div class="partner-item">
                    <img src="<?php echo esc_url($partner['logo_parceiros']['url']); ?>" alt="">
                </div>
            <?php endforeach; ?>
        </div>

        <span class="partners-gradient partners-gradient--left"></span>
        <span class="partners-gradient partners-gradient--right"></span>
    </div>

    <span class="partners-bar partners-bar--bottom"></span>
</section>