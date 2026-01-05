<?php
// Busca todas as unidades (CPT unidades)
// pegar informacoes do post type comvem
// estado_unidade_comvem
// cidade_unidade_comvem
// endereco_unidade_comvem
?>

<?php
$units = get_posts([
    'post_type'      => 'unidade-comvem',
    'posts_per_page' => -1,
]);

$units_data = [];

foreach ($units as $unit) {
    $units_data[] = [
        'estado' => get_field('estado_unidade_comvem', $unit->ID),
        'cidade' => get_field('cidade_unidade_comvem', $unit->ID),
        'iframe' => get_field('iframe_google_maps', $unit->ID),
        'title'  => get_the_title($unit->ID),
    ];
}

wp_enqueue_script('find-unit-js');
wp_localize_script('find-unit-js', 'UNITS_DATA', $units_data);
?>

<section class="find-unit-section-idk-1225">
    <div class="container">
        <h2 class="units-title">Encontre um ComVem próximo a você</h2>

        <div class="filters">
            <div class="select-wrapper">
                <select id="state-select">
                    <option value="">Selecione o estado...</option>
                </select>
            </div>

            <div class="select-wrapper">
                <select id="city-select" disabled>
                    <option value="">Selecione a cidade...</option>
                </select>
            </div>

            <button id="search-unit" class="primary-btn-blue">Procurar</button>
        </div>

        <div id="map-wrapper" style="display:none;">
            <div id="map-iframe"></div>
        </div>
    </div>
</section>