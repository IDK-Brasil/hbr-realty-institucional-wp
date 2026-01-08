<?php

function create_enterprises_post_type()
{
    // Registro do Custom Post Type
    register_post_type('enterprises', [
        'labels'       => [
            'name'               => 'Empreendimentos',
            'singular_name'      => 'Empreendimento',
            'menu_name'          => 'Empreendimentos',
            'name_admin_bar'     => 'Empreendimentos',
            'add_new'            => 'Adicionar novo Empreendimento',
            'add_new_item'       => 'Adicionar novo Empreendimento',
            'new_item'           => 'Novo Empreendimento',
            'edit_item'          => 'Editar Empreendimento',
            'view_item'          => 'Ver Empreendimento',
            'all_items'          => 'Todos Empreendimentos',
            'search_items'       => 'Buscar Empreendimento',
            'not_found'          => 'Nenhum Empreendimento encontrado.',
            'not_found_in_trash' => 'Não foi encontrado nenhum Empreendimento na lixeira.',
        ],
        'public'       => true,
        'has_archive'  => true,
        'rewrite'      => ['slug' => 'empreendimento'],
        'supports'     => ['title'],
        'show_in_rest' => true,
        'menu_icon'    => 'dashicons-building',
    ]);
}

add_action('init', 'create_enterprises_post_type');



function create_units_post_type()
{
    // Registro do Custom Post Type
    register_post_type('units', [
        'labels'       => [
            'name'               => 'Unidades Comvem',
            'singular_name'      => 'Unidade ComVem',
            'menu_name'          => 'Unidades Comvem',
            'name_admin_bar'     => 'Unidades Comvem',
            'add_new'            => 'Adicionar nova Unidade ComVem',
            'add_new_item'       => 'Adicionar nova Unidade ComVem',
            'new_item'           => 'Nova Unidade ComVem',
            'edit_item'          => 'Editar Unidade ComVem',
            'view_item'          => 'Ver Unidade ComVem',
            'all_items'          => 'Todas Unidades Comvem',
            'search_items'       => 'Buscar Unidade ComVem',
            'not_found'          => 'Nenhuma Unidade encontrada.',
            'not_found_in_trash' => 'Não foi encontrada nenhuma Unidade na lixeira.',
        ],
        'public'       => true,
        'has_archive'  => true,
        'rewrite'      => ['slug' => 'unidade-comvem'],
        'supports'     => ['title'],
        'show_in_rest' => true,
        'menu_icon'    => 'dashicons-products',
    ]);
}

add_action('init', 'create_units_post_type');
