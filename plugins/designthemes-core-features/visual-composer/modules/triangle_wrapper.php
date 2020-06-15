<?php add_action( 'vc_before_init', 'dt_sc_triangle_wrapper_vc_map' );
function dt_sc_triangle_wrapper_vc_map() {
	vc_map( array(
		"name" => esc_html__( "Triangle wrapper", 'classymissy-core' ),
		"base" => "dt_sc_triangle_wrapper",
		"icon" => "dt_sc_triangle_wrapper",
		"category" => DT_VC_CATEGORY,
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

			# Image
			array(
				'type' => 'attach_image',
				'heading' => esc_html__('Image','classymissy-core'),
                'param_name' => 'image'
            ),

            # Link
			array(
				'type' => 'vc_link',
				'heading' => esc_html__('Link','classymissy-core'),
                'param_name' => 'link'
            ),

			# Type
			array(
				'type' => 'dropdown',
				'param_name' => 'type',
				'heading' => esc_html__('Type','classymissy-core'),
				'value' => array( esc_html__('Image First','classymissy-core') => '', esc_html__('Details First','classymissy-core') => 'alter' )
			)                        						
		)
	) );	
}?>