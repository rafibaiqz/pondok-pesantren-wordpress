<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bizora
 * @since 1.0.0
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */

if (! function_exists('bizora_support')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */

	function bizora_support()
	{

		add_editor_style(get_template_directory_uri() . '/assets/css/editor.css');

		load_theme_textdomain('bizora', get_template_directory() . '/languages');

		// Add support for block styles.
		add_theme_support('wp-block-styles');

		// Add support for post thumbnails
		add_theme_support('post-thumbnails');
	}

endif;
add_action('after_setup_theme', 'bizora_support');

function bizora_styles()
{
	wp_enqueue_style(
		'bizora-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style(
		'bizora-font-awesome',
		get_template_directory_uri() . '/assets/css/font-awesome/css/all.css',
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'bizora_styles');

// admin style
function bizora_admin_styles()
{
	wp_enqueue_style(
		'bizora-admin-style',
		get_template_directory_uri() . '/assets/css/theme-info.css',
		[],
		wp_get_theme()->get('Version')
	);
}
add_action('admin_enqueue_scripts', 'bizora_admin_styles');

// enqueue dashicons
add_action('enqueue_block_assets', function (): void {
	wp_enqueue_style('dashicons');
});

function bizora_excerpt_length($length)
{

	$excerpt_length = 20;
	if (is_admin()) return $length;
	return $excerpt_length;
}
add_filter('excerpt_length', 'bizora_excerpt_length');


// add block patterns
require get_template_directory() . '/inc/block-patterns.php';


// admin Info
require get_template_directory() . '/class/admin-info.php';

/**
 * Register block styles.
 */

if (! function_exists('bizora_block_styles')) :
	/**
	 * Register custom block styles
	 *
	 * @since bizorae
	 * @return void
	 */
	function bizora_block_styles()
	{

		register_block_style(
			'core/paragraph',
			array(
				'name'         => 'admin-icon',
				'label'        => __('Admin Icon', 'bizora'),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-admin-icon:before {
					content: "\f110";
					font-family: "dashicons";
				}
				.is-style-admin-icon span{
					display: none;
				}',
			)
		);
	}
endif;

add_action('init', 'bizora_block_styles');
