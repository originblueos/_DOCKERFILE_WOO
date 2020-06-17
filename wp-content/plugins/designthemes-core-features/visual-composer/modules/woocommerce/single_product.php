<?php
$dt_post_type = '';
if( is_admin() ) {
	if(isset( $_GET['post'] ) ) {
		$dt_post_type = get_post( $_GET['post'] );
		$dt_post_type = $dt_post_type->post_type;
	} elseif( isset($_GET['post_type']) == 'product' ) {
		$dt_post_type = $_GET['post_type'];
	}
}
if( $dt_post_type == 'product' ) {

	add_action( 'vc_before_init', 'dt_sc_single_product_sc_vc_map' );
	function dt_sc_single_product_sc_vc_map() {

		// Single Product - Price
		vc_map( array(
			'name' => esc_html__('Product Price', 'woo-shop-core'),
			'base' => 'dt_sc_single_product_price',
			'icon' => 'dt_sc_single_product_price',
			'category' => esc_html__("Single Product", 'woo-shop-core'),
			'description' => __("Display the price for current product ", 'woo-shop-core'),
			'show_settings_on_create' => false
		) );
		
		// Single Product - Purchase Button
		vc_map( array(
			'name' => esc_html__('Product Purchase Button', 'woo-shop-core'),
			'base' => 'dt_sc_single_product_button',
			'icon' => 'dt_sc_single_product_button',
			'category' => esc_html__("Single Product", 'woo-shop-core'),
			'description' => __("Display the 'Add to cart' button for current product ", 'woo-shop-core'),
			'show_settings_on_create' => false
		) );

		// Single Product - Tabs
		vc_map( array(
			'name' => esc_html__('Product Tabs', 'woo-shop-core'),
			'base' => 'dt_sc_single_product_tabs',
			'icon' => 'dt_sc_single_product_tabs',
			'category' => esc_html__("Single Product", 'woo-shop-core'),
			'description' => __("Display the info and review tab for the current product", 'woo-shop-core'),
			'show_settings_on_create' => false
		) );

		// Single Product - Info
		vc_map( array(
			'name' => esc_html__('Product Info', 'woo-shop-core'),
			'base' => 'dt_sc_single_product_info',
			'icon' => 'dt_sc_single_product_info',
			'category' => esc_html__("Single Product", 'woo-shop-core'),
			'description' => __("Display the info tab for the current product", 'woo-shop-core'),
			'show_settings_on_create' => false
		) );

		// Single Product - Reviews
		vc_map( array(
			'name' => esc_html__('Product Reviews', 'woo-shop-core'),
			'base' => 'dt_sc_single_product_reviews',
			'icon' => 'dt_sc_single_product_reviews',
			'category' => esc_html__("Single Product", 'woo-shop-core'),
			'description' => __("Display the reviews and review form for the current product", 'woo-shop-core'),
			'show_settings_on_create' => false
		) );

		// Single Product : upsell and/or related products
		vc_map( array(
			'name' => esc_html__('Up sell / Related Product', 'woo-shop-core'),
			'base' => 'dt_sc_single_product_upsell',
			'icon' => 'dt_sc_single_product_upsell',
			'category' => esc_html__("Single Product", 'woo-shop-core'),
			'description' => __("Display the upsell or related products for a current product", 'woo-shop-core'),
			'show_settings_on_create' => false,
			'params' => array(

					array(
						'type' => 'dropdown',
						'heading' => __( 'Show?', 'woo-shop-core' ),
						'param_name' => 'show',
						'value' => array(
							__('Display up-sells and related products',  'woo-shop-core' ) =>'upsells related',
							__('Display up-sells only',  'woo-shop-core' ) =>'upsells',	
							__('Display related products only',  'woo-shop-core' ) =>'related'
						),						
						'std' => 'upsells related',
						'description' => __( 'Choose which products you want to display', 'woo-shop-core' )
					),

					array(
						'type' => 'dropdown',
						'heading' => __( 'Number of items', 'woo-shop-core' ),
						'param_name' => 'count',
						'value' => array( '1' => '1', '2' => '2', '3' => '3', '4' => '4' ),
						'std' => '3',
						'description' => __( 'Choose the maximum number of products to display', 'woo-shop-core' )
					)
			)
		) );		

	}
}