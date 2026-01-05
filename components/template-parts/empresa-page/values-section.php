<?php
$id   = get_the_ID();
$data = get_field('secao_dos_cards_empresa', $id);

$fallback_bg = get_template_directory_uri() . '/assets/img/banner-predios.png';
?>

<section class="values-section-idk-1225" id="sobre">
    <div class="container">
        <div class="values-section-wrapper">
            <?php if ($data): ?>
                <?php foreach ($data as $item): ?>

                    <?php
                    $title       = $item['titulo'] ?? '';
                    $description = $item['descricao'] ?? '';
                    $bg = $item['background'] ?? null;

                    if (is_array($bg) && !empty($bg['url'])) {
                        // retorno array
                        $bg_url = $bg['url'];
                    } elseif (is_string($bg) && !empty($bg)) {
                        // retorno url
                        $bg_url = $bg;
                    } elseif (is_int($bg)) {
                        // retorno id
                        $bg_url = wp_get_attachment_image_url($bg, 'full');
                    } else {
                        // fallback
                        $bg_url = $fallback_bg;
                    }
                    ?>

                    <div
                        class="values-section-card"
                        style="background-image: url('<?php echo esc_url($bg_url); ?>');">
                        <h4><?php echo esc_html($title); ?></h4>
                        <p><?php echo esc_html($description); ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>