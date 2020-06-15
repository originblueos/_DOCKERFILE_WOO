<?php add_action( 'vc_before_init', 'dt_sc_partners_carousel_vc_map' );
function dt_sc_partners_carousel_vc_map() {
	vc_map( array(
		"name" => esc_html__( "Partners carousel", 'classymissy-core' ),
		"base" => "dt_sc_partners_carousel",
		"icon" => "dt_sc_partners_carousel",
		"category" => DT_VC_CATEGORY,
		'description' => esc_html__( 'Partners carousel with images', 'classymissy-core' ),
		"params" => array(
			
			#Image
			array(
				'type' => 'attach_images',
				'heading' => esc_html__( 'Images', 'classymissy-core' ),
				'param_name' => 'images',
				'description' => esc_html__( 'Select partner images from media library', 'classymissy-core' )
			),

			#Scroll
			array(
				'type' => 'textfield',
				'param_name' => 'scroll',
				'heading' => esc_html__( 'Scroll', 'classymissy-core' ),
				'value' => '3',				
				'description' => esc_html__( 'The number of items to scroll at once', 'classymissy-core' )
			),

			#Visible
			array(
				'type' => 'textfield',
				'param_name' => 'visible',
				'heading' => esc_html__( 'Visible', 'classymissy-core' ),
				'value' => '3',
 				'description' => esc_html__( 'The number of items to show at once', 'classymissy-core' )
			)
		)	 
	) );
}?>