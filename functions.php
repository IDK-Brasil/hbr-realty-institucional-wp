<?php
add_filter('show_admin_bar', '__return_false');

add_action('init', function () {
    load_textdomain('acf', false);
});

include __DIR__ . '/functions/include-files.php';
include __DIR__ . '/functions/get-image-props.php';
include __DIR__ . '/functions/detect-device.php';
include __DIR__ . '/functions/modify-wp-file-hierarchy.php';
include __DIR__ . '/functions/permission-svg.php';
include __DIR__ . '/functions/strip-html-tags.php';
include __DIR__ . '/functions/create-config-cpt.php';
include __DIR__ . '/functions/register-custom-posts.php';
include __DIR__ . '/functions/convert-to-embed-url.php';
require get_template_directory() . '/functions/theme-options.php';

add_theme_support('post-thumbnails');
function hbr_register_menus()
{
    register_nav_menus([
        'header_menu' => 'Menu do Header',
        'footer_menu' => 'Menu do Footer',
    ]);
}
add_action('after_setup_theme', 'hbr_register_menus');

function hbr_enqueue_assets()
{
    $version = wp_get_theme()->get('Version') ?: time();

    wp_enqueue_style(
        'hbr-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        $version
    );

    wp_enqueue_style(
        'hbr-adobe-fonts',
        'https://use.typekit.net/ufx1xsc.css',
        [],
        null
    );

    // HEADER [MENU]
    wp_enqueue_script(
        'hbr-menu',
        get_template_directory_uri() . '/assets/js/header/menu.js',
        [],
        $version,
        true
    );

    // HEADER [SCROLL]
    wp_enqueue_script(
        'hbr-header-scroll',
        get_template_directory_uri() . '/assets/js/header/header-scroll.js',
        [],
        time(),
        true
    );

    // HEADER [MOBILE MENU]
    wp_enqueue_script(
        'hbr-mobile-menu',
        get_template_directory_uri() . '/assets/js/header/mobile-menu.js',
        [],
        $version,
        true
    );

    // HEADER [MODAL]
    wp_enqueue_script(
        'hbr-modal',
        get_template_directory_uri() . '/assets/js/header/modal.js',
        [],
        time(),
        true
    );

    // HEADER [MODAL VALIDATE]
    wp_enqueue_script(
        'hbr-modal-validate',
        get_template_directory_uri() . '/assets/js/header/modal-validate.js',
        [],
        time(),
        true
    );

    // BLOG SLIDER (estava FORA DO HOOK — causava erro)
    wp_enqueue_script(
        'hbr-blog-slider',
        get_template_directory_uri() . '/assets/js/blog-slider.js',
        ['keen-slider'],
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'hbr_enqueue_assets');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Gerenciar Site',
        'menu_title' => 'Gerenciar Site',
        'menu_slug'  => 'gerenciar-site',
        'capability' => 'edit_posts',
        'position'   => 21,
    ]);

    acf_add_options_sub_page([
        'page_title'  => 'Menu',
        'menu_title'  => 'Menu',
        'parent_slug' => 'gerenciar-site',
    ]);
}

require_once get_template_directory() . '/functions/enqueue-scripts.php';
