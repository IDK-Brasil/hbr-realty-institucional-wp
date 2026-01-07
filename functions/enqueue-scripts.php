<?php
add_action('wp_enqueue_scripts', 'idk_enqueue_scripts');


function idk_enqueue_scripts()
{
    // Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        [],
        null
    );
    // Swiper JS
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        [],
        null,
        true
    );
    // JS dos serviços
    wp_enqueue_script(
        'services-section',
        get_template_directory_uri() . '/assets/js/image-card.js',
        ['swiper-js'],
        '1.0',
        true
    );
    // JS dos parceiros
    wp_enqueue_script(
        'partners-js',
        get_template_directory_uri() . '/assets/js/comvem/partners.js',
        [],
        '1.0',
        true
    );
    // Busca de unidades
    wp_enqueue_script(
        'find-unit-js',
        get_template_directory_uri() . '/assets/js/comvem/find-unit.js',
        [],
        '1.0',
        true
    );
    // Carousel
    wp_enqueue_script(
        'carousel-js',
        get_template_directory_uri() . '/assets/js/comvem/carousel.js',
        [],
        '1.0',
        true
    );
    // Banner
    wp_enqueue_script(
        'main-banner-js',
        get_template_directory_uri() . '/assets/js/banner/main-banner.js',
        [],
        '1.0',
        true
    );
}
