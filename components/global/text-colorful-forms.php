<?php
$text       = is_string($text ?? null) ? $text : null;
$color      = is_string($color ?? null) ? $color : '#FFDF80';
$section_id = is_string($idSection ?? null) ? $idSection : '';
?>

<section class="text-colorful-forms-idk-1225" id="<?php echo esc_attr($section_id); ?>">
    <div class="container-lg">
        <div class="text-colorful-forms-grid">
            <div class="text-colorful-forms-bg-left" style="border-color: <?php echo esc_attr($color); ?>;"></div>
            <div class="text-colorful-forms-bg-right" style="border-color: <?php echo esc_attr($color); ?>;"></div>

            <div class="text-colorful-forms-text-wrapper">
                <h2><?php echo esc_html($text); ?></h2>
            </div>
        </div>
    </div>
</section>