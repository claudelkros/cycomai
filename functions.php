<?php
/**
 * Genese files includes
 *
 * The $includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @package  WordPress
 * @subpackage Genese
 * @since 1.0
 * @author Mystro Ken <mystroken@gmail.com>
 */

$includes = array(
	'app/inc/class-genese-wrapping.php', // Theme wrapper class.
	'app/inc/helpers.php',               // Helper functions.
	'app/inc/setup.php',                 // Theme setup.
	'app/inc/template-tags.php',         // Custom template tags functions.
);

foreach ( $includes as $file ) {

	$filepath = locate_template( $file );

	if ( ! $filepath ) {
		/* translators: %s: Failed included file. */
		trigger_error( sprintf( esc_html_x( 'Error locating %s for inclusion', 'genese' ), $file ), E_USER_ERROR );
	}

	require_once $filepath;
}

unset( $file, $filepath );
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );


function wpm_Ongoing_Projects() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Ongoing Projects', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Ongoing Projects', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Ongoing Projects'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les Ongoing Projects'),
		'view_item'           => __( 'Voir les Ongoing Projects'),
		'add_new_item'        => __( 'Ajouter une nouvelle série TV'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la Ongoing Projects'),
		'update_item'         => __( 'Modifier la Ongoing Projects'),
		'search_items'        => __( 'Rechercher une Ongoing Projects'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Ongoing Projects'),
		'description'         => __( 'Tous sur Ongoing Projects'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'ongoing-projects'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'Ongoing Projects', $args );

}

add_action( 'init', 'wpm_Ongoing_Projects', 0 );



function wpm_Members() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Members', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Members', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Members'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les Members'),
		'view_item'           => __( 'Voir les Members'),
		'add_new_item'        => __( 'Ajouter une nouvelle Membre'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la Members'),
		'update_item'         => __( 'Modifier la Members'),
		'search_items'        => __( 'Rechercher un Members'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Members'),
		'description'         => __( 'Tous sur Members'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'Members'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'Members', $args );

}

add_action( 'init', 'wpm_Members', 0 );




function wpm_published_article() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Published Articles', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Published Articles', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Published Articles'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les Published Articles'),
		'view_item'           => __( 'Voir les Published Articles'),
		'add_new_item'        => __( 'Ajouter une nouvelle série TV'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la Published Articles'),
		'update_item'         => __( 'Modifier la Published Articles'),
		'search_items'        => __( 'Rechercher une Published Articles'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Published Articles'),
		'description'         => __( 'Tous sur Published Articles'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'published-articles'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'Published Articles', $args );

}

add_action( 'init', 'wpm_published_article', 0 );

add_theme_support( 'post-thumbnails' );