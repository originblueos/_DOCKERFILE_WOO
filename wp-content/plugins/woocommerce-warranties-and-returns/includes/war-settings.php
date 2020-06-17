<?php

class WC_War_Settings {

	public static function init() {
		add_filter( 'svx_plugins_settings', __CLASS__ . '::get_settings', 50 );
	}

	public static function get_settings( $plugins ) {

		$presets = get_terms( 'wcwar_warranty_pre', array('hide_empty' => false) );

		$ready_presets = array(
			'' => esc_html__( 'None', 'wcwar' )
		);

		foreach ( $presets as $preset ) {
			$ready_presets[$preset->term_id] = $preset->name;
		}

		$pages = get_pages();

		$ready_pages = array(
			'' => esc_html__( 'None', 'wcwar' )
		);

		foreach ( $pages as $page ) {
			$ready_pages[$page->ID] = $page->post_title;
		}

		$plugins['warranties_and_returns'] = array(
			'slug' => 'warranties_and_returns',
			'name' => esc_html__( 'Warranties and Returns for WooCommerce', 'wcwar' ),
			'desc' => esc_html__( 'Settings page for Warranties and Returns for WooCommerce!', 'wcwar' ),
			'link' => 'https://mihajlovicnenad.com/product/warranties-returns-woocommerce/',
			'ref' => array(
				'name' => esc_html__( 'More plugins and themes?', 'wcwar' ),
				'url' => 'https://mihajlovicnenad.com/'
			),
			'doc' => array(
				'name' => esc_html__( 'Documentation and Plugin Guide', 'wcwar' ),
				'url' => 'https://mihajlovicnenad.com/woocommerce-warranties-and-returns/documentation-and-video-guide/'
			),
			'sections' => array(
				'warranties' => array(
					'name' => esc_html__( 'Warranties', 'wcwar' ),
					'desc' => esc_html__( 'Warranties Options', 'wcwar' ),
				),
				'returns' => array(
					'name' => esc_html__( 'Returns', 'wcwar' ),
					'desc' => esc_html__( 'Returns Options', 'wcwar' ),
				),
				'email' => array(
					'name' => esc_html__( 'E-Mail', 'wcwar' ),
					'desc' => esc_html__( 'E-Mail Options', 'wcwar' ),
				),
				'installation' => array(
					'name' => esc_html__( 'Installation', 'wcwar' ),
					'desc' => esc_html__( 'Installation Options', 'wcwar' ),
				),
				'license' => array(
					'name' => esc_html__( 'Plugin License', 'wcwar' ),
					'desc' => esc_html__( 'Plugin License Options', 'wcwar' ),
				),
			),
			'settings' => array(

				'war_settings_page' => array(
					'name'    => esc_html__( 'Request Page', 'wcwar' ),
					'type'    => 'select',
					'desc'    => esc_html__( 'Please select the page for requesting warranties. Check Documentation FAQ if the page was not created automatically.', 'wcwar' ),
					'id'      => 'war_settings_page',
					'options' => $ready_pages,
					'default' => '',
					'autoload' => true,
					'section' => 'installation'
				),
				'wcwar_single_action' => array(
					'name'    => esc_html__( 'Init Action', 'wcwar' ),
					'type'    => 'text',
					'desc'    => esc_html__( 'Change default plugin initialization action on single product pages. Use actions done in your content-single-product.php file. Please enter action in the following format action_name:priority.', 'wcwar' ) . ' ( default: woocommerce_before_add_to_cart_form )',
					'id'      => 'wcwar_single_action',
					'default' => '',
					'autoload' => true,
					'section' => 'installation'
				),
				'wcwar_force_scripts' => array(
					'name' => esc_html__( 'Plugin Scripts', 'wcwar' ),
					'type' => 'checkbox',
					'desc' => esc_html__( 'Check this option to enable plugin scripts in all pages. This option fixes issues in Quick Views.', 'wcwar' ),
					'id'   => 'wcwar_force_scripts',
					'default' => 'no',
					'autoload' => true,
					'section' => 'installation'
				),
				'wcwar_single_mode' => array(
					'name'    => esc_html__( 'Customer Request Display Mode', 'wcwar' ),
					'type'    => 'select',
					'desc'    => esc_html__( 'Select display mode for the Single Warranty/Return Customer Post.', 'wcwar' ),
					'id'      => 'wcwar_single_mode',
					'default' => 'new',
					'options' => array(
						'old' => 'Old - WooThemes, Basic Themes',
						'new' => 'New - Most Supported in Premium Themes'
					),
					'autoload' => true,
					'section' => 'installation'
				),
				'wcwar_single_titles' => array(
					'name'    => esc_html__( 'Heading Size', 'wcwar' ),
					'type'    => 'select',
					'desc'    => esc_html__( 'Select heading size of warranty titles on single product pages.', 'wcwar' ),
					'id'      => 'wcwar_single_titles',
					'default' => 'h4',
					'options' => array(
						'h2' => 'H2',
						'h3' => 'H3',
						'h4' => 'H4',
						'h5' => 'H5',
						'h6' => 'H6'
					),
					'autoload' => false,
					'section' => 'installation'
				),


				'wcwar_default_warranty' => array(
					'name'    => esc_html__( 'Default Warranty', 'wcwar' ),
					'type'    => 'select',
					'desc'    => esc_html__( 'Products without warranties can have a default warranty. Please select warranty preset.', 'wcwar' ),
					'id'      => 'wcwar_default_warranty',
					'default' => '',
					'options' => $ready_presets,
					'autoload' => false,
					'section' => 'warranties'
				),
				'wcwar_default_post' => array(
					'name'    => esc_html__( 'Warranty Status', 'wcwar' ),
					'type'    => 'select',
					'desc'    => esc_html__( 'Select status for the newly submitted warranty request posts.', 'wcwar' ),
					'id'      => 'wcwar_default_post',
					'default' => 'pending',
					'options' => array(
						'draft' => esc_html__( 'Draft', 'wcwar' ),
						'publish' => esc_html__( 'Published', 'wcwar' ),
						'pending' => esc_html__( 'Pending', 'wcwar' )
					),
					'autoload' => false,
					'section' => 'warranties'
				),
				'wcwar_enable_multi_requests' => array(
					'name'    => esc_html__( 'Multi Requests', 'wcwar' ),
					'type'    => 'checkbox',
					'desc'    => esc_html__( 'Check this option to enable multi requests in the defined warranty period. New requests will available upon completing the previous requests.', 'wcwar' ),
					'id'      => 'wcwar_enable_multi_requests',
					'default' => 'no',
					'autoload' => false,
					'section' => 'warranties'
				),
				'wcwar_enable_guest_requests' => array(
					'name'    => esc_html__( 'Guest Requests', 'wcwar' ),
					'type'    => 'checkbox',
					'desc'    => esc_html__( 'Guests can access warranties using their Order ID and an E-Mail address to confirm their identity. Check this option if you want to allow guests to request warranties and returns.', 'wcwar' ),
					'id'      => 'wcwar_enable_guest_requests',
					'default' => 'no',
					'autoload' => false,
					'section' => 'warranties'
				),
				'wcwar_enable_admin_requests' => array(
					'name'    => esc_html__( 'Admin Warranties', 'wcwar' ),
					'type'    => 'checkbox',
					'desc'    => esc_html__( 'If checked admins will have the ability to create warranty requests for items without warranties.', 'wcwar' ),
					'id'      => 'wcwar_enable_admin_requests',
					'default' => 'yes',
					'autoload' => false,
					'section' => 'warranties'
				),
				'wcwar_form' => array(
					'name'    => esc_html__( 'Warranty Form', 'wcwar' ),
					'type'    => 'hidden',
					'desc'    => esc_html__( 'Use the manager to create a warranty form.', 'wcwar' ),
					'id'      => 'wcwar_form',
					'default' => '',
					'autoload' => false,
					'section' => 'warranties'
				),

				'wcwar_email_disable' => array(
					'name'    => esc_html__( 'Show/Hide Warranty Info', 'wcwar' ),
					'type'    => 'checkbox',
					'desc'    => esc_html__( 'Check this option to hide warranty information in WooCommerce Order E-Mails notifications.', 'wcwar' ),
					'id'      => 'wcwar_email_disable',
					'default' => 'no',
					'autoload' => true,
					'section' => 'email'
				),
				'wcwar_email_name' => array(
					'name'    => esc_html__( 'From Name', 'wcwar' ),
					'type'    => 'text',
					'desc'    => esc_html__( 'Enter email From Name: which should appear in quick emails.', 'wcwar' ),
					'id'      => 'wcwar_email_name',
					'default' => get_bloginfo( 'name' ),
					'autoload' => false,
					'section' => 'email'
				),
				'wcwar_email_address' => array(
					'name'    => esc_html__( 'Reply To', 'wcwar' ),
					'type'    => 'text',
					'desc'    => esc_html__( 'Enter email address that will appear as a Reply To: address in quick emails.', 'wcwar' ),
					'id'      => 'wcwar_email_address',
					'default' => get_bloginfo( 'admin_email' ),
					'autoload' => false,
					'section' => 'email'
				),
				'wcwar_email_bcc' => array(
					'name'    => esc_html__( 'BCC Copies', 'wcwar' ),
					'type'    => 'text',
					'desc'    => esc_html__( 'Enter E-Mail addresses separated by comma to send BCC copies of quick emails.', 'wcwar' ),
					'id'      => 'wcwar_email_bcc',
					'default' => '',
					'autoload' => false,
					'section' => 'email'
				),


				'wcwar_enable_returns' => array(
					'name'    => esc_html__( 'Enable Returns', 'wcwar' ),
					'type'    => 'checkbox',
					'desc'    => esc_html__( 'This option will enable the in store returns. Set your return period in which the items can be sent back by customers with a refund.', 'wcwar' ),
					'id'      => 'wcwar_enable_returns',
					'default' => 'no',
					'autoload' => false,
					'section' => 'returns'
				),
				'wcwar_returns_period' => array(
					'name' => esc_html__( 'Return Limit', 'wcwar' ),
					'type' => 'number',
					'desc' => esc_html__( 'Number of days for returning items upon order completition. If 0 is set, items will have a lifetime return period.', 'wcwar' ),
					'id'   => 'wcwar_returns_period',
					'default' => 0,
					'custom_attributes' => array(
						'min' 	=> 0,
						'max' 	=> 1826,
						'step' 	=> 1
					),
					'autoload' => false,
					'section' => 'returns'
				),
				'wcwar_returns_no_warranty' => array(
					'name'    => esc_html__( 'Returns Without a Warranty', 'wcwar' ),
					'type'    => 'checkbox',
					'desc'    => esc_html__( 'If checked, returns will be available for items that have no warranty.', 'wcwar' ),
					'id'      => 'wcwar_returns_no_warranty',
					'default' => 'no',
					'autoload' => false,
					'section' => 'returns'
				),

				'wcwar_registration_key' => array(
					'name'    => esc_html__( 'Purchase Code', 'wcwar' ),
					'type'    => 'text',
					'desc'    => esc_html__( 'Enter your purchase code to get automatic updates directly in the WP Dashboard!', 'wcwar' ),
					'id'      => 'wcwar_registration_key',
					'default' => '',
					'autoload' => true,
					'section' => 'license'
				),

			)
		);

		foreach ( $plugins['warranties_and_returns']['settings'] as $k => $v ) {
			$plugins['warranties_and_returns']['settings'][$k]['val'] =  in_array( $v['type'], array( 'textarea', 'text', 'hidden' ) ) ? stripslashes( get_option( $v['id'] ) ) : get_option( $v['id'] );
		}

		if ( substr_count( $plugins['warranties_and_returns']['settings']['wcwar_registration_key']['val'], '-' ) == 4 ) {
			$plugins['warranties_and_returns']['license'] = esc_url( home_url() );
		}

		return apply_filters( 'wc_warrantiesandreturns_settings', $plugins );
	}

}

	if ( isset($_GET['page'], $_GET['tab']) && ($_GET['page'] == 'wc-settings' ) && $_GET['tab'] == 'warranties_and_returns' ) {
		add_action( 'init', array( 'WC_War_Settings', 'init' ), 100 );
	}

?>