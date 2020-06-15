<?php add_action( 'vc_before_init', 'dt_sc_mc_newsletter_vc_map' );
function dt_sc_mc_newsletter_vc_map() {
	vc_map( array(
		"name" => esc_html__("Mailchimp Newsletter", 'classymissy-core'),
		"base" => "dt_sc_mc_newsletter",
		"icon" => "dt_sc_mc_newsletter",
		"category" => DT_VC_CATEGORY,
		"description" => esc_html__("Add mailchimp newsletter signup form",'classymissy-core'),
		"params" => array(

			# Type
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Type','classymissy-core'),
				'param_name' => 'type',
				'value' => array(
					esc_html__('Type 1','classymissy-core') => 'type1',
					esc_html__('Type 2','classymissy-core') => 'type2',
					esc_html__('Type 3','classymissy-core') => 'type3',
					esc_html__('Type 4','classymissy-core') => 'type4',
					esc_html__('Type 5','classymissy-core') => 'type5',
					esc_html__('Type 6','classymissy-core') => 'type6',
					esc_html__('Type 7','classymissy-core') => 'type7',
				),
				'std' => 'type1'				
			),

			# Main Title
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Main Title', 'classymissy-core' ),
				'param_name' => 'title'
			),

			# Sub Title
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Sub Title', 'classymissy-core' ),
				'param_name' => 'subtitle',
				'dependency' => array( 'element' => 'type', 'value' => array( 'type2', 'type3', 'type4', 'type5', 'type6', 'type7' ) )
			),

			# Tooltip
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Tooltip', 'classymissy-core' ),
				'param_name' => 'tooltip',
				'dependency' => array( 'element' => 'type', 'value' => 'type7' )
			),

			# List id
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'List ID', 'classymissy-core' ),
				'param_name' => 'listid',
			),

			# Name
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Name Field', 'classymissy-core' ),
				'param_name' => 'name',
				'value' => esc_html__('Your Name', 'classymissy-core'),
				'dependency' => array( 'element' => 'type', 'value' => array( 'type1', 'type2', 'type3', 'type4', 'type5' ) )
			),

			# Email
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Email Field', 'classymissy-core' ),
				'param_name' => 'email',
				'value' => esc_html__('Your Email Address', 'classymissy-core')
			),

			# Button
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Button Field', 'classymissy-core' ),
				'param_name' => 'button',
				'value' => esc_html__('Subscribe Now', 'classymissy-core')
			),

			# Show Name
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Show Name Field', 'classymissy-core' ),
				'param_name' => 'show_name',
				'value' => array( esc_html__('Yes','classymissy-core') => 'true', esc_html__('No','classymissy-core') => 'false' ),
				'dependency' => array( 'element' => 'type', 'value' => array( 'type1', 'type2', 'type3', 'type4', 'type5' ) ),
				'std' => 'false'
			),

			# Content - type = Decoration , Triangle
			array(
				'type' => 'textarea_html',
				'heading' => esc_html__( 'Content', 'classymissy-core' ),
				'param_name' => 'content',
				'value' => '<br><p>Sign-up to get the latest offers and news and stay updated.</p><i>Note: We do not spam</i><br>',
				'dependency' => array( 'element' => 'type', 'value' => array( 'type2', 'type3', 'type4', 'type5', 'type6', 'type7' ) )
			),			

			# Extra class name
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Extra class name', 'classymissy-core' ),
				'param_name' => 'class',
				'description' => esc_html__( 'Style particular element differently - add a class name and refer to it in custom CSS', 'classymissy-core' )
      		)
		)
	) );	
}?>