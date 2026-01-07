<?php
$id = get_the_ID();
$data = get_field('secao_dos_numeros_hbr_malls', $id);
?>

<section class="numbers-section-hbr-malls-idk-1225">
    <div class="container">
        <div class="numbers-section-wrapper">
            <?php
            if ($data) :
                foreach ($data as $item) :
            ?>
                    <div class="number-item">
                        <h3 class="number"><?= esc_html($item['valor_do_numero'] ?? ''); ?> <?= esc_html($item['descricao_do_numero'] ?? ''); ?></h3>
                        <p class="description"><?= esc_html($item['texto'] ?? ''); ?></p>
                    </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>