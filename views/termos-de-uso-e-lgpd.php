<?php
/* Template Name: Termos de Uso e LGPD */

get_header();
$id = get_the_ID();

$intro_text = get_field('texto_da_politica_de_privacidade_e_tratamentos_pessoais', $id);

$termos   = get_field('termos_de_uso', $id);
$cookies  = get_field('politica_de_cookies', $id);

$data_termos  = get_field('data_de_atualizacao_termos', $id);
$data_cookies = get_field('data_de_atualizacao_cookies', $id);

$menu = get_field('menu_acesso_rapido', $id);

function format_date_pt_br($date)
{
    if (!$date) return '';
    $timestamp = strtotime(str_replace('/', '-', $date));
    return date_i18n('d \d\e F \d\e Y', $timestamp);
}
?>

<?php load_component('header'); ?>

<main class="terms-page-idk-1225 blue-header">
    <div class="container terms-grid">

        <!-- COLUNA ESQUERDA -->
        <div class="terms-content">
            <?php if ($data_termos): ?>
                <p class="terms-updated">
                    Atualização em: <?php echo esc_html(format_date_pt_br($data_termos)); ?>
                </p>
            <?php endif; ?>

            <?php if ($intro_text): ?>
                <section class="terms-intro">
                    <h1>Política de privacidade e tratamentos pessoais</h1>
                    <div class="terms-text">
                        <?php echo wp_kses_post($intro_text); ?>
                    </div>
                </section>
            <?php endif; ?>

            <!-- MENU NO MOBILE -->
            <?php if ($menu): ?>
                <aside class="terms-sidebar mobile-only">
                    <div class="terms-sidebar-box">
                        <h5>Acesso rápido</h5>
                        <ul>
                            <?php foreach ($menu as $item): ?>
                                <?php if (!empty($item['ancora_do_menu'])): ?>
                                    <li>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gray-arrow-right.svg" alt="">
                                        <a href="#<?php echo esc_attr($item['ancora_do_menu']); ?>">
                                            <?php echo esc_html($item['titulo']); ?>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </aside>
            <?php endif; ?>

            <!-- TERMOS DE USO -->
            <?php if ($termos): ?>
                <section class="terms-group">
                    <?php foreach ($termos as $item): ?>
                        <?php $anchor = $item['ancora_do_menu'] ?? ''; ?>
                        <section
                            class="terms-section"
                            <?php if ($anchor): ?>id="<?php echo esc_attr($anchor); ?>" <?php endif; ?>>
                            <h2><?php echo esc_html($item['titulo']); ?></h2>
                            <div class="terms-text">
                                <?php echo wp_kses_post($item['conteudo']); ?>
                            </div>
                        </section>
                    <?php endforeach; ?>
                </section>
            <?php endif; ?>

            <?php if ($cookies): ?>
                <section class="terms-group">
                    <?php if ($data_cookies): ?>
                        <p class="terms-updated">
                            Atualização em: <?php echo esc_html(format_date_pt_br($data_cookies)); ?>
                        </p>
                    <?php endif; ?>

                    <?php foreach ($cookies as $item): ?>
                        <?php $anchor = $item['ancora_do_menu'] ?? ''; ?>
                        <section
                            class="terms-section"
                            <?php if ($anchor): ?>id="<?php echo esc_attr($anchor); ?>" <?php endif; ?>>
                            <h2><?php echo esc_html($item['titulo']); ?></h2>
                            <div class="terms-text">
                                <?php echo wp_kses_post($item['conteudo']); ?>
                            </div>
                        </section>
                    <?php endforeach; ?>
                </section>
            <?php endif; ?>
        </div>

        <!-- MENU LATERAL DESKTOP -->
        <?php if ($menu): ?>
            <aside class="terms-sidebar desktop-only">
                <div class="terms-sidebar-box">
                    <h5>Acesso rápido</h5>
                    <ul>
                        <?php foreach ($menu as $item): ?>
                            <?php if (!empty($item['ancora_do_menu'])): ?>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gray-arrow-right.svg" alt="">
                                    <a href="#<?php echo esc_attr($item['ancora_do_menu']); ?>">
                                        <?php echo esc_html($item['titulo']); ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </aside>
        <?php endif; ?>
    </div>
</main>

<?php load_component('footer'); ?>