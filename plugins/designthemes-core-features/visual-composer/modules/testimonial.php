<?php add_action( 'vc_before_init', 'dt_sc_testimonial_vc_map' );
function dt_sc_testimonial_vc_map() {
	vc_map( array(
		"name" => esc_html__( "Testimonial", 'classymissy-core' ),
		"base" => "dt_sc_testimonial",
		"icon" => "dt_sc_testimonial",
		"category" => DT_VC_CATEGORY,
		"params" => array(

			# Type
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Type', 'classymissy-core' ),
				'description' => esc_html__( 'Select testimonial type', 'classymissy-core' ),
				'param_name' => 'type',
				'value' => array(
					esc_html__('Type 1','classymissy-core') => 'type1',
					esc_html__('Type 2','classymissy-core') => 'type2',
					esc_html__('Type 3','classymissy-core') => 'type3',
					esc_html__('Type 4','classymissy-core') => 'type4',
					esc_html__('Type 5','classymissy-core') => 'type5',
					esc_html__('Type 6','classymissy-core') => 'type6',
					esc_html__('Type 7','classymissy-core') => 'type7',
					esc_html__('Type 8','classymissy-core') => 'type8'
				),
				'std' => 'type1'
			),

			# Image
			array(
				'type' => 'attach_image',
				'heading' => esc_html__('Image','classymissy-core'),
                'param_name' => 'image'
            ),

			# Name
			array(
				'type' => 'textfield',
				'param_name' => 'name',
				'heading' => esc_html__( 'Name', 'classymissy-core' ),
				'description' => esc_html__( 'Enter name', 'classymissy-core' )
			),

			# Role
			array(
				'type' => 'textfield',
				'param_name' => 'role',
				'heading' => esc_html__( 'Role', 'classymissy-core' ),
				'description' => esc_html__( 'Enter role', 'classymissy-core' )
			),

      		// Content
            array(
            	'type' => 'textarea_html',
            	'heading' => esc_html__('Content','classymissy-core'),
            	'param_name' => 'content',
            	'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.'
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
} ?>