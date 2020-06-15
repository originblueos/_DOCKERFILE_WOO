<?php
add_action( 'vc_before_init', 'dt_sc_product_search_vc_map' );
function dt_sc_product_search_vc_map() {
	vc_map( array(
		'name' => __( 'Product Search', 'js_composer' ),
		'base' => 'dt_sc_product_search',
		'icon' => 'icon-wpb-woocommerce',
		'category' => __( 'WooCommerce', 'js_composer' ),
		'description' => __( 'Add product search.', 'js_composer' ),
		'show_settings_on_create' => false
	) );
}

add_shortcode( 'dt_sc_product_search', 'dt_sc_product_search' );
function dt_sc_product_search( $atts, $content = null ) {

	$search_text = empty($_GET['s']) ? esc_html__("Search Product",'classymissy') : get_search_query();

	$output  = '<form method="get" class="dt-sc-product-search-form">';
	$output .= '	<input id="product-search-field" name="product" type="text" placeholder="'.$search_text.'"/>';
	$output .= '	<a href="javascript:void(0)" class="dt-search-icon"> <span class="fa fa-close"> </span> </a>';
	$output .= '	<input name="submit" type="submit" value="'.__('Go','js_composer').'"/>';
	$output .= '</form>';

	return $output;
}

add_action("wp_ajax_dt_sc_product_live_search_results", "dt_sc_product_live_search_results");
add_action("wp_ajax_nopriv_dt_sc_product_live_search_results", "dt_sc_product_live_search_results");
function dt_sc_product_live_search_results() {

	$s = $_REQUEST['q'];
	$out = '';

	$args = array( 's' => $s, 'post_type' => 'product', 'posts_per_page' => 4 );
	$the_query = new WP_Query($args);

	if( $the_query->have_posts() ) {

		$out .= '<ul class="dt-sc-product-searchresults">';
			while( $the_query->have_posts() ) {

				$the_query->the_post();
				$pid = get_the_ID();

				$out .= '<li>';
					if( has_post_thumbnail() ) {
						$out .= '<div class="item-thumb">';
							$out .= '<a href="'.get_permalink().'" title="'.get_the_title().'" rel="bookmark">';
								$out .= get_the_post_thumbnail( $pid );
							$out .= '</a>';
						$out .= '</div>';						
					}

					$out .= '<div class="item-details">';
						$out .= '<h3><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></h3>';
					$out .= '</div>';					
				$out .= '</li>';
			}
		$out .= '</ul>';
		wp_reset_postdata();
	} else {
		$out .= '<h2>'.esc_html__('Nothing Found.', 'classymissy').'</h2>';
		$out .= '<p>'.esc_html__('Apologies, but no results were found for the requested archive.', 'classymissy').'</p>';
	}

	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') :
		echo ($out);
	else :
		header("Location: ".$_SERVER["HTTP_REFERER"]);
	endif;

	die();
}