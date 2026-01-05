<?php
    $id                  = get_the_ID();
    $image_section_group = get_field('press_section_home', $id);

    if ($image_section_group && is_array($image_section_group)) {
        $title   = $image_section_group['title_press_section_home'] ?? null;
        $text    = $image_section_group['description_press_section_home'] ?? null;
        $btnText = $image_section_group['button_text_press_section_home'] ?? null;
        $img_raw = $image_section_group['image_press_section_home'] ?? null;

        if (is_array($img_raw)) {
            $img = $img_raw['url'] ?? null;
        } elseif (is_string($img_raw)) {
            $img = $img_raw;
        } else {
            $img = null;
        }
    } else {
        $title = $text = $btn = $img = null;
    }
?>

<section class="cta-section-1225">
    <div class="container cta-wrapper">
        <div class="cta-text">
            <?php if ($title): ?>
                <h2><?php echo esc_html($title); ?></h2>
            <?php endif; ?>

            <?php if ($text): ?>
                <h6><?php echo wp_kses_post($text); ?></h6>
            <?php endif; ?>

            <?php if ($btnText): ?>
                <button class="press-cta primary-btn-blue">
                    <?php echo esc_html($btnText); ?>
                </button>
            <?php endif; ?>
        </div>

        <div class="cta-image ">
            <?php if ($img): ?>
                <img src="<?php echo esc_url($img); ?>" alt="">
            <?php endif; ?>
        </div>
    </div>
</section>

