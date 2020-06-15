<?php add_action( 'vc_before_init', 'dt_sc_twitter_tweets_vc_map' );
function dt_sc_twitter_tweets_vc_map() {

	vc_map( array( 
		"name" => esc_html__( "Twitter tweets", 'classymissy-core' ),
		"base" => "dt_sc_twitter_tweets",
		"icon" => "dt_sc_twitter_tweets",
		"category" => DT_VC_CATEGORY,
		"params" => array(

			# Consumer Key
			array(
				'type' => 'textfield',
				'param_name' => 'consumerkey',
				'heading' => esc_html__( 'Consumer key', 'classymissy-core' ),
				'description' => esc_html__( 'Enter Consumer key', 'classymissy-core' ),
			),

			# Consumer secret
			array(
				'type' => 'textfield',
				'param_name' => 'consumersecret',
				'heading' => esc_html__( 'Consumer secret', 'classymissy-core' ),
				'description' => esc_html__( 'Enter Consumer secret', 'classymissy-core' ),
			),

			# Access token 
			array(
				'type' => 'textfield',
				'param_name' => 'accesstoken',
				'heading' => esc_html__( 'Access token', 'classymissy-core' ),
				'description' => esc_html__( 'Enter Access token', 'classymissy-core' ),
			),

			# Access token secret
			array(
				'type' => 'textfield',
				'param_name' => 'accesstokensecret',
				'heading' => esc_html__( 'Access token secret', 'classymissy-core' ),
				'description' => esc_html__( 'Enter Access token secret', 'classymissy-core' ),
			),

			# Consumer Key
			array(
				'type' => 'textfield',
				'param_name' => 'username',
				'heading' => esc_html__( 'Twitter username', 'classymissy-core' ),
				'description' => esc_html__( 'Enter Twitter username', 'classymissy-core' ),
			),

			# Avatar
			array(
				'type' => 'dropdown',
				'param_name' => 'useravatar',
				'heading' => esc_html__('Show avatar?','classymissy-core'),
				'value' => array( esc_html__('Yes','classymissy-core') => 'yes' , esc_html__('No','classymissy-core') => 'no' ),
				'std' => 'no'
			)
		)		
	) );
}?>