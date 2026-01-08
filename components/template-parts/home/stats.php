<?php
$id                  = get_the_ID();
$stats_section_group = get_field('numbers_section_home', $id);

if ($stats_section_group && is_array($stats_section_group)) {
    $firstColumn  = $stats_section_group['column_1_numbers_section_home'] ?? null;
    $secondColumn = $stats_section_group['column_2_numbers_section_home'] ?? null;

    $firstColumnFlag       = $firstColumn['title_column_1_numbers_section_home'] ?? null;
    $firstColumnNumber     = $firstColumn['count_column_1_numbers_section_home'] ?? null;
    $firstColumnNumberText = $firstColumn['info_number_column_1_numbers_section_home'] ?? null;
    $firstColumnDesc       = $firstColumn['description_column_1_numbers_section_home'] ?? null;
    $firstColumnImageRaw   = $firstColumn['image_column_1_numbers_section_home'] ?? null;

    $secondColumnFlag       = $secondColumn['title_column_2_numbers_section_home'] ?? null;
    $secondColumnNumber     = $secondColumn['count_column_2_numbers_section_home'] ?? null;
    $secondColumnNumberText = $secondColumn['info_number_column_2_numbers_section_home'] ?? null;
    $secondColumnDesc       = $secondColumn['description_column_2_numbers_section_home'] ?? null;
    $secondColumnImageRaw   = $secondColumn['image_column_2_numbers_section_home'] ?? null;

    function normalize_img($raw)
    {
        if (is_array($raw)) {
            return $raw['url'] ?? null;
        }

        if (is_int($raw)) {
            return wp_get_attachment_url($raw);
        }

        if (is_string($raw)) {
            return $raw;
        }

        return null;
    }

    $firstColumnImage  = normalize_img($firstColumnImageRaw);
    $secondColumnImage = normalize_img($secondColumnImageRaw);
} else {
    $firstColumnFlag = $firstColumnNumber = $firstColumnNumberText = $firstColumnDesc = $firstColumnImage = null;
}
?>

<section class="stats-section-idk-1225">
    <div class="container">
        <div class="numbers-grid">
            <div class="number-card">
                <p class="flag"><?php echo esc_html($firstColumnFlag); ?></p>

                <div class="number-line">
                    <h2 class="number"><?php echo esc_html($firstColumnNumber); ?></h2>
                    <p class="number-desc"><?php echo esc_html($firstColumnNumberText); ?></p>
                </div>

                <h5 class="desc"><?php echo esc_html($firstColumnDesc); ?></h5>

                <?php if ($firstColumnImage): ?>
                    <img src="<?php echo esc_url($firstColumnImage); ?>" alt="" class="card-image">
                <?php endif; ?>
            </div>

            <div class="number-card">
                <p class="flag"><?php echo esc_html($secondColumnFlag); ?></p>

                <div class="number-line">
                    <h2 class="number"><?php echo esc_html($secondColumnNumber); ?></h2>
                    <p class="number-desc"><?php echo esc_html($secondColumnNumberText); ?></p>
                </div>

                <h5 class="desc"><?php echo esc_html($secondColumnDesc); ?></h5>

                <?php if ($secondColumnImage): ?>
                    <img src="<?php echo esc_url($secondColumnImage); ?>" alt="" class="card-image">
                <?php endif; ?>
            </div>
        </div>
    </div>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/circle-vector.svg" alt="" class="circle-vector">
</section>