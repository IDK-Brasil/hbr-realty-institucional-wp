<?php

/**
 * Espera receber:
 * $nome_da_unidade_empreendimentos
 * $iframe_google_maps
 */
?>

<?php if ($iframe_map): ?>
    <section class="enterprise-location">
        <div class="container">
            <h2>Localização da <?php echo esc_html($nome); ?></h2>
        </div>

        <div class="location-wrapper">
            <span class="location-line"></span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/circle-yellow-vector.svg" alt="" class="circle-vector">

            <div class="location-map">
                <?php echo $iframe_map; ?>
            </div>
        </div>
    </section>
<?php endif; ?>