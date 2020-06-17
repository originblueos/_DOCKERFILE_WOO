<?php 
add_action( 'vc_before_init', 'dt_sc_featured_products_vc_map' );
function dt_sc_featured_products_vc_map() {
	vc_map( array( 
		'name' => __( 'Featured products', 'js_composer' ),
		'base' => 'dt_sc_featured_products',
		'icon' => 'icon-wpb-woocommerce',
		"category" => __( 'WooCommerce', 'js_composer' ),
		'description' => __( 'Display products set as feature', 'js_composer' ),
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
				'type' => 'textfield',
				'heading' => __( 'Total Items', 'js_composer' ),
				'save_always' => true,
				'value' => 12,
				'param_name' => 'per_page',
				'description' => __( 'How many products to show on the page', 'js_composer' ),
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
				'type' => 'dropdown',
				'heading' => __( 'Enable Carousel', 'js_composer' ),
				'param_name' => 'enable_carousel',
				'save_always' => true,
				'value' => array(	__('Yes', 'js_composer') => 'yes',
					__('No', 'js_composer') => 'no',
				),
				'edit_field_class' => 'vc_col-xs-6',
				'std' => 'no',
			),

			array(
				'type' => 'dropdown',
				'heading' => __( 'Per Row', 'js_composer' ),
				'param_name' => 'per_row',
				'save_always' => true,
				'value' => array(	__('Two', 'js_composer') => '2',
					__('Three', 'js_composer') => '3',
					__('Four', 'js_composer') => '4',
				),
				'std' => 3,
				'description' => __( 'Enter no.of items per row. ex: 3', 'js_composer' ),
				'edit_field_class' => 'vc_col-xs-6',
				'dependency' => array( 'element' => 'enable_carousel', 'value' => 'no' ),				
			),			


			array(
				'type' => 'dropdown',
				'heading' => __( 'No.of Items to Visible', 'js_composer' ),
				'param_name' => 'visible',
				'save_always' => true,
				'value' => array(	__('Two', 'js_composer') => '2',
					__('Three', 'js_composer') => '3',
					__('Four', 'js_composer') => '4',
					__('Five', 'js_composer') => '5',
				),
				'std' => 3,
				'group'	=> __('Carousel Settings','js_composer'),
				'description' => __( 'Enter no.of items to visible. ex: 3', 'js_composer' ),
				'dependency' => array( 'element' => 'enable_carousel', 'value' => 'yes' ),
			),

			array(
				"type" => "textfield",
				'group'	=> __('Carousel Settings','js_composer'),
				"heading" => esc_html__( "No.of Items to Scroll", 'gardening-core' ),
				"param_name" => "scroll",
				'save_always' => true,
				'value' => 1,
				'dependency' => array( 'element' => 'enable_carousel', 'value' => 'yes' ),
				'description' => esc_html__('Enter no.of items to scroll. ex: 1')
			),

			array(
				'type' => 'dropdown',
				'group'	=> __('Carousel Settings','js_composer'),
				'heading' => esc_html__( 'Auto Start Animation?', 'gardening-core' ),
				'param_name' => 'auto',
				
				'save_always' => true,
				'dependency' => array( 'element' => 'enable_carousel', 'value' => 'yes' ),
				'value' => array(
					esc_html__('Yes','gardening-core') => 'true',
					esc_html__('No','gardening-core') => 'false',
				),
				'std' => 'false'
			),

			array(
				'type' => 'dropdown',
				'group'	=> __('Carousel Settings','js_composer'),
				'param_name' => 'animation',
				'value' => array(
					esc_html__('None','gardening-core') => 'none',
					esc_html__('Scroll','gardening-core') => 'scroll',
					esc_html__('Direct Scroll','gardening-core') => 'directscroll',
					esc_html__('Cross Fade','gardening-core') => 'crossfade',
					esc_html__('Cover','gardening-core') => 'cover',
					esc_html__('Uncover','gardening-core') => 'uncover',
					esc_html__('Fade','gardening-core') => 'fade',
				),
				'heading' => esc_html__( 'Animation', 'gardening-core' ),
				'description' => esc_html__( 'Select carousel animation', 'gardening-core' ),
				'save_always' => true,
				'dependency' => array( 'element' => 'enable_carousel', 'value' => 'yes' ),
				'std' => 'scroll',
			),				
		)
	) );
}

# Shortcode
add_shortcode( 'dt_sc_featured_products', 'dt_sc_featured_products' );
function dt_sc_featured_products( $attrs, $content = null ) {

	global $woocommerce_loop;

	$output = $pager_class = $column_class = '';	

	extract ( shortcode_atts ( array (
		'style' => 'woo-style2',

		'enable_carousel' => 'no',
		'per_row' => '3',
		'per_page' => '12',
		'orderby'  => 'date',
		'order'    => 'desc',

		'visible' => '3',
		'scroll' => '1',
		'auto' => 'false',
		'animation' => 'scroll',
	), $attrs ) );

	$woocommerce_loop['name'] = 'dt_sc_featured_products';
	$woocommerce_loop['style'] = $style;

	if( $enable_carousel == 'yes' ) {
		$woocommerce_loop['columns'] = $visible;		
	} else {
		$woocommerce_loop['columns'] = $per_row;
	}
	

	$meta_query   = WC()->query->get_meta_query();
	$meta_query[] = array(
		'key'   => '_featured',
		'value' => 'yes'
	);

	$query_args = array(
		'post_type'           => 'product',
		'post_status'         => 'publish',
		'ignore_sticky_posts' => 1,
		'posts_per_page'      => $attrs['per_page'],
		'orderby'             => $attrs['orderby'],
		'order'               => $attrs['order'],
		'meta_query'          => $meta_query
	);

	$products = new WP_Query( $query_args );
	$output  = '<div class="woocommerce">';
	$output .= '	<div class="'.esc_attr( $style ).'">';

	if( $enable_carousel == 'yes' ) {

		$output .= '<div class="dt-sc-product-carousel-wrapper" data-visible="'.$visible.'" data-scroll="'.$scroll.'" data-auto="'.$auto.'" data-animation="'.$animation.'">';
	}


	if ( $products->have_posts() ) {

		$output .= woocommerce_product_loop_start( false );

		while ( $products->have_posts() ) {

			$products->the_post();

			ob_start();
			wc_get_template_part( 'content', 'product' );
			$output .= ob_get_clean();
		}

		$output .= woocommerce_product_loop_end( false );
	}

	if( $enable_carousel == 'yes' ) {
		
			$output .= '<div class="dt-sc-product-carousel-arrows">';
			$output .= '	<a class="prev-arrow" href="#"><span> </span></a>';
			$output .= '	<a class="next-arrow" href="#"><span> </span></a>';
			$output .= '</div>';
		
		$output .= '</div>';
	}

	$output .= '	</div>';
	$output .= '</div>';

	woocommerce_reset_loop();
	wp_reset_postdata();


	return $output;	
}
