<?php

class WC_Wfsm_Settings {

	public static $settings;

	public static function init() {

		self::$settings['restrictions'] = array(
			'create_simple_product' => esc_html__( 'Create Simple Products', 'wfsm' ),
			'create_grouped_product' => esc_html__( 'Create Grouped Products', 'wfsm' ),
			'create_external_product' => esc_html__( 'Create External Products', 'wfsm' ),
			'create_variable_product' => esc_html__( 'Create Variable Products', 'wfsm' ),
			'create_custom_product' => esc_html__( 'Create Custom Products', 'wfsm' ),
			'product_status' => esc_html__( 'Product Status', 'wfsm' ),
			'product_feature' => esc_html__( 'Feature Product', 'wfsm' ),
			'product_content' => esc_html__( 'Product Content and Description', 'wfsm' ),
			'product_featured_image' => esc_html__( 'Featured Image', 'wfsm' ),
			'product_gallery' => esc_html__( 'Product Gallery', 'wfsm' ),
			'product_downloadable' => esc_html__( 'Downloadable Products', 'wfsm' ),
			'product_virtual' => esc_html__( 'Virtual Products', 'wfsm' ),
			'product_name' => esc_html__( 'Product Name', 'wfsm' ),
			'product_slug' => esc_html__( 'Product Slug', 'wfsm' ),
			'external_product_url' => esc_html__( 'Product External URL (External/Affilate)', 'wfsm' ),
			'external_button_text' => esc_html__( 'Product External Button Text', 'wfsm' ),
			'product_sku' => esc_html__( 'Product SKU', 'wfsm' ),
			'product_taxes' => esc_html__( 'Product Tax', 'wfsm' ),
			'product_prices' => esc_html__( 'Product Prices', 'wfsm' ),
			'product_sold_individually' => esc_html__( 'Sold Individually', 'wfsm' ),
			'product_stock' => esc_html__( 'Product Stock', 'wfsm' ),
			'product_schedule_sale' => esc_html__( 'Product Schedule Sale', 'wfsm' ),
			'product_grouping' => esc_html__( 'Product Grouping', 'wfsm' ),
			'product_note' => esc_html__( 'Product Purchase Note', 'wfsm' ),
			'product_shipping' => esc_html__( 'Product Shipping', 'wfsm' ),
			'product_downloads' => esc_html__( 'Manage Downloads', 'wfsm' ),
			'product_download_settings' => esc_html__( 'Manage Download Extended Settings', 'wfsm' ),
			'product_cat' => esc_html__( 'Edit Product Categories', 'wfsm' ),
			'product_tag' => esc_html__( 'Edit Product Tags', 'wfsm' ),
			'product_attributes' => esc_html__( 'Edit Product Attributes', 'wfsm' ),
			'product_new_terms' => esc_html__( 'Add New Taxonomy Terms', 'wfsm' ),
			'variable_add_variations' => esc_html__( 'Add Variation (Variable)', 'wfsm' ),
			'variable_edit_variations' => esc_html__( 'Edit Variations (Variable)', 'wfsm' ),
			'variable_delete' => esc_html__( 'Delete Variation (Variable)', 'wfsm' ),
			'variable_product_attributes' => esc_html__( 'Edit Product Attributes (Variable)', 'wfsm' ),
			'product_clone' => esc_html__( 'Duplicate Products', 'wfsm' ),
			'product_delete' => esc_html__( 'Delete Products', 'wfsm' ),
			'backend_buttons' => esc_html__( 'Backend Buttons', 'wfsm' ),
		);

		self::$settings['vendor_groups'] = get_option( 'wc_settings_wfsm_vendor_groups', array() );
		self::$settings['custom_settings'] = get_option( 'wc_settings_wfsm_custom_settings', array() );

		foreach( self::$settings['custom_settings'] as $set ) {
			$set['name'] =isset( $set['name'] ) ? $set['name'] : esc_html__( 'Opton Name', 'wfsm' );

			$slug = sanitize_title( $set['name'] );
			self::$settings['restrictions']['wfsm_custom_' . $slug] = $set['name'];
		}

		add_action( 'admin_enqueue_scripts', __CLASS__ . '::wfsm_settings_scripts', 9 );

		add_filter( 'svx_plugins_settings', __CLASS__ . '::get_settings', 50 );

	}

	public static function wfsm_settings_scripts( $settings_tabs ) {

		if ( isset($_GET['page'], $_GET['tab']) && ( $_GET['page'] == 'wc-settings' ) && $_GET['tab'] == 'live_editor' ) {
			wp_register_script( 'wfsm-admin', Wfsm()->plugin_url() . '/assets/js/admin.js', array( 'jquery' ), Wfsm()->version(), true );
			wp_enqueue_script( array( 'wfsm-admin' ) );
		}

	}

	public static function get_settings( $plugins ) {

		$wfsm_styles = apply_filters( 'wfsm_editor_styles', array(
			'wfsm_style_default' => esc_html__( 'Default', 'wfsm' ),
			'wfsm_style_flat' => esc_html__( 'Flat', 'wfsm' ),
			'wfsm_style_dark' => esc_html__( 'Dark', 'wfsm' )
		) );

		$plugins['live_editor'] = array(
			'slug' => 'live_editor',
			'name' => esc_html__( 'Live Product Editor for WooCommerce', 'wfsm' ),
			'desc' => esc_html__( 'Settings page for Live Product Editor for WooCommerce!', 'wfsm' ),
			'link' => 'https://mihajlovicnenad.com/product/live-product-editor-woocommerce/',
			'ref' => array(
				'name' => esc_html__( 'More plugins and themes?', 'wfsm' ),
				'url' => 'https://mihajlovicnenad.com/'
			),
			'doc' => array(
				'name' => esc_html__( 'Documentation and Plugin Guide', 'wfsm' ),
				'url' => 'https://mihajlovicnenad.com/frontend-shop-manager/documentation-and-video-guide/'
			),
			'sections' => array(
				'general' => array(
					'name' => esc_html__( 'General', 'wfsm' ),
					'desc' => esc_html__( 'General Options', 'wfsm' ),
				),
				'products' => array(
					'name' => esc_html__( 'Products', 'wfsm' ),
					'desc' => esc_html__( 'Products Options', 'wfsm' ),
				),
				'vendors' => array(
					'name' => esc_html__( 'Vendors', 'wfsm' ),
					'desc' => esc_html__( 'Vendors Options', 'wfsm' ),
				),
				'custom' => array(
					'name' => esc_html__( 'Custom Options', 'wfsm' ),
					'desc' => esc_html__( 'Custom Options Settings', 'wfsm' ),
				),
				'installation' => array(
					'name' => esc_html__( 'Installation', 'wfsm' ),
					'desc' => esc_html__( 'Installation Options', 'wfsm' ),
				),
				'license' => array(
					'name' => esc_html__( 'Plugin License', 'wfsm' ),
					'desc' => esc_html__( 'Plugin License Options', 'wfsm' ),
				),
			),
			'settings' => array(

				'wc_settings_wfsm_logo' => array(
					'name' => esc_html__( 'Custom Logo', 'wfsm' ),
					'type' => 'text',
					'desc' => esc_html__( 'Use custom logo. Paste in the logo URL. Use square images (200x200px)!', 'wfsm' ),
					'id'   => 'wc_settings_wfsm_logo',
					'default' => '',
					'autoload' => false,
					'section' => 'general'
				),
				'wc_settings_wfsm_mode' => array(
					'name' => esc_html__( 'Show Logo/User', 'wfsm' ),
					'type' => 'select',
					'desc' => esc_html__( 'Select what to show in the Live Product Editor header, logo or logged in user.', 'wfsm' ),
					'id' => 'wc_settings_wfsm_mode',
					'options' => array(
						'wfsm_mode_logo' => esc_html__( 'Show Logo', 'wfsm' ),
						'wfsm_mode_user' => esc_html__( 'Show Logged User', 'wfsm' )
					),
					'default' => 'wfsm_logo',
					'autoload' => false,
					'section' => 'general'
				),
				'wc_settings_wfsm_style' => array(
					'name' => esc_html__( 'Live Editor Style', 'wfsm' ),
					'type' => 'select',
					'desc' => esc_html__( 'Select Live Product Editor style/skin.', 'wfsm' ),
					'id' => 'wc_settings_wfsm_style',
					'options' => $wfsm_styles,
					'default' => 'wfsm_style_default',
					'autoload' => false,
					'section' => 'general'
				),

				'wc_settings_wfsm_archive_action' => array(
					'name' => esc_html__( 'Shop Init Action', 'wfsm' ),
					'type' => 'text',
					'desc' => esc_html__( 'Use custom initialization action for Shop/Product Archives. Use actions initiated in your content-product.php template. Please enter action name in following format action_name:priority', 'wfsm' ) . ' ( default: woocommerce_before_shop_loop_item:0 )',
					'id' => 'wc_settings_wfsm_archive_action',
					'autoload' => true,
					'section' => 'installation'
				),
				'wc_settings_wfsm_single_action' => array(
					'name' => esc_html__( 'Single Product Init Action', 'wfsm' ),
					'type' => 'text',
					'desc' => esc_html__( 'Use custom initialization action on Single Product Pages. Use actions initiated in your content-single-product.php template. Please enter action name in following format action_name:priority', 'wfsm' ) . ' ( default: woocommerce_before_single_product_summary:5 )',
					'id' => 'wc_settings_wfsm_single_action',
					'autoload' => true,
					'section' => 'installation'
				),

				'wc_settings_wfsm_show_hidden_products' => array(
					'name' => esc_html__( 'Show Hidden Products', 'wfsm' ),
					'type' => 'checkbox',
					'desc' => esc_html__( 'Check this option to enable pending and draft products in Shop/Product Archives.', 'wfsm' ),
					'id' => 'wc_settings_wfsm_show_hidden_products',
					'default' => 'yes',
					'autoload' => true,
					'section' => 'products'
				),
				'wc_settings_wfsm_new_button' => array(
					'name' => esc_html__( 'New Product Button', 'wfsm' ),
					'type' => 'checkbox',
					'desc' => esc_html__( 'Check this option to hide the New Product Button (Create Product). Use [wfsm_new_product] shortcode if you need a custom New Product Button.', 'wfsm' ),
					'id' => 'wc_settings_wfsm_new_button',
					'default' => 'no',
					'autoload' => false,
					'section' => 'products'
				),
				'wc_settings_wfsm_create_status' => array(
					'name' => esc_html__( 'New Product Status', 'wfsm' ),
					'type' => 'select',
					'desc' => esc_html__( 'Select the default status for newly created products.', 'wfsm' ),
					'id' => 'wc_settings_wfsm_create_status',
					'options' => array(
						'publish' => esc_html__( 'Published', 'wfsm' ),
						'pending' => esc_html__( 'Pending', 'wfsm' ),
						'draft' => esc_html__( 'Draft', 'wfsm' )
					),
					'default' => 'pending',
					'autoload' => false,
					'section' => 'products'
				),
				'wc_settings_wfsm_create_virtual' => array(
					'name' => esc_html__( 'New Product is Virtual', 'wfsm' ),
					'type' => 'checkbox',
					'desc' => esc_html__( 'Check this option to set virtual by default (not shipped) for new products.', 'wfsm' ),
					'id' => 'wc_settings_wfsm_create_virtual',
					'default' => 'no',
					'autoload' => false,
					'section' => 'products'
				),
				'wc_settings_wfsm_create_downloadable' => array(
					'name' => esc_html__( 'New Product is Downloadable', 'wfsm' ),
					'type' => 'checkbox',
					'desc' => esc_html__( 'Check this option to set downloadable by default for new products.', 'wfsm' ),
					'id' => 'wc_settings_wfsm_create_downloadable',
					'default' => 'no',
					'autoload' => false,
					'section' => 'products'
				),


				'wc_settings_wfsm_custom_settings' => array(
					'name' => esc_html__( 'Custom Product Options', 'wfsm' ),
					'type' => 'list',
					'id'   => 'wc_settings_wfsm_custom_settings',
					'desc' => esc_html__( 'Click Add Custom Settings Group button to add special product options in the Live Product Editor.', 'wfsm' ),
					'autoload' => false,
					'section' => 'custom',
					'title' => esc_html__( 'Group Name', 'wfsm' ),
					'options' => 'list',
					'settings' => array(
						'name' => array(
							'name' => esc_html__( 'Group Name', 'wfsm' ),
							'type' => 'text',
							'id' => 'name',
							'desc' => esc_html__( 'Enter group name', 'wfsm' ),
							'default' => esc_html__( 'Group Name', 'wfsm' ),
						),
						'options' => array(
							'name' => esc_html__( 'Options', 'wfsm' ),
							'type' => 'list-select',
							'id' => 'options',
							'desc' => esc_html__( 'Add options to options group', 'wfsm' ),
							'default' => array(),
							'title' => esc_html__( 'Option Name', 'wfsm' ),
							'options' => 'list',
							'selects' => array(
								'input' => esc_html__( 'Input', 'wfsm' ),
								'checkbox' => esc_html__( 'Checkbox', 'wfsm' ),
								'select' => esc_html__( 'Select Box', 'wfsm' ),
								'textarea' => esc_html__( 'Textarea', 'wfsm' ),
							),
							'settings' => array(
								'input' => array(
									'name' => array(
										'name' => esc_html__( 'Name', 'wfsm' ),
										'type' => 'text',
										'id' => 'name',
										'desc' => esc_html__( 'Enter option name', 'wfsm' ),
										'default' => esc_html__( 'Option Name', 'wfsm' ),
									),
									'key' => array(
										'name' => esc_html__( 'Key', 'wfsm' ),
										'type' => 'text',
										'id' => 'key',
										'desc' => esc_html__( 'Enter database key', 'wfsm' ),
										'default' => '',
									),
									'default' => array(
										'name' => esc_html__( 'Default Value', 'wfsm' ),
										'type' => 'text',
										'id' => 'default',
										'desc' => esc_html__( 'Enter default value', 'wfsm' ),
										'default' => '',
									),
								),
								'textarea' => array(
									'name' => array(
										'name' => esc_html__( 'Name', 'wfsm' ),
										'type' => 'text',
										'id' => 'name',
										'desc' => esc_html__( 'Enter option name', 'wfsm' ),
										'default' => esc_html__( 'Option Name', 'wfsm' ),
									),
									'key' => array(
										'name' => esc_html__( 'Key', 'wfsm' ),
										'type' => 'text',
										'id' => 'key',
										'desc' => esc_html__( 'Enter database key', 'wfsm' ),
										'default' => '',
									),
									'default' => array(
										'name' => esc_html__( 'Default Value', 'wfsm' ),
										'type' => 'text',
										'id' => 'default',
										'desc' => esc_html__( 'Enter default value', 'wfsm' ),
										'default' => '',
									),
								),
								'checkbox' => array(
									'name' => array(
										'name' => esc_html__( 'Name', 'wfsm' ),
										'type' => 'text',
										'id' => 'name',
										'desc' => esc_html__( 'Enter option name', 'wfsm' ),
										'default' => esc_html__( 'Option Name', 'wfsm' ),
									),
									'key' => array(
										'name' => esc_html__( 'Key', 'wfsm' ),
										'type' => 'text',
										'id' => 'key',
										'desc' => esc_html__( 'Enter database key', 'wfsm' ),
										'default' => '',
									),
									'options' => array(
										'name' => esc_html__( 'Options', 'wfsm' ),
										'type' => 'textarea',
										'id' => 'options',
										'desc' => esc_html__( 'Enter options (JSON string)', 'wfsm' ),
										'default' => '{
	"yes" : "This option is now checked",
	"no" : "You have unchecked this option"
}',
									),
									'default' => array(
										'name' => esc_html__( 'Default Value', 'wfsm' ),
										'type' => 'text',
										'id' => 'default',
										'desc' => esc_html__( 'Enter default value', 'wfsm' ),
										'default' => '',
									),
								),
								'select' => array(
									'name' => array(
										'name' => esc_html__( 'Name', 'wfsm' ),
										'type' => 'text',
										'id' => 'name',
										'desc' => esc_html__( 'Enter option name', 'wfsm' ),
										'default' => esc_html__( 'Option Name', 'wfsm' ),
									),
									'key' => array(
										'name' => esc_html__( 'Key', 'wfsm' ),
										'type' => 'text',
										'id' => 'key',
										'desc' => esc_html__( 'Enter database key', 'wfsm' ),
										'default' => '',
									),
									'options' => array(
										'name' => esc_html__( 'Options', 'wfsm' ),
										'type' => 'textarea',
										'id' => 'options',
										'desc' => esc_html__( 'Enter options (JSON string)', 'wfsm' ),
										'default' => '{
	"apple" : "Citric Apple",
	"pear" : "Sweet Pear",
	"bannana" : "Yellow Bananna"
}',
									),
									'default' => array(
										'name' => esc_html__( 'Default Value', 'wfsm' ),
										'type' => 'text',
										'id' => 'default',
										'desc' => esc_html__( 'Enter default value', 'wfsm' ),
										'default' => '',
									),
								)
							)
						),
					),
				),

				'wc_settings_wfsm_vendor_max_products' => array(
					'name' => esc_html__( 'Products per Vendor', 'wfsm' ),
					'type' => 'number',
					'desc' => esc_html__( 'Maximum number of products vendor can create.', 'wfsm' ),
					'id' => 'wc_settings_wfsm_vendor_max_products',
					'default' => '',
					'autoload' => false,
					'section' => 'vendors'
				),
				'wc_settings_wfsm_default_permissions' => array(
					'name' => esc_html__( 'Default Vendor Restrictions', 'wfsm' ),
					'type' => 'multiselect',
					'desc' => esc_html__( 'Selected product options vendors will not be able to edit.', 'wfsm' ),
					'id' => 'wc_settings_wfsm_default_permissions',
					'options' => self::$settings['restrictions'],
					'default' => array(),
					'autoload' => false,
					'section' => 'vendors',
					'class' => 'svx-selectize'
				),
				'wc_settings_wfsm_vendor_groups' => array(
					'name' => esc_html__( 'Vendor Groups Manager', 'wfsm' ),
					'type' => 'list',
					'id' => 'wc_settings_wfsm_vendor_groups',
					'desc' => esc_html__( 'Click Add Vendor Premission Group button to customize user editing permissions for specified users.', 'wfsm' ),
					'autoload' => false,
					'section' => 'vendors',
					'title' => esc_html__( 'Group Name', 'wfsm' ),
					'options' => 'list',
					'settings' => array(
						'name' => array(
							'name' => esc_html__( 'Group Name', 'wfsm' ),
							'type' => 'text',
							'id' => 'name',
							'desc' => esc_html__( 'Enter group name', 'wfsm' ),
							'default' => esc_html__( 'Group Name', 'wfsm' ),
						),
						'users' => array(
							'name' => esc_html__( 'Select Users', 'wfsm' ),
							'type' => 'multiselect',
							'id' => 'users',
							'desc' => esc_html__( 'Select users', 'wfsm' ),
							'default' => '',
							'options' => 'ajax:users',
							'class' => 'svx-selectize'
						),
						'permissions' => array(
							'name' => esc_html__( 'Select Options', 'wfsm' ),
							'type' => 'multiselect',
							'id' => 'permissions',
							'desc' => esc_html__( 'Selected product options vendors from this group will not be able to edit', 'wfsm' ),
							'options' => self::$settings['restrictions'],
							'default' => '',
							'class' => 'svx-selectize'
						)
					)
				),

				'wc_settings_wfsm_update_code' => array(
					'name'    => esc_html__( 'Purchase Code', 'wfsm' ),
					'type'    => 'text',
					'desc'    => esc_html__( 'Enter your purchase code to get automatic updates directly in the WP Dashboard!', 'wfsm' ),
					'id'      => 'wc_settings_wfsm_update_code',
					'default'     => '',
					'autoload' => true,
					'section' => 'license'
				),


			)
		);

		foreach ( $plugins['live_editor']['settings'] as $k => $v ) {
			$plugins['live_editor']['settings'][$k]['val'] = self::stripslashes_deep( get_option( $v['id'] ) );
		}

		if ( substr_count( $plugins['live_editor']['settings']['wc_settings_wfsm_update_code']['val'], '-' ) == 4 ) {
			$plugins['live_editor']['license'] = esc_url( home_url() );
		}

		return apply_filters( 'wc_wfsm_settings', $plugins );
	}

	public static function stripslashes_deep( $value ) {
		$value = is_array($value) ? array_map( 'stripslashes_deep', $value ) : stripslashes( $value );
		return $value;
	}

}

	if ( isset($_GET['page'], $_GET['tab']) && ($_GET['page'] == 'wc-settings' ) && $_GET['tab'] == 'live_editor' ) {
		add_action( 'init', array( 'WC_Wfsm_Settings', 'init' ), 100 );
	}


?>