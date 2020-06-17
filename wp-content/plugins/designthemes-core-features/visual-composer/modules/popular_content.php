<?php add_action( 'vc_before_init', 'dt_sc_popular_content_vc_map' );
function dt_sc_popular_content_vc_map() {
	vc_map( array(
		"name" => esc_html__( "Popular content", 'classymissy-core' ),
		"base" => "dt_sc_popular_content",
		"icon" => "dt_sc_popular_content",
		"category" => DT_VC_CATEGORY,
		"params" => array(

			# Title
			array(
				'type' => 'textfield',
				'param_name' => 'title',
				'heading' => esc_html__( 'Title', 'classymissy-core' ),
				'description' => esc_html__( 'Enter title', 'classymissy-core' )
			),

			# Image
			array(
				'type' => 'attach_image',
				'heading' => esc_html__('Image','classymissy-core'),
                'param_name' => 'image'
            ),

			# Duration
			array(
				'type' => 'textfield',
				'param_name' => 'duration',
				'heading' => esc_html__( 'Duration', 'classymissy-core' ),
				'description' => esc_html__( 'Enter duration', 'classymissy-core' )
			),

			# Price
			array(
				'type' => 'textfield',
				'param_name' => 'price',
				'heading' => esc_html__( 'Price', 'classymissy-core' ),
				'description' => esc_html__( 'Enter price', 'classymissy-core' )
			),

			# Content
			array(
				'type' => 'textarea_html',
				'heading' => esc_html__('Add content','classymissy-core'),
				'param_name' => 'content',
				'value' => ''
			)
		)
	) );
}?>