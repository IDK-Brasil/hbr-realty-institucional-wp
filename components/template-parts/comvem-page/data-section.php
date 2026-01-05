<?php
$id   = get_the_ID();
$data = get_field('secao_dos_dados_comvem', $id);

if (!$data || count($data) < 3) {
    return;
}
?>

<section class="three-cards-section-idk-1225">
    <div class="container">
        <div class="cards-grid">

            <!-- COLUNA ESQUERDA -->
            <div class="cards-left">
                <?php foreach ($data as $index => $item): ?>
                    <?php if ($index === 0 || $index === 2): ?>

                        <?php
                        $numero    = $item['numero'] ?? '';
                        $descricao = $item['descricao_do_numero'] ?? '';
                        $texto     = $item['texto'] ?? '';
                        $imagens   = $item['imagens'] ?? [];
                        ?>

                        <article class="card">
                            <h6><?php echo esc_html($numero . $descricao); ?></h6>

                            <div class="card-text">
                                <?php echo wp_kses_post($texto); ?>
                            </div>

                            <?php if ($imagens): ?>
                                <div class="image-card-swiper swiper">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($imagens as $img): ?>
                                            <div class="swiper-slide">
                                                <img src="<?php echo esc_url($img['url']); ?>" alt="">
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            <?php endif; ?>
                        </article>

                    <?php endif; ?>
                <?php endforeach; ?>
            </div>

            <!-- COLUNA DIREITA -->
            <div class="cards-right">
                <?php
                $item = $data[1];

                $numero    = $item['numero'] ?? '';
                $descricao = $item['descricao_do_numero'] ?? '';
                $texto     = $item['texto'] ?? '';
                $imagens   = $item['imagens'] ?? [];
                ?>

                <article class="card">
                    <h6><?php echo esc_html($numero . $descricao); ?></h6>

                    <div class="card-text">
                        <?php echo wp_kses_post($texto); ?>
                    </div>

                    <?php if ($imagens): ?>
                        <div class="image-card-swiper swiper">
                            <div class="swiper-wrapper">
                                <?php foreach ($imagens as $img): ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo esc_url($img['url']); ?>" alt="">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    <?php endif; ?>
                </article>
            </div>

        </div>
    </div>
</section>