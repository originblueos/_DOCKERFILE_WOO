<?php add_action( 'vc_before_init', 'dt_sc_hexagon_wrapper_vc_map' );
function dt_sc_hexagon_wrapper_vc_map() {

	class WPBakeryShortCode_dt_sc_hexagon_wrapper extends WPBakeryShortCodesContainer {
	}

	class WPBakeryShortCode_dt_sc_hexagon_item extends WPBakeryShortCode {
	}

	vc_map( array(
		"name" => esc_html__( "Hexagon", 'classymissy-core' ),
		"base" => "dt_sc_hexagon_wrapper",
		"icon" => "dt_sc_hexagon_wrapper",
		"category" => DT_VC_CATEGORY,
		"content_element" => true,
		"js_view" => 'VcColumnView',
		'as_parent' => array( 'only' => 'dt_sc_hexagon_item' ),
		'description' => esc_html__( 'Hexagon wrapper', 'classymissy-core' ),
		"params" => array(

			# Title
			array(
				'type' => 'textfield',
				'param_name' => 'title',
				'heading' => esc_html__( 'Title', 'classymissy-core' ),
				'description' => esc_html__( 'Enter title', 'classymissy-core' )
			),

			# Sub Title
			array(
				'type' => 'textfield',
				'param_name' => 'subtitle',
				'heading' => esc_html__( 'Sub title', 'classymissy-core' ),
				'description' => esc_html__( 'Enter sub title', 'classymissy-core' )
			),

			# Extra Sub Title
			array(
				'type' => 'textfield',
				'param_name' => 'extratitle',
				'heading' => esc_html__( 'Extra sub title', 'classymissy-core' ),
				'description' => esc_html__( 'Enter extra sub title', 'classymissy-core' )
			),

			# Image
			array(
				'type' => 'attach_image',
				'heading' => esc_html__('Image','classymissy-core'),
                'param_name' => 'image'
            )												
		)
	) );
}?>