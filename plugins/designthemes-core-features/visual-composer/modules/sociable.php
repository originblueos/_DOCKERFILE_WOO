<?php add_action( 'vc_before_init', 'dt_sc_sociable_vc_map' );
function dt_sc_sociable_vc_map() {

	vc_map( array(
		"name" => esc_html__( "Sociable", 'classymissy-core' ),
		"base" => "dt_sc_sociable",
		"icon" => "dt_sc_sociable",
		"category" => DT_VC_CATEGORY,
		"description" => esc_html__("To show sociables configured in admin panel, Claasy Missy Options -> Layout -> Sociable",'classymissy-core'),
		"params" => array(

			# Types
      		array(
      			'type' => 'dropdown',
      			'heading' => esc_html__( 'Style', 'classymissy-core' ),
      			'param_name' => 'style',
      			'value' => array( 
      				esc_html__('Default','classymissy-core') => '',
					esc_html__('Rounded Border','classymissy-core') => 'rounded-border',
					esc_html__('Rounded Square','classymissy-core') => 'rounded-square',
					esc_html__('Diamond Square Border','classymissy-core') => 'diamond-square-border',
					esc_html__('Hexagon With Border','classymissy-core') => 'hexagon-with-border',
					esc_html__('Square Border','classymissy-core') => 'square-border',
      			),
      			'description' => esc_html__( 'Select style of sociable.', 'classymissy-core' ),
      			'std' => '',
      			'admin_label' => true
      		),

			# Class
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Extra class name", 'classymissy-core' ),
      			"param_name" => "class",
      			'description' => esc_html__('Style particular element differently - add a class name and refer to it in custom CSS','classymissy-core')
      		)
		)
	) );
} ?>