<?php
if ( ! function_exists('madeit_cpt') ) {

// Register Custom Post Type
	function madeit_cpt() {



		$labels = array(
			'name'                  => _x( 'Programma', 'Post Type General Name', 'madeit' ),
			'singular_name'         => _x( 'Programma', 'Post Type Singular Name', 'madeit' ),
			'menu_name'             => __( 'Programmi', 'madeit' ),
			'name_admin_bar'        => __( 'Programma', 'madeit' ),
			'archives'              => __( 'Archivio', 'madeit' ),
			'attributes'            => __( 'Attributi', 'madeit' ),
			'parent_item_colon'     => __( 'Parent Item:', 'madeit' ),
			'all_items'             => __( 'Tutti i Programmi', 'madeit' ),
			'add_new_item'          => __( 'Aggiungi nuovo Programma', 'madeit' ),
			'add_new'               => __( 'Aggiungi nuovo', 'madeit' ),
			'new_item'              => __( 'Nuovo Programma', 'madeit' ),
			'edit_item'             => __( 'Modifica Programma', 'madeit' ),
			'update_item'           => __( 'Aggiorna Programma', 'madeit' ),
			'view_item'             => __( 'Visualizza Programma', 'madeit' ),
			'view_items'            => __( 'Visualizza Programma', 'madeit' ),
			'search_items'          => __( 'Cerca Programma', 'madeit' ),
			'not_found'             => __( 'Non trovato', 'madeit' ),
			'not_found_in_trash'    => __( 'Non trovato nel cestino', 'madeit' ),
			'featured_image'        => __( 'Immagine in evidenza', 'madeit' ),
			'set_featured_image'    => __( 'Definisci immagine in evidenza', 'madeit' ),
			'remove_featured_image' => __( 'Rimuovi immagine', 'madeit' ),
			'use_featured_image'    => __( 'Usa come immagine in evidenza', 'madeit' ),
			'insert_into_item'      => __( 'Inserisci', 'madeit' ),
			'uploaded_to_this_item' => __( 'Caricato sul Programma', 'madeit' ),
			'items_list'            => __( 'Lista Programmi', 'madeit' ),
			'items_list_navigation' => __( 'Navigazione Programma', 'madeit' ),
			'filter_items_list'     => __( 'Primo Programma', 'madeit' ),
		);
		$args = array(
			'label'                 => __( 'Programma', 'madeit' ),
			'description'           => __( 'Programma', 'madeit' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail',  'excerpt'),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'pub    lic'                => true,
			'show_ui'               => true,
			'show_in_rest'          => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-megaphone',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
		);
		register_post_type( 'programma', $args );



		$labels = array(
			'name'                  => _x( 'Contest', 'Post Type General Name', 'madeit' ),
			'singular_name'         => _x( 'Contest', 'Post Type Singular Name', 'madeit' ),
			'menu_name'             => __( 'Contest', 'madeit' ),
			'name_admin_bar'        => __( 'Contest', 'madeit' ),
			'archives'              => __( 'Archivio', 'madeit' ),
			'attributes'            => __( 'Attributi', 'madeit' ),
			'parent_item_colon'     => __( 'Parent Item:', 'madeit' ),
			'all_items'             => __( 'Tutti i Contest', 'madeit' ),
			'add_new_item'          => __( 'Aggiungi nuovo Contest', 'madeit' ),
			'add_new'               => __( 'Aggiungi nuovo', 'madeit' ),
			'new_item'              => __( 'Nuovo Contest', 'madeit' ),
			'edit_item'             => __( 'Modifica Contest', 'madeit' ),
			'update_item'           => __( 'Aggiorna Contest', 'madeit' ),
			'view_item'             => __( 'Visualizza Contest', 'madeit' ),
			'view_items'            => __( 'Visualizza Contest', 'madeit' ),
			'search_items'          => __( 'Cerca Contest', 'madeit' ),
			'not_found'             => __( 'Non trovato', 'madeit' ),
			'not_found_in_trash'    => __( 'Non trovato nel cestino', 'madeit' ),
			'featured_image'        => __( 'Immagine in evidenza', 'madeit' ),
			'set_featured_image'    => __( 'Definisci immagine in evidenza', 'madeit' ),
			'remove_featured_image' => __( 'Rimuovi immagine', 'madeit' ),
			'use_featured_image'    => __( 'Usa come immagine in evidenza', 'madeit' ),
			'insert_into_item'      => __( 'Inserisci', 'madeit' ),
			'uploaded_to_this_item' => __( 'Caricato sul Contest', 'madeit' ),
			'items_list'            => __( 'Lista Contest', 'madeit' ),
			'items_list_navigation' => __( 'Navigazione Contest', 'madeit' ),
			'filter_items_list'     => __( 'Primo Contest', 'madeit' ),
		);
		$args = array(
			'label'                 => __( 'Contest', 'madeit' ),
			'description'           => __( 'Contest', 'madeit' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail',  'excerpt'),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_rest'          => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-clipboard',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'contest', $args );


	}
	add_action( 'init', 'madeit_cpt', 0 );

}