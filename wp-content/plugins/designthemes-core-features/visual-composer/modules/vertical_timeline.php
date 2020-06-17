<?php add_action( 'vc_before_init', 'dt_sc_vertical_timeline_vc_map' );
function dt_sc_vertical_timeline_vc_map() {

	class WPBakeryShortCode_dt_sc_vertical_timeline extends WPBakeryShortCodesContainer {
	}
	class WPBakeryShortCode_dt_sc_vc_timeline_entry extends WPBakeryShortCode {
	}

	vc_map( array(
		"name" => esc_html__( "Vertical timeline", 'classymissy-core' ),
		"base" => "dt_sc_vertical_timeline",
		"icon" => "dt_sc_vertical_timeline",
		"category" => DT_VC_CATEGORY,
		"content_element" => true,
		"js_view" => 'VcColumnView',
		'as_parent' => array( 'only' => 'dt_sc_vc_timeline_entry' ),
		'description' => esc_html__( 'Tabbed content', 'classymissy-core' ),		
		"params" => array(

			// Type
			array(
				'type' => 'dropdown',
				'param_name' => 'type',
      			'admin_label' => true,
				'value' => array(
					esc_html__( 'Type 1', 'classymissy-core' ) => 'type1',
					esc_html__( 'Type 2', 'classymissy-core' ) => 'type2',
					esc_html__( 'Type 3', 'classymissy-core' ) => 'type3',
					esc_html__( 'Type 4', 'classymissy-core' ) => 'type4',
					esc_html__( 'Type 5', 'classymissy-core' ) => 'type5',
				),
				'std' => 'type1',
				'heading' => esc_html__( 'Type', 'classymissy-core' ),
			),

			# Class
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Extra class name", 'classymissy-core' ),
      			"param_name" => "class",
      			'description' => esc_html__('Style particular icon box element differently - add a class name and refer to it in custom CSS','classymissy-core')
      		)									
		)		
	) );
}?>