<?php 
add_action( 'vc_before_init', 'dt_sc_single_product_vc_map' );
function dt_sc_single_product_vc_map() {
	vc_map( array( 
		'name' => __( 'Product', 'js_composer' ),
		'base' => 'dt_sc_product',
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
				'type' => 'autocomplete',
				'heading' => __( 'Select identificator', 'js_composer' ),
				'param_name' => 'id',
				'description' => __( 'Input product ID or product SKU or product title to see suggestions', 'js_composer' ),
			),

			array(
				'type' => 'hidden',
				// This will not show on render, but will be used when defining value for autocomplete
				'param_name' => 'sku',
			),			
		)
	) );
}
//Filters For autocomplete param:
//For suggestion: vc_autocomplete_[shortcode_name]_[param_name]_callback
add_filter( 'vc_autocomplete_dt_sc_product_id_callback', 'productIdAutocompleteSuggester', 10, 1 );
// Get suggestion(find). Must return an array
function productIdAutocompleteSuggester( $query ) {
	global $wpdb;
	$product_id = (int) $query;
	$post_meta_infos = $wpdb->get_results( $wpdb->prepare( "SELECT a.ID AS id, a.post_title AS title, b.meta_value AS sku
				FROM {$wpdb->posts} AS a
				LEFT JOIN ( SELECT meta_value, post_id  FROM {$wpdb->postmeta} WHERE `meta_key` = '_sku' ) AS b ON b.post_id = a.ID
				WHERE a.post_type = 'product' AND ( a.ID = '%d' OR b.meta_value LIKE '%%%s%%' OR a.post_title LIKE '%%%s%%' )", $product_id > 0 ? $product_id : - 1, stripslashes( $query ), stripslashes( $query ) ), ARRAY_A );

	$results = array();
	if ( is_array( $post_meta_infos ) && ! empty( $post_meta_infos ) ) {
		foreach ( $post_meta_infos as $value ) {
			$data = array();
			$data['value'] = $value['id'];
			$data['label'] = __( 'Id', 'js_composer' ) . ': ' . $value['id'] . ( ( strlen( $value['title'] ) > 0 ) ? ' - ' . __( 'Title', 'js_composer' ) . ': ' . $value['title'] : '' ) . ( ( strlen( $value['sku'] ) > 0 ) ? ' - ' . __( 'Sku', 'js_composer' ) . ': ' . $value['sku'] : '' );
			$results[] = $data;
		}
	}

	return $results;
}

add_filter( 'vc_autocomplete_dt_sc_product_id_render', 'productIdAutocompleteRender', 10, 1 );
// Render exact product. Must return an array (label,value)
function productIdAutocompleteRender( $query ) {
	$query = trim( $query['value'] ); // get value from requested
	if ( ! empty( $query ) ) {
		// get product
		$product_object = wc_get_product( (int) $query );
		if ( is_object( $product_object ) ) {
			$product_sku = $product_object->get_sku();
			$product_title = $product_object->get_title();
			$product_id = $product_object->id;

			$product_sku_display = '';
			if ( ! empty( $product_sku ) ) {
				$product_sku_display = ' - ' . __( 'Sku', 'js_composer' ) . ': ' . $product_sku;
			}

			$product_title_display = '';
			if ( ! empty( $product_title ) ) {
				$product_title_display = ' - ' . __( 'Title', 'js_composer' ) . ': ' . $product_title;
			}

			$product_id_display = __( 'Id', 'js_composer' ) . ': ' . $product_id;

			$data = array();
			$data['value'] = $product_id;
			$data['label'] = $product_id_display . $product_title_display . $product_sku_display;

			return ! empty( $data ) ? $data : false;
		}

		return false;
	}

	return false;
}
//For param: ID default value filter
add_filter( 'vc_form_fields_render_field_dt_sc_product_id_param_value', 'productIdDefaultValue', 10, 4 );
// Defines default value for param if not provided. Takes from other param value.

/**
 * Return ID of product by provided SKU of product.
 * @since 4.4
 *
 * @param $query
 *
 * @return bool
 */
function productIdDefaultValueFromSkuToId( $query ) {
	$result = $this->productIdAutocompleteSuggesterExactSku( $query );

	return isset( $result['value'] ) ? $result['value'] : false;
}

add_shortcode('dt_sc_product','dt_sc_product');
function dt_sc_product( $atts, $content = null ) {

	global $woocommerce_loop;

	$meta_query = WC()->query->get_meta_query();

	$args = array(
		'post_type'      => 'product',
		'posts_per_page' => 1,
		'no_found_rows'  => 1,
		'post_status'    => 'publish',
		'meta_query'     => $meta_query
	);

	if ( isset( $atts['sku'] ) ) {
		$args['meta_query'][] = array(
			'key'     => '_sku',
			'value'   => $atts['sku'],
			'compare' => '='
		);
	}

	if ( isset( $atts['id'] ) ) {
		$args['p'] = $atts['id'];
	}

	$woocommerce_loop['name'] = 'dt_sc_single_product';
	$woocommerce_loop['style'] = $atts['style'];
	$woocommerce_loop['columns'] = 1;

	$products = new WP_Query( $args );

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

	return '<div class="woocommerce"><div class="'.esc_attr( $atts['style'] ).'">' . ob_get_clean() . '</div></div>';	
}