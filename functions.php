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

function wpm_Enseignant() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Enseignant', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Enseignant', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Enseignant'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les Enseignants'),
		'view_item'           => __( 'Voir les Enseignant'),
		'add_new_item'        => __( 'Ajouter une nouvelle Membre'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la Enseignant'),
		'update_item'         => __( 'Modifier la Enseignant'),
		'search_items'        => __( 'Rechercher un Enseignant'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Enseignant'),
		'description'         => __( 'Tous sur Enseignant'),
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
		'rewrite'			  => array( 'slug' => 'Enseignant'),
		'menu_position'       => 26 	

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'Enseignant', $args );

}

add_action( 'init', 'wpm_Enseignant', 0 );



function wpm_Phd_Student() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Phd_Student', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Phd_Student', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Phd Students'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les Phd Student'),
		'view_item'           => __( 'Voir les Phd Student'),
		'add_new_item'        => __( 'Ajouter un nouvelle Phd_Student'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la Phd_Student'),
		'update_item'         => __( 'Modifier la Phd_Student'),
		'search_items'        => __( 'Rechercher un Phd_Student'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Phd_Student'),
		'description'         => __( 'Tous sur Phd Student'),
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
		'rewrite'			  => array( 'slug' => 'Phd_Student'),
		'menu_position'       => 50

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'Phd_Student', $args );

}

add_action( 'init', 'wpm_Phd_Student', 0 );



function wpm_Masters_Student() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Masters_Student', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Masters_Student', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Masters Student'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les Masters Student'),
		'view_item'           => __( 'Voir les Masters Student'),
		'add_new_item'        => __( 'Ajouter un nouvelle Masters Student'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer le Master Student'),
		'update_item'         => __( 'Modifier le Master Student'),
		'search_items'        => __( 'Rechercher un Master Student'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Masters_Student'),
		'description'         => __( 'Tous sur Masters Student'),
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
		'rewrite'			  => array( 'slug' => 'Masters_Student'),
		'menu_position'       => 55

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'Masters_Student', $args );

}

add_action( 'init', 'wpm_Masters_Student', 0 );
