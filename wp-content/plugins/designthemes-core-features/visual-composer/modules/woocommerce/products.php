<?php
add_action( 'vc_before_init', 'dt_sc_products_vc_map' );
function dt_sc_products_vc_map() {
	vc_map( array( 
		'name' => __( 'Products', 'js_composer' ),
		'base' => 'dt_sc_products',
		'icon' => 'icon-wpb-woocommerce',
		"category" => __( 'WooCommerce', 'js_composer' ),
		'description' => __( 'Show multiple products by ID or SKU.', 'js_composer' ),
		'params' => array(

			array(
				'type' => 'dt_vc_image_picker',
				'param_name' => 'style',
				'heading' => __( 'Style', 'js_composer' ),
				'value' => array( 'woo-style1', 'woo-style2', 'woo-style3'),
				'std' => 'woo-style2',
				'save_always' => true,
				'image' => array(
					plugins_url('designthemes-core-features/visual-composer/images/product-layouts/layout_1.png'), 
					plugins_url('designthemes-core-features/visual-composer/images/product-layouts/layout_2.png'), 
					plugins_url('designthemes-core-features/visual-composer/images/product-layouts/layout_3.png')
				),				
			),

			array(
				'type' => 'dropdown',
				'heading' => __( 'Products Per Row', 'js_composer' ),
				'param_name' => 'per_row',
				'save_always' => true,
				'value' => array(	__('Two', 'js_composer') => '2',
					__('Three', 'js_composer') => '3',
					__('Four', 'js_composer') => '4',
				),
				'std' => 3,
				'description' => __( 'Enter no.of items per row. ex: 3', 'js_composer' ),
			),			

			array(
				'type' => 'dropdown',
				'heading' => __( 'Order by', 'js_composer' ),
				'param_name' => 'orderby',
				'save_always' => true,
				'value' => array(
					__( 'Date', 'js_composer' ) => 'date',
					__( 'ID', 'js_composer' ) => 'ID',
					__( 'Author', 'js_composer' ) => 'author',
					__( 'Title', 'js_composer' ) => 'title',
					__( 'Modified', 'js_composer' ) => 'modified',
					__( 'Random', 'js_composer' ) => 'rand',
					__( 'Comment count', 'js_composer' ) => 'comment_count',
					__( 'Menu order', 'js_composer' ) => 'menu_order'
				),
				'description' => sprintf( __( 'Select how to sort retrieved products. More at %s.', 'js_composer' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),

			array(
				'type' => 'dropdown',
				'heading' => __( 'Sort order', 'js_composer' ),
				'param_name' => 'order',
				'value' => array(
					__( 'Descending', 'js_composer' ) => 'DESC',
					__( 'Ascending', 'js_composer' ) => 'ASC',
				),
				'save_always' => true,
				'description' => sprintf( __( 'Designates the ascending or descending order. More at %s.', 'js_composer' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),

			array(
				'type' => 'autocomplete',
				'heading' => __( 'Products', 'js_composer' ),
				'param_name' => 'ids',
				'settings' => array(
					'multiple' => true,
					'sortable' => true,
					'unique_values' => true,
				),
				'save_always' => true,
				'description' => __( 'Enter List of Products', 'js_composer' ),
			),
			array(
				'type' => 'hidden',
				'param_name' => 'skus',
			)
		)
	));
}

add_shortcode( 'dt_sc_products', 'dt_sc_products' );
function dt_sc_products( $atts, $content = null ) {

	global $woocommerce_loop;

	extract ( shortcode_atts ( array (
		'style' => 'woo-style2',
		'per_row' => '3',
		'orderby'  => 'date',
		'order'    => 'desc',
		'ids' => '',
		'skus' => ''
	), $atts ) );

	$query_args = array(
		'post_type'           => 'product',
		'post_status'         => 'publish',
		'ignore_sticky_posts' => 1,
		'orderby'             => $atts['orderby'],
		'order'               => $atts['order'],
		'posts_per_page'      => -1,
		'meta_query'          => WC()->query->get_meta_query()
	);

	if ( ! empty( $atts['skus'] ) ) {
		$query_args['meta_query'][] = array(
			'key'     => '_sku',
			'value'   => array_map( 'trim', explode( ',', $atts['skus'] ) ),
			'compare' => 'IN'
		);

		// Ignore catalog visibility
		$query_args['meta_query'] = array_merge( $query_args['meta_query'], WC()->query->stock_status_meta_query() );
	}

	if ( ! empty( $atts['ids'] ) ) {
		$query_args['post__in'] = array_map( 'trim', explode( ',', $atts['ids'] ) );
		// Ignore catalog visibility
		$query_args['meta_query'] = array_merge( $query_args['meta_query'], WC()->query->stock_status_meta_query() );
	}

	$woocommerce_loop['name'] = 'dt_sc_products';
	$woocommerce_loop['style'] = $style;
	$woocommerce_loop['columns'] = 	$per_row;

	$products = new WP_Query( $query_args );

	ob_start();
	if ( $products->have_posts() ) {

		woocommerce_product_loop_start();

		while ( $products->have_posts() ) :

			$products->the_post();

			wc_get_template_part( 'content', 'product' );
		endwhile;

		woocommerce_product_loop_end();
	}

	woocommerce_reset_loop();
	wp_reset_postdata();

	return '<div class="woocommerce"><div class="'.esc_attr( $style ).'">' . ob_get_clean() . '</div></div>';		


}

add_filter( 'vc_autocomplete_dt_sc_products_ids_callback','productIdAutocompleteSuggester', 10, 1 );

add_filter( 'vc_autocomplete_dt_sc_products_ids_render','productIdAutocompleteRender', 10, 1 );

add_filter( 'vc_form_fields_render_field_dt_sc_products_ids_param_value','productsIdsDefaultValue', 10, 4 );