<?php
if (function_exists('acf_add_options_page')) {

    // página principal
    acf_add_options_page([
        'page_title' => 'Gerenciar Site',
        'menu_title' => 'Gerenciar Site',
        'menu_slug'  => 'gerenciar-site',
        'capability' => 'edit_posts',
        'position'   => 20,
        'icon_url'   => 'dashicons-admin-generic',
    ]);

    // sub páginas
    acf_add_options_sub_page(['title' => 'Geral', 'parent_slug' => 'gerenciar-site']);
    acf_add_options_sub_page(['title' => 'Menu', 'parent_slug' => 'gerenciar-site']);
    acf_add_options_sub_page(['title' => 'Footer', 'parent_slug' => 'gerenciar-site']);
    acf_add_options_sub_page(['title' => 'Redes Sociais', 'parent_slug' => 'gerenciar-site']);
    acf_add_options_sub_page(['title' => 'Endereços', 'parent_slug' => 'gerenciar-site']);
    acf_add_options_sub_page(['title' => 'Contatos', 'parent_slug' => 'gerenciar-site']);
    acf_add_options_sub_page(['title' => 'Cookies', 'parent_slug' => 'gerenciar-site']);
}
