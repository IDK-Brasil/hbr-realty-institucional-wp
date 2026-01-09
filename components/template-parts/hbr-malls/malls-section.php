<?php
$id   = get_the_ID();
$data = get_field('shopping_repetidor', $id);

if (!$data || !is_array($data)) {
    return;
}
?>

<section class="malls-section-hbr-malls-idk-1225">
    <div class="container">
        <h2 class="section-title">Confira onde estamos presentes</h2>

        <div class="shopping-tabs-wrapper">
            <div class="shopping-tabs">
                <?php foreach ($data as $i => $item): ?>
                    <button
                        class="shopping-tab <?php echo $i === 0 ? 'is-active' : ''; ?>"
                        data-index="<?php echo esc_attr($i); ?>">
                        <?php echo esc_html($item['nome_do_shopping']); ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="shopping-content-wrapper">
            <?php foreach ($data as $i => $item): ?>
                <?php
                $image  = $item['imagem'];
                $iframe = $item['iframe_google_maps'];
                ?>

                <div class="shopping-content <?php echo $i === 0 ? 'is-active' : ''; ?>" data-index="<?php echo esc_attr($i); ?>">
                    <div class="shopping-grid">
                        <div class="shopping-image">
                            <?php if (is_array($image) && !empty($image['url'])): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="">
                            <?php endif; ?>
                        </div>

                        <div class="shopping-info">
                            <h2 class="shopping-title"><?php echo esc_html($item['nome_do_shopping']); ?></h2>

                            <div class="shopping-description">
                                <?php echo wp_kses_post($item['description_malls']); ?>
                            </div>

                            <?php if (!empty($item['link_para_site'])): ?>
                                <a href="<?php echo esc_url($item['link_para_site']); ?>" class="primary-btn-blue">
                                    Acesse o site <?php echo esc_html($item['nome_do_shopping']); ?>
                                </a>
                            <?php endif; ?>

                            <?php if (!empty($iframe)): ?>
                                <div class="shopping-map">
                                    <?php echo $iframe; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <span class="shopping-shape shopping-shape-left"></span>
    <span class="shopping-shape shopping-shape-right"></span>
</section>