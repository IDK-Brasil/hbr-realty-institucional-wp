<?php
$id = get_the_ID();
$data = get_field('secao_comercializacao_hbr_malls', $id);
?>

<section class="comercialization-section-hbr-malls-idk-1225">
    <div class="container">
        <div class="comercialization-wrapper">
            <h2 class="section-title"><?php echo esc_html($data['titulo']); ?></h2>

            <h6 class="section-description"><?php echo esc_html($data['descricao']); ?></h6>

            <button class="primary-btn-blue open-contact-modal">
                <?php echo esc_html($data['texto_botao']); ?>
            </button>
        </div>
    </div>
</section>