<?php
$title       = is_string($title ?? null) ? $title : null;
$description    = is_string($description ?? null) ? $description : null;
$bg  = is_array($bg)
    ? ($bg['url'] ?? '')
    : $bg;
$cta_text    = is_string($cta_text ?? null) ? $cta_text : null;
$cta_link    = is_string($cta_link ?? null) ? $cta_link : null;
$id = is_string($idSection ?? null) ? $idSection : '';
?>

<section class="cta-section-idk-1225" id="<?php echo esc_attr($id); ?>">
    <div class="container" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo esc_url($bg); ?>'); ">
        <div class="text-wrapper">
            <h2><?php echo esc_html($title); ?></h2>

            <div class="description">
                <?php echo wp_kses_post($description); ?>
            </div>

            <button class="press-cta primary-btn-green" href="<?php echo esc_url($cta_link); ?>">
                <?php echo esc_html($cta_text); ?>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" class="arrow">
            </button>
        </div>
    </div>
</section>