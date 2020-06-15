<?php add_action( 'vc_before_init', 'dt_sc_event_caption_vc_map' );
function dt_sc_event_caption_vc_map() {
	vc_map( array(
		"name" => esc_html__("Event Caption", 'classymissy-core'),
		"base" => "dt_sc_event_caption",
		"icon" => "dt_sc_event_caption",
		"category" => DT_VC_CATEGORY,
		"description" => esc_html__("Add event caption",'classymissy-core'),
		"params" => array(

			# Main Title
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Main Title', 'classymissy-core' ),
				'param_name' => 'title',
			),

			# Sub Title 1
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Sub Title 1', 'classymissy-core' ),
				'param_name' => 'subtitle1',
			),

			# Sub Title 2
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Sub Title 2', 'classymissy-core' ),
				'param_name' => 'subtitle2',
			),

			# Image
			array(
				'type' => 'attach_image',
				'heading' => esc_html__( 'Image', 'classymissy-core' ),
				'param_name' => 'image',
				'description' => esc_html__( 'Select image from media library', 'classymissy-core' ),
			),

      		// Content
            array(
            	'type' => 'textarea_html',
            	'heading' => esc_html__('Content','classymissy-core'),
            	'param_name' => 'content',
            	'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.'
            )			
		)		
	) );
}?>