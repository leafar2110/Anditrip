<?php
/*
Plugin Name: CPT Colombia
Plugin URI:
Description:
Version:
Author:
Author URI:
License:
License URI:
*/
if ( ! function_exists('colombia') ) {

// Register Custom Post Type
	function colombia() {

		$labels = array(
			'name'                  => _x( 'colombia', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'colombia', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Colombia', 'text_domain' ),
			'name_admin_bar'        => __( 'Colombia', 'text_domain' ),
			'archives'              => __( 'Archivos de Colombia', 'text_domain' ),
			'attributes'            => __( 'Atributos de Colombia', 'text_domain' ),
			'parent_item_colon'     => __( 'Item de Colombia', 'text_domain' ),
			'all_items'             => __( 'Todos', 'text_domain' ),
			'add_new_item'          => __( 'Añadir Nuevo Colombia', 'text_domain' ),
			'add_new'               => __( 'Añadir Nuevo', 'text_domain' ),
			'new_item'              => __( 'Nuevo', 'text_domain' ),
			'edit_item'             => __( 'Editar', 'text_domain' ),
			'update_item'           => __( 'Actualizar', 'text_domain' ),
			'view_item'             => __( 'Ver', 'text_domain' ),
			'view_items'            => __( 'Ver Todos', 'text_domain' ),
			'search_items'          => __( 'Buscar', 'text_domain' ),
			'not_found'             => __( 'No Encontrado', 'text_domain' ),
			'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'text_domain' ),
			'featured_image'        => __( 'Imagen Destacada', 'text_domain' ),
			'set_featured_image'    => __( 'Configurar Imagen Destacada', 'text_domain' ),
			'remove_featured_image' => __( 'Borrar Imagen Destacada', 'text_domain' ),
			'use_featured_image'    => __( 'Usar como Imagen Destacada', 'text_domain' ),
			'insert_into_item'      => __( 'Insertar en Colombia', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Actualizar en Colombia', 'text_domain' ),
			'items_list'            => __( 'Listado de Colombia', 'text_domain' ),
			'items_list_navigation' => __( 'istado Navegable de Colombia', 'text_domain' ),
			'filter_items_list'     => __( 'Filtro de Lista de Colombia', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'colombia', 'text_domain' ),
			'description'           => __( 'colombia', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title','thumbnail','editor'),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-admin-site',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'colombia', $args );

	}
	add_action( 'init', 'colombia', 0 );

}
