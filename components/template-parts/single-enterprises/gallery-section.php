<?php

/**
 * Espera receber:
 * $nome_da_unidade_empreendimentos
 * $galeria_de_imagens_da_unidade_empreendimentos
 */
?>

<?php if (is_array($galeria) && !empty($galeria)): ?>
    <section class="enterprise-gallery" id="galeria">
        <div class="container">
            <h2 class="title">Galeria da <?php echo esc_html($nome); ?></h2>
        </div>

        <div class="swiper enterprise-gallery-swiper">
            <button class="enterprise-arrow swiper-button-prev" disabled>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-left.svg" alt="Unidade anterior">
            </button>

            <div class="swiper-wrapper">
                <?php foreach ($galeria as $img): ?>
                    <?php if (!empty($img['url'])): ?>
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url($img['url']); ?>" alt="">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>

            <button class="enterprise-arrow swiper-button-next">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="Proxima unidade">
            </button>
        </div>

        <div class="arrows-mobile">
            <button class="enterprise-arrow mobile-prev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-left.svg" alt="Proxima unidade">
            </button>

            <button class="enterprise-arrow mobile-next">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="Proxima unidade">
            </button>
        </div>

        <div class="swiper-pagination"></div>
    </section>
<?php endif; ?>