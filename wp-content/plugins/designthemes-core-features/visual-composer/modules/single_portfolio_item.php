<?php add_action( 'vc_before_init', 'dt_sc_portfolio_item_vc_map' );
function dt_sc_portfolio_item_vc_map() {
	vc_map( array(
		"name" => esc_html__( "Single Portfolio Item", 'classymissy-core' ),
		"base" => "dt_sc_portfolio_item",
		"icon" => "dt_sc_portfolio_item",
		"category" => DT_VC_CATEGORY,
		"params" => array(

			// Post ID
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'ID', 'classymissy-core' ),
				'param_name' => 'id',
				'description' => esc_html__( 'Enter post ID', 'classymissy-core' ),
				'admin_label' => true
			),

			// Post style
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Style','classymissy-core'),
				'param_name' => 'style',
				'value' => array(
					esc_html__('Modern Title','classymissy-core') => 'type1', 
					esc_html__('Title & Icons Overlay','classymissy-core') => 'type2', 
					esc_html__('Title Overlay','classymissy-core') => 'type3', 
					esc_html__('Icons Only','classymissy-core') => 'type4', 
					esc_html__('Classic','classymissy-core') => 'type5', 
					esc_html__('Minimal Icons','classymissy-core') => 'type6', 
					esc_html__('Presentation','classymissy-core') => 'type7', 
					esc_html__('Girly','classymissy-core') => 'type8', 
					esc_html__('Art','classymissy-core') => 'type9' 
				),
				'std' => 'type1'
			)
		)
	) );
}?>