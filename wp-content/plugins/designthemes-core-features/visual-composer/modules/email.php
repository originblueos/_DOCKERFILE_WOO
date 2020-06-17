<?php add_action( 'vc_before_init', 'dt_sc_email_vc_map' );
function dt_sc_email_vc_map() {
	vc_map( array(
		"name" => esc_html__( "Email id", 'classymissy-core' ),
		"base" => "dt_sc_email",
		"icon" => "dt_sc_email",
		"category" => DT_VC_CATEGORY,
		"params" => array(

			# Email id
			array(
				'type' => 'textfield',
				'param_name' => 'text',
				'heading' => esc_html__( 'Email id', 'classymissy-core' ),
      			'admin_label' => true,
				'description' => esc_html__( 'Enter valid Emailid', 'classymissy-core' )
			),

			# Class
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Extra class name", 'classymissy-core' ),
      			"param_name" => "class",
      			"value" => 'icon icon-mail',
      			'description' => esc_html__('Style particular element differently - add a class name and refer to it in custom CSS','classymissy-core')
      		)						
		)
	) );	
}?>