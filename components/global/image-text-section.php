<?php
$title       = is_string($title ?? null) ? $title : null;
$description    = is_string($description ?? null) ? $description : null;
$image  = is_array($image)
    ? ($image['url'] ?? '')
    : $image;
$id = is_string($idSection ?? null) ? $idSection : '';

?>

<section class="image-text-section-idk-1225" id="<?php echo esc_attr($id); ?>">
    <div class="container">
        <div class="section-wrapper">
            <img src="<?php echo esc_url($image); ?>" alt="">


            <div class="text-wrapper">
                <h2><?php echo esc_html($title); ?></h2>

                <div class="description">
                    <?php echo wp_kses_post($description); ?>
                </div>
            </div>
        </div>
    </div>
</section>