<?php
$title       = is_string($title ?? null) ? $title : null;
$subtitle    = is_string($subtitle ?? null) ? $subtitle : null;
$id = is_string($idSection ?? null) ? $idSection : '';
?>

<section class="text-circle-section-idk-1225" id="<?php echo esc_attr($id); ?>">
    <div class="container">
        <div class="text-wrapper">
            <h4 class="title"><?php echo esc_html($title); ?></h4>

            <div>
                <?php echo wp_kses_post($subtitle); ?>
            </div>
        </div>
    </div>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/circle-vector.svg" alt="" class="circle-vector">
</section>