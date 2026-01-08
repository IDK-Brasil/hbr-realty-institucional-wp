<?php
/* Template Name: Página Não Encontrada [404] */
?>

<?php load_component('header') ?>

<main class="not-found-page-idk-1225 blue-header">
    <section class="content-section">
        <div class="content-wrapper">
            <h1>Essa página não foi encontrada...</h1>

            <h6>Retorne ao início e continue explorando o universo HBR Realty.</h6>

            <a class="btn primary-btn-blue" href="/"> Voltar ao início
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
            </a>
        </div>

        <div class="shape-container">
            <h1>404</h1>

            <span class="not-found-shape not-found-shape-left"></span>
            <span class="not-found-shape not-found-shape-right"></span>
        </div>
    </section>
</main>

<?php load_component('footer') ?>