<?php add_action( 'vc_before_init', 'dt_sc_iconbox_vc_map' );
function dt_sc_iconbox_vc_map() {

	global $variations;

	vc_map( array(
		"name" => esc_html__( "Icon box", 'classymissy-core' ),
        "base" => "dt_sc_iconbox",
		"icon" => "dt_sc_iconbox",
		"category" => DT_VC_CATEGORY,
		"params" => array(

			# Types
      		array(
      			'type' => 'dropdown',
      			'heading' => esc_html__( 'Types', 'classymissy-core' ),
      			'param_name' => 'type',
      			'value' => array( 
      				esc_html__('Type 1','classymissy-core') => 'type1',		esc_html__('Type 2','classymissy-core') => 'type2',		esc_html__('Type 3','classymissy-core') => 'type3',
      				esc_html__('Type 4','classymissy-core') => 'type4',		esc_html__('Type 5','classymissy-core') => 'type5',		esc_html__('Type 6','classymissy-core') => 'type6',
      				esc_html__('Type 7','classymissy-core') => 'type7',		esc_html__('Type 8','classymissy-core') => 'type8',		esc_html__('Type 9','classymissy-core') => 'type9',
      				esc_html__('Type 10','classymissy-core') => 'type10',		esc_html__('Type 11','classymissy-core') => 'type11',      esc_html__('Type 12','classymissy-core') => 'type12',
                    esc_html__('Type 13','classymissy-core') => 'type13',      esc_html__('Type 14','classymissy-core') => 'type14'
      			),
      			'description' => esc_html__( 'Select icon box type', 'classymissy-core' ),
      			'std' => 'type1',
      			'admin_label' => true
      		),

      		# Title
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Title", 'classymissy-core' ),
      			"param_name" => "title"
      		),

      		# Sub Title
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Sub Title", 'classymissy-core' ),
      			"param_name" => "subtitle"
      		),

      		# Icon Type
      		array(
      			'type' => 'dropdown',
      			'heading' => esc_html__('Icon Type','classymissy-core'),
      			'param_name' => 'icon_type',
      			'value' => array( 
                              esc_html__('Image','classymissy-core') => 'image',
                              esc_html__('Font Awesome', 'classymissy-core' ) => 'fontawesome' ,
                              esc_html__('Class','classymissy-core') => 'css_class',
                              esc_html__('None','classymissy-core') => 'none' ),
      			'std' => 'fontawesome'
      		),

      		# Font Awesome
			array(
				'type' => 'iconpicker',
				'heading' => esc_html__( 'Font Awesome', 'classymissy-core' ),
				'param_name' => 'icon',
				'value' => 'fa fa-info-circle',
				'settings' => array( 'emptyIcon' => false, 'iconsPerPage' => 4000 ),
				'dependency' => array(
					'element' => 'icon_type',
					'value' => 'fontawesome',
				),
				'description' => esc_html__( 'Select icon from library', 'classymissy-core' ),
			),

			# Custom Icon
			array(
				'type' => 'attach_image',
				'heading' => esc_html__( 'Image', 'classymissy-core' ),
				'param_name' => 'iconurl',
				'description' => esc_html__( 'Select image from media library', 'classymissy-core' ),
				'dependency' => array( 'element' => 'icon_type', 'value' => 'image' )
			),

			# Custom Class
			array(
				  'type' => 'textfield',
				  'heading' => esc_html__( 'Custom class', 'classymissy-core' ),
				  'param_name' => 'icon_css_class',
				  'value' => '',
				  'dependency' => array(
						'element' => 'icon_type',
						'value' => 'css_class',
				  )
			),      		

      		# Color
      		array(
      			'type' => 'dropdown',
      			'heading' => esc_html__( 'Color', 'classymissy-core' ),
      			'param_name' => 'color',
      			'value' => $variations,
				'dependency' => array('element' => 'type','value' => 'type14')
      		),

      		# URL
      		array(
      			'type' => 'vc_link',
      			'heading' => esc_html__( 'URL (Link)', 'classymissy-core' ),
      			'param_name' => 'link',
      			'description' => esc_html__( 'Add link to icon box', 'classymissy-core' )
      		),

      		# Content
      		array(
      			'type' => 'textarea_html',
      			'heading' => esc_html__( 'Content', 'classymissy-core' ),
      			'param_name' => 'content',
      			'value' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>'
      		),

      		# Class
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Extra class name", 'classymissy-core' ),
      			"param_name" => "class",
      			'description' => esc_html__('Style particular icon box element differently - add a class name and refer to it in custom CSS','classymissy-core')
      		),

                  array(
                        'type' => 'textarea',
                        'heading' => "Inline styles",
                        'param_name' => 'addstyles',
                        'description' => esc_html__( 'Enter inline styles for this iconbox', 'classymissy-core' )
                  )      		
		)
	) );
}?>