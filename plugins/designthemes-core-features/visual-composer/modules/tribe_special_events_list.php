<?php add_action( 'vc_before_init', 'dt_sc_special_events_list_vc_map' );
function dt_sc_special_events_list_vc_map() {
	vc_map( array(
		"name" => esc_html__( "Special Events List", 'classymissy-core' ),
		"base" => "dt_sc_special_events_list",
		"icon" => "dt_sc_special_events_list",
		"category" => DT_VC_CATEGORY .' ( '.esc_html__('Events','classymissy-core').')',
		"params" => array(

			// Limit
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Limit', 'classymissy-core' ),
				'param_name' => 'limit',
				'description' => esc_html__( 'Enter limit', 'classymissy-core' )
			),

			// Categories
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Categories', 'classymissy-core' ),
				'param_name' => 'categories',
				'description' => esc_html__( 'Enter categories', 'classymissy-core' )
			),									

			// Post type
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Type','classymissy-core'),
				'param_name' => 'type',
				'value' => array(
					esc_html__('Type 1','classymissy-core') => 'type1', 
					esc_html__('Type 2','classymissy-core') => 'type2', 
					esc_html__('Type 3','classymissy-core') => 'type3', 
					esc_html__('Type 4','classymissy-core') => 'type4', 
					esc_html__('Type 5','classymissy-core') => 'type5'
				),
				'std' => 'type1'
			)			
		)
	) );
}?>