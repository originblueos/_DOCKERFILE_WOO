<?php add_action( 'vc_before_init', 'dt_sc_vc_timeline_entry_vc_map' );
function dt_sc_vc_timeline_entry_vc_map() {
	vc_map( array(
		"name" => esc_html__( "Timeline Entry", 'classymissy-core' ),
		"base" => "dt_sc_vc_timeline_entry",
		"icon" => "dt_sc_vertical_timeline",
		"category" => DT_VC_CATEGORY,
		'as_child' => array( 'only' => 'dt_sc_vertical_timeline' ),
		'description' => esc_html__( 'Section for Timeline entries', 'classymissy-core' ),
		"params" => array(

			# Title
			array(
				'type' => 'textfield',
				'param_name' => 'title',
				'heading' => esc_html__( 'Title', 'classymissy-core' ),
      			'admin_label' => true,
				'description' => esc_html__( 'Enter title', 'classymissy-core' )
			),

			#Sub Title
			array(
				'type' => 'textfield',
				'param_name' => 'subtitle',
				'heading' => esc_html__( 'Sub Title', 'classymissy-core' ),
      			'admin_label' => true,
				'description' => esc_html__( 'Enter sub title', 'classymissy-core' )
			),

			# Image Type
			array(
				'type' => 'dropdown',
				'param_name' => 'icon_type',
				'heading' => esc_html__('Icon Type','classymissy-core'),
				'value' => array(
					esc_html__('None','classymissy-core') => 'none',
					esc_html__('Font Awesome', 'classymissy-core' ) => 'fontawesome' ,
					esc_html__('Icon Class','classymissy-core') => 'icon_class',
					esc_html__('Image','classymissy-core') => 'image'
				),
				'std' => 'none'
			),

      		// Font Awesome
			array(
				'type' => 'iconpicker',
				'heading' => esc_html__( 'Font Awesome', 'classymissy-core' ),
				'param_name' => 'font_icon',
				'settings' => array( 'emptyIcon' => false, 'iconsPerPage' => 4000 ),
				'dependency' => array( 'element' => 'icon_type', 'value' => 'fontawesome' ),
				'description' => esc_html__( 'Select icon from library', 'classymissy-core' ),
			),			

      		# Icon class
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Extra class name", 'classymissy-core' ),
      			"param_name" => "icon_class",
      			"dependency" => array( 'element' => 'icon_type', 'value' => 'icon_class')
      		),

			# Image
            array(
            	'type' => 'attach_image',
            	'heading' => esc_html__('Image','classymissy-core'),
            	'param_name' => 'image',
      			"dependency" => array( 'element' => 'icon_type', 'value' => 'image')
            ),

			#Image Hover Text
			array(
				'type' => 'textfield',
				'param_name' => 'hover_text',
				'heading' => esc_html__( 'Image Hover Text', 'classymissy-core' ),
      			"dependency" => array( 'element' => 'icon_type', 'value' => 'image')				
			),

			#Image Hover Text
			array(
				'type' => 'vc_link',
				'param_name' => 'link',
				'heading' => esc_html__( 'Image Link', 'classymissy-core' ),
      			"dependency" => array( 'element' => 'icon_type', 'value' => 'image')				
			),

			# Content
      		array(
      			'type' => 'textarea_html',
      			'heading' => esc_html__( 'Content', 'classymissy-core' ),
      			'param_name' => 'content',
				'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.'
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