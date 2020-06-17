<?php add_action( 'vc_before_init', 'dt_sc_dropcap_vc_map' );
function dt_sc_dropcap_vc_map() {

	global $variations;

	vc_map( array(
		"name" => esc_html__( "Dropcap", 'classymissy-core' ),
            "base" => "dt_sc_dropcap",
		"icon" => "dt_sc_dropcap",
		"category" => DT_VC_CATEGORY,
		"params" => array(

      		# Dropcap Text
      		array(
      			'type' => 'textfield',
      			'heading' => esc_html__( 'Text', 'classymissy-core' ),
      			'param_name' => 'content',
      			'value' => 'A',
      			'admin_label' => true
      		),			

			# Types
      		array(
      			'type' => 'dropdown',
      			'heading' => esc_html__( 'Types', 'classymissy-core' ),
      			'param_name' => 'type',
      			'value' => array( 
      				esc_html__('Default','classymissy-core') => 'default',
      				esc_html__('Circle','classymissy-core') => 'circle',
      				esc_html__('Bordered Circle','classymissy-core') => 'bordered-circle',
      				esc_html__('Square','classymissy-core') => 'square',
      				esc_html__('Bordered Square','classymissy-core') => 'bordered-square'
      			),
      			'description' => esc_html__( 'Select Dropcap type', 'classymissy-core' ),
      			'std' => 'default',
      			'admin_label' => true
      		),

      		# Variation
      		array(
      			'type' => 'dropdown',
      			'heading' => esc_html__( 'Color', 'classymissy-core' ),
      			'param_name' => 'variation',
      			'value' => $variations,
      			'description' => esc_html__( 'Select dropcap color', 'classymissy-core' ),
      		),

      		# Text Color
      		array(
      			'type' => 'colorpicker',
      			'heading' => esc_html__( 'Custom text color', 'classymissy-core' ),
      			'param_name' => 'textcolor',
      			'description' => esc_html__( 'Select text color', 'classymissy-core' ),
      		),

      		# BG Color
      		array(
      			'type' => 'colorpicker',
      			'heading' => esc_html__( 'Custom Background color', 'classymissy-core' ),
      			'param_name' => 'bgcolor',
      			'description' => esc_html__( 'Select Background color', 'classymissy-core' ),
                        'dependency' => array( 'element' => 'type', 'value' => array('circle','bordered-circle','square','bordered-square') )                        
      		)    		      		      					
		)
	) );	
}?>