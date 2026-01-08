<?php
$title       = is_string($title ?? null) ? $title : null;
$description    = is_string($description ?? null) ? $description : null;
$image  = is_array($image)
    ? ($image['url'] ?? '')
    : $image;
$id = is_string($idSection ?? null) ? $idSection : '';
$formColor = is_string($formColor ?? null) ? $formColor : null;

?>

<section class="image-text-section-form-idk-1225" id="<?php echo esc_attr($id); ?>">
    <div class="container">
        <div class="section-wrapper">
            <div class="text-wrapper">
                <h2><?php echo esc_html($title); ?></h2>

                <div class="description">
                    <?php echo wp_kses_post($description); ?>
                </div>

                <div class="bg-left" style="border-color: <?php echo esc_attr($formColor); ?>"></div>
            </div>

            <img src="<?php echo esc_url($image); ?>" alt="">
        </div>
    </div>
</section>