<?php
/*
Plugin Name: WooCommerce Frontend Shop Manager
Plugin URI: http://www.mihajlovicnenad.com/woocommerce-frontend-shop-manager
Description:  WooCommerce Frontend Shop Manager! - mihajlovicnenad.com
Author: Mihajlovic Nenad
Version: 4.0.2
Author URI: http://www.mihajlovicnenad.com
Text Domain: wfsm
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$GLOBALS['svx'] = isset( $GLOBALS['svx'] ) && version_compare( $GLOBALS['svx'], '1.0.3') == 1 ? $GLOBALS['svx'] : '1.0.3';

if ( !class_exists( 'WC_Frontnend_Shop_Manager_Init' ) ) :

	final class WC_Frontnend_Shop_Manager_Init {

		public static $version = '4.0.2';

		protected static $_instance = null;

		public static function instance() {

			if ( is_null( self::$_instance ) ) {
				self::$_instance = new self();
			}
			return self::$_instance;
		}

		public function __construct() {
			do_action( 'wfsm_loading' );

			$this->includes();

			$this->init_hooks();

			do_action( 'wfsm_loaded' );
		}

		private function init_hooks() {
			add_action( 'init', array( $this, 'init' ), 0 );
			add_action( 'init', array( $this, 'load_svx' ), 100 );
			add_action( 'plugins_loaded', array( $this, 'fix_svx' ), 100 );
		}

		public function fix_svx() {
			include_once ( 'includes/svx-settings/svx-fixoptions.php' );
		}

		public function load_svx() {
			if ( $this->is_request( 'admin' ) ) {
				include_once ( 'includes/svx-settings/svx-settings.php' );
			}
		}

		private function is_request( $type ) {
			switch ( $type ) {
				case 'admin' :
					return is_admin();
				case 'ajax' :
					return defined( 'DOING_AJAX' );
				case 'cron' :
					return defined( 'DOING_CRON' );
				case 'frontend' :
					return ( ! is_admin() || defined( 'DOING_AJAX' ) ) && ! defined( 'DOING_CRON' );
			}
		}

		public function includes() {

			if ( $this->is_request( 'admin' ) ) {

				include_once ( 'includes/wfsm-settings.php' );

				$purchase_code = get_option( 'wc_settings_wfsm_update_code', '' );
				if ( $purchase_code ) {
					require 'includes/update/plugin-update-checker.php';
					$pf_check = PucFactory::buildUpdateChecker(
						'http://mihajlovicnenad.com/envato/get_json.php?p=10694235&k=' . $purchase_code,
						__FILE__
					);
				}

			}

			if ( $this->is_request( 'frontend' ) ) {
				$this->frontend_includes();
			}

		}

		public function frontend_includes() {
			include_once( 'includes/wfsm-frontend.php' );
		}

		public function init() {

			do_action( 'before_wfsm_init' );

			$this->load_plugin_textdomain();

			do_action( 'after_wfsm_init' );

		}

		public function load_plugin_textdomain() {

			$domain = 'wfsm';
			$dir = untrailingslashit( WP_LANG_DIR );
			$locale = apply_filters( 'plugin_locale', get_locale(), $domain );

			if ( $loaded = load_textdomain( $domain, $dir . '/plugins/' . $domain . '-' . $locale . '.mo' ) ) {
				return $loaded;
			}
			else {
				load_plugin_textdomain( $domain, FALSE, basename( dirname( __FILE__ ) ) . '/lang/' );
			}

		}

		public function plugin_url() {
			return untrailingslashit( plugins_url( '/', __FILE__ ) );
		}

		public function plugin_path() {
			return untrailingslashit( plugin_dir_path( __FILE__ ) );
		}

		public function plugin_basename() {
			return untrailingslashit( plugin_basename( __FILE__ ) );
		}

		public function ajax_url() {
			return admin_url( 'admin-ajax.php', 'relative' );
		}

		public function version() {
			return self::$version;
		}

		public function add_settings( $settings ) {

			if ( class_exists( 'WC_Frontnend_Shop_Manager' ) ) {

				if ( !empty( $settings ) && is_array( $settings ) ) {

					$opt_array = array();

					$i = 0;

					foreach( $settings as $setting ) {

						if ( !isset( $setting['name'] ) || !isset( $setting['settings'] ) ) {
							continue;
						}

						if ( is_array( $setting['settings'] ) ) {

							$opt_array[$i] = array(
								'name' => $setting['name']
							);

							foreach( $setting['settings'] as $option ) {
								if ( !isset( $option['key'] ) ) {
									continue;
								}

								$opt_array[$i]['key'][] = $option['key'];
								$opt_array[$i]['type'][] = isset( $option['type'] ) ? $option['type'] : 'input';
								$opt_array[$i]['setting-name'][] = isset( $option['setting-name'] ) ? $option['setting-name'] : esc_html__( 'Option', 'wfsm' );
								$opt_array[$i]['options'][] = isset( $option['options'] ) ? $option['options'] : '';
								$opt_array[$i]['default'][] = isset( $option['default'] ) ? $option['default'] : '';
							}

						}
						$i++;

					}

					if ( !empty( $opt_array ) ) {
						if ( class_exists( 'WC_Frontnend_Shop_Manager' ) ) {
							WC_Frontnend_Shop_Manager::$settings['custom_settings'] = array_merge( WC_Frontnend_Shop_Manager::$settings['custom_settings'], $opt_array );
						}
						if ( class_exists( 'WC_Wfsm_Settings' ) ) {
							WC_Wfsm_Settings:$settings['custom_settings'] = array_merge( WC_Wfsm_Settings::$settings['custom_settings'], $opt_array );
						}
					}

				}

			}

			return;

		}

		public static function version_check( $version = '3.0.0' ) {
			if ( class_exists( 'WooCommerce' ) ) {
				global $woocommerce;
				if( version_compare( $woocommerce->version, $version, ">=" ) ) {
					return true;
				}
			}
			return false;
		}


	}

	add_filter( 'svx_plugins', 'svx_live_editor_add_plugin', 40 );
	add_filter( 'svx_plugins_settings_short', 'svx_live_editor_add_short' );

	function svx_live_editor_add_plugin( $plugins ) {

		$plugins['live_editor'] = array(
			'slug' => 'live_editor',
			'name' => esc_html__( 'Live Editor', 'wfsm' )
		);

		return $plugins;

	}
	function svx_live_editor_add_short( $plugins ) {
		$plugins['live_editor'] = array(
			'slug' => 'live_editor',
			'settings' => array(
				'wc_settings_wfsm_logo' => array(
					'autoload' => false,
				),
				'wc_settings_wfsm_mode' => array(
					'autoload' => false,
				),
				'wc_settings_wfsm_style' => array(
					'autoload' => false,
				),
				'wc_settings_wfsm_archive_action' => array(
					'autoload' => true,
				),
				'wc_settings_wfsm_single_action' => array(
					'autoload' => true,
				),
				'wc_settings_wfsm_update_code' => array(
					'autoload' => true,
				),
				'wc_settings_wfsm_show_hidden_products' => array(
					'autoload' => true,
				),
				'wc_settings_wfsm_new_button' => array(
					'autoload' => false,
				),
				'wc_settings_wfsm_create_status' => array(
					'autoload' => false,
				),
				'wc_settings_wfsm_create_virtual' => array(
					'autoload' => false,
				),
				'wc_settings_wfsm_create_downloadable' => array(
					'autoload' => false,
				),
				'wfsm_settings_manager' => array(
					'autoload' => false,
				),
				'wc_settings_wfsm_vendor_max_products' => array(
					'autoload' => false,
				),
				'wc_settings_wfsm_default_permissions' => array(
					'autoload' => false,
				),
				'wc_settings_wfsm_custom_settings' => array(
					'autoload' => false,
				),
				'wc_settings_wfsm_vendor_groups' => array(
					'autoload' => false,
				),
			)
		);

		return $plugins;
	}

	function Wfsm() {
		return WC_Frontnend_Shop_Manager_Init::instance();
	}

	WC_Frontnend_Shop_Manager_Init::instance();

endif;

?>