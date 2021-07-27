<?php
if ( ! function_exists('wpn_proyectos') ) {

// Register Custom Post Type proyectos
function wpn_proyectos() {

	$labels = array(
		'name'                  => _x( 'proyectos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'proyecto', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'proyectos', 'text_domain' ),
		'name_admin_bar'        => __( 'proyectos', 'text_domain' ),
		'archives'              => __( 'Archivo de proyectos', 'text_domain' ),
		'attributes'            => __( 'Atributos de proyecto', 'text_domain' ),
		'parent_item_colon'     => __( 'proyecto padre', 'text_domain' ),
		'all_items'             => __( 'Todas las proyectos', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nuevo proyecto', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nieva proyecto', 'text_domain' ),
		'edit_item'             => __( 'Editar proyecto', 'text_domain' ),
		'update_item'           => __( 'Actualizar proyecto', 'text_domain' ),
		'view_item'             => __( 'Ver proyecto', 'text_domain' ),
		'view_items'            => __( 'Ver proyecto', 'text_domain' ),
		'search_items'          => __( 'Buscar proyectos', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la basura', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el proyecto', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en esta proyecto', 'text_domain' ),
		'items_list'            => __( 'Listado de proyectos', 'text_domain' ),
		'items_list_navigation' => __( 'Lista navegable de proyectos', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro lista de proyectos', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'proyecto', 'text_domain' ),
		'description'           => __( 'Entradas de proyectos', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'excerpt', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'proyectos', $args );

}
add_action( 'init', 'wpn_proyectos', 0 );

}
if ( ! function_exists('wpn_aliados') ) {
// Register Custom Post Type aliados
function wpn_aliados() {

	$labels = array(
		'name'                  => _x( 'aliados', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'aliado', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'aliados', 'text_domain' ),
		'name_admin_bar'        => __( 'aliados', 'text_domain' ),
		'archives'              => __( 'Archivo de aliados', 'text_domain' ),
		'attributes'            => __( 'Atributos de aliado', 'text_domain' ),
		'parent_item_colon'     => __( 'aliado padre', 'text_domain' ),
		'all_items'             => __( 'Todas las aliados', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nuevo aliado', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nieva aliado', 'text_domain' ),
		'edit_item'             => __( 'Editar aliado', 'text_domain' ),
		'update_item'           => __( 'Actualizar aliado', 'text_domain' ),
		'view_item'             => __( 'Ver aliado', 'text_domain' ),
		'view_items'            => __( 'Ver aliado', 'text_domain' ),
		'search_items'          => __( 'Buscar aliados', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la basura', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el aliado', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en esta aliado', 'text_domain' ),
		'items_list'            => __( 'Listado de aliados', 'text_domain' ),
		'items_list_navigation' => __( 'Lista navegable de aliados', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro lista de aliados', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'aliado', 'text_domain' ),
		'description'           => __( 'Entradas de aliados', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'excerpt', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'aliados', $args );

}
add_action( 'init', 'wpn_aliados', 0 );

}

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );