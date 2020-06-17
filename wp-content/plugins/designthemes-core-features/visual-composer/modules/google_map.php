<?php
add_action( 'vc_before_init', 'dt_sc_google_map_vc_map' );
function dt_sc_google_map_vc_map() {

	vc_map( array(
		"name" => esc_html__( "Google Map", 'classymissy-core' ),
		"base" => "dt_sc_google_map",
		"category" => DT_VC_CATEGORY,
		"class" => "dt_vc_style",
		"icon" => "dt_sc_google_map",
		'as_parent' => array( 'only' => 'dt_sc_google_map_marker' ),
		"content_element" => true,
		"params" => array(

			array(
      			'type' => 'dropdown',
      			'heading' => esc_html__( 'Map Type', 'classymissy-core' ),
      			'param_name' => 'map_type',
      			'value' => array(
      				esc_html__('Roadmap','classymissy-core') => 'roadmap',
      				esc_html__('Satellite','classymissy-core') => 'satellite',
      				esc_html__('Terrain','classymissy-core') => 'terrain',
      				esc_html__('Hybrid','classymissy-core') => 'hybrid'
      			),
				'save_always' => true,
      			'description' => esc_html__( 'The popup window which appears when a marker is clicked.', 'classymissy-core' ),				
			),

			array(
      			'type' => 'dropdown',
      			'heading' => esc_html__( 'Map Style', 'classymissy-core' ),
      			'param_name' => 'map_style',
      			'value' => array(
      				esc_html__('Default','classymissy-core') => '',
      				esc_html__('Custom','classymissy-core') => 'custom',
					esc_html__('Style 1','classymissy-core') => '1',
					esc_html__('Style 2','classymissy-core') => '2',
					esc_html__('Style 3','classymissy-core') => '3',
					esc_html__('Style 4','classymissy-core') => '4',
					esc_html__('Style 5','classymissy-core') => '5',
					esc_html__('Style 6','classymissy-core') => '6',
					esc_html__('Style 7','classymissy-core') => '7',
					esc_html__('Style 8','classymissy-core') => '8',
					esc_html__('Style 9','classymissy-core') => '9',
					esc_html__('Style 10','classymissy-core') => '10',
					esc_html__('Style 11','classymissy-core') => '11',
					esc_html__('Style 12','classymissy-core') => '12',
					esc_html__('Style 13','classymissy-core') => '13',
					esc_html__('Style 14','classymissy-core') => '14',
					esc_html__('Style 15','classymissy-core') => '15',
					esc_html__('Style 16','classymissy-core') => '16',
					esc_html__('Style 17','classymissy-core') => '17',
					esc_html__('Style 18','classymissy-core') => '18',
					esc_html__('Style 19','classymissy-core') => '19',
					esc_html__('Style 20','classymissy-core') => '20',
					esc_html__('Style 21','classymissy-core') => '21',
					esc_html__('Style 22','classymissy-core') => '22',
					esc_html__('Style 23','classymissy-core') => '23',
					esc_html__('Style 24','classymissy-core') => '24',
					esc_html__('Style 25','classymissy-core') => '25',
					esc_html__('Style 26','classymissy-core') => '26',
					esc_html__('Style 27','classymissy-core') => '27',
					esc_html__('Style 28','classymissy-core') => '28',
					esc_html__('Style 29','classymissy-core') => '29',
					esc_html__('Style 30','classymissy-core') => '30',
					esc_html__('Style 31','classymissy-core') => '31',
					esc_html__('Style 32','classymissy-core') => '32',
					esc_html__('Style 33','classymissy-core') => '33',
					esc_html__('Style 34','classymissy-core') => '34',
					esc_html__('Style 35','classymissy-core') => '35',
					esc_html__('Style 36','classymissy-core') => '36',
					esc_html__('Style 37','classymissy-core') => '37',
					esc_html__('Style 38','classymissy-core') => '38',
					esc_html__('Style 39','classymissy-core') => '39',
					esc_html__('Style 40','classymissy-core') => '40',
					esc_html__('Style 41','classymissy-core') => '41',
					esc_html__('Style 42','classymissy-core') => '42',
					esc_html__('Style 43','classymissy-core') => '43',
					esc_html__('Style 44','classymissy-core') => '44',
					esc_html__('Style 45','classymissy-core') => '45',
					esc_html__('Style 46','classymissy-core') => '46',
					esc_html__('Style 47','classymissy-core') => '47',
					esc_html__('Style 48','classymissy-core') => '48',
					esc_html__('Style 49','classymissy-core') => '49',
					esc_html__('Style 50','classymissy-core') => '50',      				
      			),
      			'description' => esc_html__( 'Choose map custom style.', 'classymissy-core' ),				
			),

			array(
				"type" => "colorpicker",
      			"heading" => esc_html__( "Custom Style", 'classymissy-core' ),
      			"param_name" => "custom_map_style",
      			"description" => esc_html__( "Select custom color for map", 'classymissy-core' ),
				'dependency' => array( 'element' => 'map_style', 'value' =>'custom' )				
			),

			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Map Width', 'classymissy-core' ),
				'param_name' => 'map_width',
				'save_always' => true,
				'edit_field_class' => 'vc_col-sm-6',
				'value' => '100%',
      			'description' => esc_html__( 'In px or % , 100% for a responsive map.', 'classymissy-core' ),
			),

			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Map Height', 'classymissy-core' ),
				'param_name' => 'map_height',
				'save_always' => true,
				'edit_field_class' => 'vc_col-sm-6',
				'value' => '500px',
      			'description' => esc_html__( 'In px or % ,eg: 500px or 30%.', 'classymissy-core' ),
			),

			array(
      			'type' => 'dropdown',
      			'heading' => esc_html__( 'Map Zoom Level', 'classymissy-core' ),
      			'param_name' => 'map_zoom_level',
      			'value' => array( 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20),
				'save_always' => true,
				'std' => 12
			),			

			// Controls
			array(
      			'type' => 'dropdown',
      			'heading' => esc_html__( 'Street View Control', 'classymissy-core' ),
      			'param_name' => 'map_street_view_control',
				'edit_field_class' => 'vc_col-sm-6',
      			'value' => array(
      				esc_html__('Enable','classymissy-core') => 'enable',
      				esc_html__('Disable','classymissy-core') => 'disable'
      			),
				'save_always' => true,
			),

			array(
      			'type' => 'dropdown',
      			'heading' => esc_html__( 'Map Type Control', 'classymissy-core' ),
      			'param_name' => 'map_type_control',
				'edit_field_class' => 'vc_col-sm-6',
      			'value' => array(
      				esc_html__('Enable','classymissy-core') => 'enable',
      				esc_html__('Disable','classymissy-core') => 'disable'
      			),
				'save_always' => true,
			),

			array(
      			'type' => 'dropdown',
      			'heading' => esc_html__( 'Zoom Control', 'classymissy-core' ),
      			'param_name' => 'map_zoom_control',
				'edit_field_class' => 'vc_col-sm-6',
      			'value' => array(
      				esc_html__('Enable','classymissy-core') => 'enable',
      				esc_html__('Disable','classymissy-core') => 'disable'
      			),
				'save_always' => true,
			),

			array(
      			'type' => 'dropdown',
      			'heading' => esc_html__( 'Scale Control', 'classymissy-core' ),
      			'param_name' => 'map_scale_control',
				'edit_field_class' => 'vc_col-sm-6',
      			'value' => array(
      				esc_html__('Enable','classymissy-core') => 'enable',
      				esc_html__('Disable','classymissy-core') => 'disable'
      			),
				'save_always' => true,
			),

			array(
      			'type' => 'dropdown',
      			'heading' => esc_html__( 'Scroll wheel', 'classymissy-core' ),
      			'param_name' => 'map_scroll_wheel',
				'edit_field_class' => 'vc_col-sm-6',
      			'value' => array(
      				esc_html__('Enable','classymissy-core') => 'enable',
      				esc_html__('Disable','classymissy-core') => 'disable'
      			),
				'save_always' => true,
			),

			array(
      			'type' => 'dropdown',
      			'heading' => esc_html__( ' Draggable?', 'classymissy-core' ),
      			'param_name' => 'map_draggable',
				'edit_field_class' => 'vc_col-sm-6',
      			'value' => array(
      				esc_html__('Enable','classymissy-core') => 'enable',
      				esc_html__('Disable','classymissy-core') => 'disable'
      			),
				'save_always' => true,
			),															
			// Controls
			
			// Markers
			array(
				'type' => 'param_group',
				'param_name' => 'map_markers',
				'group' => esc_html__( 'Markers', 'classymissy-core' ),
				'params' => array(

					array(
						'type' => 'textfield',
						'heading' => esc_html__( 'Latitude', 'classymissy-core' ),
						'param_name' => 'marker_latitude',
						'save_always' => true
					),

					array(
						'type' => 'textfield',
						'heading' => esc_html__( 'Longitude', 'classymissy-core' ),
						'param_name' => 'marker_longitude',
						'save_always' => true
					),

					array(
						'type' => 'textarea_raw_html',
						'heading' => esc_html__('Content', 'classymissy-core'),
						'param_name' => 'marker_content',
					),

					array(
		      			'type' => 'dropdown',
		      			'heading' => esc_html__( 'Icon', 'classymissy-core' ),
		      			'param_name' => 'marker_icon',
						'save_always' => true,
		      			'value' => array( 
		      				esc_html__('Built in','classymissy-core') => 'pin.png',
		      				esc_html__('Custom','classymissy-core') => 'custom',
		      				esc_html__('Black','classymissy-core') => 'black.png',
		      				esc_html__('Blue','classymissy-core') => 'blue.png',
		      				esc_html__('Gray','classymissy-core') => 'gray.png',
		      				esc_html__('Green','classymissy-core') => 'green.png',
		      				esc_html__('Magenta','classymissy-core') => 'magenta.png',
		      				esc_html__('Orange','classymissy-core') => 'orange.png',
		      				esc_html__('Purple','classymissy-core') => 'purple.png',
		      				esc_html__('Red','classymissy-core') => 'red.png',
		      				esc_html__('White','classymissy-core') => 'white.png',
		      				esc_html__('Yellow','classymissy-core') => 'yellow.png',
		      			),
		      			'description' => esc_html__( 'Select marker icon', 'classymissy-core' ),
		      			'std' => 'green.png',
					),

					array(
						"type" => "attach_image",
		      			"heading" => esc_html__( "Custom Marker icon", 'classymissy-core' ),
		      			"param_name" => "custom_marker_icon",
		      			"group" => esc_html__( 'Marker', 'classymissy-core' ),
		      			"description" => esc_html__( "Select custom marker icon", 'classymissy-core' ),
						'dependency' => array( 'element' => 'marker_icon', 'value' =>'custom' )				
					),

					array(
		      			'type' => 'dropdown',
		      			'heading' => esc_html__( 'Popup Window', 'classymissy-core' ),
		      			'group' => esc_html__( 'Marker', 'classymissy-core' ),
		      			'param_name' => 'popup',
		      			'value' => array(
		      				esc_html__('Hidden','classymissy-core') => 'hidden',
		      				esc_html__('Visible','classymissy-core') => 'visible'
		      			),
						'save_always' => true,
		      			'description' => esc_html__( 'The popup window which appears when a marker is clicked.', 'classymissy-core' ),
					),
				)
			)
			// markers
		)
	) );
}
