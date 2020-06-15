<?php add_action( 'vc_before_init', 'dt_sc_colored_button_vc_map' );
function dt_sc_colored_button_vc_map() {

	global $variations;

	vc_map( array(
		"name" => esc_html__( "Colored Button", 'classymissy-core' ),
            "base" => "dt_sc_colored_button",
		"icon" => "dt_sc_colored_button",
		"category" => DT_VC_CATEGORY,
		"params" => array(

      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Title", 'classymissy-core' ),
      			"param_name" => "title"
      		),

      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Sub Title", 'classymissy-core' ),
      			"param_name" => "subtitle"
      		),

      		array(
      			'type' => 'vc_link',
      			'heading' => esc_html__( 'URL (Link)', 'classymissy-core' ),
      			'param_name' => 'link',
      			'description' => esc_html__( 'Add link to button', 'classymissy-core' )
      		),

      		array(
      			'type' => 'dropdown',
      			'heading' => esc_html__( 'Color', 'classymissy-core' ),
      			'param_name' => 'color',
      			'value' => $variations,
      			'description' => esc_html__( 'Select button color', 'classymissy-core' ),
      		),

                  // Icon Type
                  array(
                        'type' => 'dropdown',
                        'heading' => esc_html__('Icon Type','classymissy-core'),
                        'param_name' => 'icon_type',
                        'value' => array(
                              esc_html__('None', 'classymissy-core' ) => '',      
                              esc_html__('Font Awesome', 'classymissy-core' ) => 'fontawesome' ,
                              esc_html__('Class','classymissy-core') => 'css_class'
                        ),
                        'std' => 'fontawesome'
                  ),                  

      		# Font Awesome
			array(
                        'type' => 'iconpicker',
				'heading' => esc_html__( 'Font Awesome', 'classymissy-core' ),
				'param_name' => 'icon',
				'value' => 'fa fa-info-circle',
				'settings' => array( 'emptyIcon' => false, 'iconsPerPage' => 4000 ),
                        'dependency' => array( 'element' => 'icon_type', 'value' => 'fontawesome' ),
                        'description' => esc_html__( 'Select icon from library', 'classymissy-core' ),
			),

                  // Custom Class
                  array(
                        'type' => 'textfield',
                        'heading' => esc_html__( 'Custom icon class', 'classymissy-core' ),
                        'param_name' => 'icon_css_class',
                        'dependency' => array( 'element' => 'icon_type', 'value' => 'css_class' )
                  ),                  

      		array(
      			"type" => "textfield",
      			"heading" => esc_html__('Extra class name','classymissy-core'),
      			"param_name" => "class"
      		),      					
		)
	) );
}?>