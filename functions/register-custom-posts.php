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
            'add_new'            => 'Adicionar novo empreendimento',
            'add_new_item'       => 'Adicionar novo empreendimento',
            'new_item'           => 'Novo empreendimento',
            'edit_item'          => 'Editar empreendimento',
            'view_item'          => 'Ver empreendimento',
            'all_items'          => 'Todos empreendimentos',
            'search_items'       => 'Buscar empreendimento',
            'not_found'          => 'Nenhum empreendimento encontrado.',
            'not_found_in_trash' => 'Não foi encontrado nenhum empreendimento na lixeira.',
        ],
        'public'       => true,
        'has_archive'  => true,
        'rewrite'      => ['slug' => 'empreendimento'],
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt', 'comments'],
        'show_in_rest' => true,
        'menu_icon'    => 'dashicons-welcome-add-page',
    ]);

    register_taxonomy(
        'enterprise_category', // slug da taxonomia
        'enterprises',         // post type associado
        [
            'labels'       => [
                'name'              => 'Categorias de Empreendimentos',
                'singular_name'     => 'Categoria de Empreendimento',
                'search_items'      => 'Buscar Categorias',
                'all_items'         => 'Todas Categorias',
                'parent_item'       => 'Categoria Pai',
                'parent_item_colon' => 'Categoria Pai:',
                'edit_item'         => 'Editar Categoria',
                'update_item'       => 'Atualizar Categoria',
                'add_new_item'      => 'Adicionar Nova Categoria',
                'new_item_name'     => 'Novo nome da Categoria',
                'menu_name'         => 'Categorias de Empreendimentos',
            ],
            'hierarchical' => true,
            'show_in_rest' => true, // habilita no editor Gutenberg
            'rewrite'      => ['slug' => 'categoria-empreendimento'],
        ]
    );
}

add_action('init', 'create_enterprises_post_type');
