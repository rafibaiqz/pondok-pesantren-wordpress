<?php
/**
 * Plugin Name: Gmap Block
 * Description: A custom Gutenberg block to display google map in Gutenberg editor.
 * Author: Zakaria Binsaifullah
 * Version: 1.0.5
 * Text Domain: gmap-block
 * Domain Path: /languages
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package GmapBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! class_exists( 'Gmap_Block ' ) ) {

	/**
	 * Gmap Blocks Final Class
	 *
	 * @since 1.0.0
	 * @package GmapBlock
	 */
	final class GmapBlock {

		// Plugin Version 
		const VERSION = '1.0.5';

		/**
		 * Gmap Blocks Instance
		 *
		 * @since 1.0.0
		 */
		private static $instance;

		/**
		 * Gmap Blocks Constructor
		 *
		 * @since 1.0.0
		 * @return void
		 */
		private function __construct() {
			$this->constants();
			$this->init();
			$this->includes();
		}

		/**
		 * Gmap Blocks Define Constants
		 *
		 * @since 1.0.0
		 * @return void
		 */
		public function constants() {
			$this->define_constant( 'GMAP_VERSION', self::VERSION );
			$this->define_constant( 'GMAP__FILE__', __FILE__ );
			$this->define_constant( 'GMAP_URL_FILE', plugin_dir_url( __FILE__ ) );
			$this->define_constant( 'GMAP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
			$this->define_constant( 'GMAP_URL', plugins_url( '/', plugin_dir_path( __FILE__ ) ) );
		}

		private function define_constant( $name, $value ) {
			if ( ! defined( $name ) ) {
				define( $name, $value );
			}
		}

		/**
		 * Gmap Blocks Init
		 *
		 * @since 1.0.0
		 * @return void
		 */
		public function init() {
			add_action( 'init', array( $this, 'load_textdomain' ) );
		}

		/**
		 * Gmap Blocks Load Text Domain
		 *
		 * @since 1.0.0
		 * @return void
		 */
		public function load_textdomain() {
			load_plugin_textdomain( 'gmap-block', false, basename( GMAP_PLUGIN_DIR ) . '/languages' );
		}

		/**
		 * Gmap Blocks Instance
		 *
		 * @since 1.0.0
		 * @return GmapBlock
		 */
		public static function get_instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		/**
		 * Gmap Blocks Includes Files
		 *
		 * @since 1.0.0
		 * @return void
		 */
		private function includes() {
			require_once trailingslashit( GMAP_PLUGIN_DIR ) . 'sdk/sdk.php';
			require_once trailingslashit( GMAP_PLUGIN_DIR ) . 'inc/gmap-block-loader.php';
		}
	}

}

/**
 * Gmap Blocks
 *
 * @since 1.0.0
 * @return GmapBlock
 */
function gmap_blocks() {
	return GmapBlock::get_instance();
}

/**
 * Initialize Gmap Blocks
 * 
 * @since 1.0.0
 */
gmap_blocks(); // Initialize the Gmap Blocks class.
