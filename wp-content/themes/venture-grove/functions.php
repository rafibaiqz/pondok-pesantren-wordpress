<?php


/**
 * Venture Grove functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @subpackage Venture Grove
 * @since Venture Grove 1.0
 */

 function venture_grove_block_assets(){
    // Enqueue theme stylesheet for the front-end.
	wp_enqueue_style( 'venture-grove-fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '5.15.3' );
	wp_enqueue_style( 'venture-grove-animatecss', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style( 'venture-grove-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script('venture-grove-wow-script', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'));
	wp_enqueue_script('venture-grove-jquery-sticky', get_template_directory_uri() . '/assets/js/jquery-sticky.js', array('jquery') );  
	wp_enqueue_script('venture-grove-main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
  
}

add_action('enqueue_block_assets', 'venture_grove_block_assets');

// register own theme pattern

function venture_grove_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'venture-grove' => array( 'label' => __( 'Venture Grove', 'venture-grove' ) )
	);

	$block_pattern_categories = apply_filters( 'venture_grove_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}

add_action( 'init', 'venture_grove_register_pattern_category');

// Admin Info
require get_template_directory() . '/class/admin-info.php';

//recommend plugins
require get_theme_file_path( '/inc/tgm-plugin/tgmpa-hook.php' );