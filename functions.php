<?php

// Define the version as a constant so we can easily replace it throughout the theme
define( 'LESS_VERSION', 1.1 );

/*-----------------------------------------------------------------------------------*/
/* Add Rss to Head
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );


/*-----------------------------------------------------------------------------------*/
/* register main menu
/*-----------------------------------------------------------------------------------*/
/*register_nav_menus(
	array(
		'primary'	=>	__( 'Primary Menu', 'less' ),
	)
);
*/
/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function less_scripts()  {

	// theme styles
	wp_enqueue_style( 'less-style', get_template_directory_uri() . '/style.css', '10000', 'all' );

	// add fitvid
	wp_enqueue_script( 'less-fitvid', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), LESS_VERSION, true );

	// add theme scripts
	wp_enqueue_script( 'less', get_template_directory_uri() . '/js/theme.min.js', array(), LESS_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'less_scripts' );

function google_fonts() {

 $query_args = array(
   'family' => 'Arvo:400,700|PT+Sans:400,700|Raleway:400,200'
 );

 wp_register_style(
   'google-fonts',
   add_query_arg( $query_args, 'https://fonts.googleapis.com/css' ),
   array(),
   null
 );
 wp_enqueue_style( 'google-fonts' );

}
add_action( 'wp_enqueue_scripts', 'google_fonts' );



/*-----------------------------------------------------------------------------------*/
/* Get rid of Jetpack open graph tags (conflicts with other plugins)
/*-----------------------------------------------------------------------------------*/

remove_action( 'wp_head', 'jetpack_og_tags' );
