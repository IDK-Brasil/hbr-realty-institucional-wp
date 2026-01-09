<?php
$units = get_posts([
    'post_type'      => 'enterprises',
    'posts_per_page' => -1,
]);

if (!$units) return;
$total = count($units);
?>

<section class="units-carousel-triple-a-idk-1225">
    <div class="container">
        <h2 class="units-title">Conheça nossas unidades</h2>
    </div>

    <div class="container container-fluid">
        <div class="units-carousel">
            <button class="units-arrow units-arrow--left" disabled>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-left.svg" alt="Unidade anterior">
            </button>

            <div class="units-viewport">
                <div class="units-track">
                    <?php foreach ($units as $unit): ?>

                        <?php
                        $title = get_field('nome_da_unidade_empreendimentos', $unit->ID);
                        $info  = get_field('informacoes_unidade_empreendimentos', $unit->ID);
                        $image = get_field('galeria_de_imagens_da_unidade_empreendimentos', $unit->ID)[0];

                        $image_url = is_array($image) && !empty($image['url']) ? $image['url'] : '';
                        ?>

                        <article
                            class="unit-card"
                            style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0) 30.18%, #000000 100%), url('<?php echo esc_url($image_url); ?>');">
                            <div class="unit-content">
                                <?php if ($title): ?>
                                    <h2><?php echo esc_html($title); ?></h2>
                                <?php endif; ?>

                                <?php if (is_array($info)): ?>
                                    <ul class="unit-info">
                                        <?php foreach ($info as $row): ?>
                                            <?php if (!empty($row['informacao'])): ?>
                                                <li><?php echo wp_kses_post($row['informacao']); ?></li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <a href="<?php echo get_the_permalink($unit->ID); ?>" class="primary-btn-white">
                                    Conferir unidade
                                </a>
                            </div>

                        </article>

                    <?php endforeach; ?>
                </div>
            </div>

            <button class="units-arrow units-arrow--right">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="Proxima unidade">
            </button>
        </div>

        <div class="arrows-mobile">
            <button class="units-arrow units-arrow--left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-left.svg" alt="Proxima unidade">
            </button>

            <button class="units-arrow units-arrow--right">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="Proxima unidade">
            </button>
        </div>

        <div class="units-counter">
            Você está na unidade
            <span id="current-unit">01</span>/<span id="total-units"><?php echo str_pad($total, 2, '0', STR_PAD_LEFT); ?></span>
        </div>
    </div>
</section>