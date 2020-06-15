<?php add_action( 'vc_before_init', 'dt_sc_image_flip_vc_map' );
function dt_sc_image_flip_vc_map() {
	vc_map( array(
		"name" => esc_html__("Image Flip", 'classymissy-core'),
		"base" => "dt_sc_image_flip",
		"icon" => "dt_sc_image_flip",
		"category" => DT_VC_CATEGORY,
		"description" => esc_html__("Add image flip",'classymissy-core'),
		"params" => array(

			# Image 1
			array(
				'type' => 'attach_image',
				'heading' => esc_html__('Image 1 URL', 'classymissy-core'),
				'param_name' => 'image1',
			),

			# Image 2
			array(
				'type' => 'attach_image',
				'heading' => esc_html__('Image 2 URL', 'classymissy-core'),
				'param_name' => 'image2',
			),

			# Link
			array(
				'type' => 'vc_link',
				'heading' => esc_html__('Link', 'classymissy-core'),
				'param_name' => 'link'				
			)
		)
	) );
}?>