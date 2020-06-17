<?php add_action( 'vc_before_init', 'dt_sc_portfolios_vc_map' );
function dt_sc_portfolios_vc_map() {

	$arr = array( esc_html__('Yes','classymissy-core') => 'yes', esc_html__('No','classymissy-core') => 'no' );

	vc_map( array(
		"name" => esc_html__( "Portfolio Items", 'classymissy-core' ),
		"base" => "dt_sc_portfolios",
		"icon" => "dt_sc_portfolios",
		"category" => DT_VC_CATEGORY,
		"params" => array(

			// Post Count
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Post Counts', 'classymissy-core' ),
				'param_name' => 'count',
				'description' => esc_html__( 'Enter post count', 'classymissy-core' ),
				'admin_label' => true
			),

			// Post column
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Columns','classymissy-core'),
				'param_name' => 'column',
				'value' => array(
					esc_html__('II Columns','classymissy-core') => 2 ,
					esc_html__('III Columns','classymissy-core') => 3,
					esc_html__('IV Columns','classymissy-core') => 4,

				),
				'std' => '3'
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
				'std' => 'type1',
				'admin_label' => true
			),

			// Allow Grid Space
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Allow Grid Space','classymissy-core'),
				'param_name' => 'allow_gridspace',
				'value' => $arr
			),

			// Allow Filter
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Allow Filter','classymissy-core'),
				'param_name' => 'allow_filter',
				'value' => $arr
			),

			// Term ID(s)
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Terms', 'classymissy-core' ),
				'param_name' => 'terms',
				'description' => esc_html__( 'Enter Portfolio Terms', 'classymissy-core' )
			),						
		)
	) );
} ?>