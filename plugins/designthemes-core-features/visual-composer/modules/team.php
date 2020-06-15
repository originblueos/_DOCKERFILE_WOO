<?php add_action( 'vc_before_init', 'dt_sc_team_vc_map' );
function dt_sc_team_vc_map() {
	vc_map( array(
		"name" => esc_html__( "Team", 'classymissy-core' ),
		"base" => "dt_sc_team",
		"icon" => "dt_sc_team",
		"category" => DT_VC_CATEGORY,
		"params" => array(

			# Name
			array(
				'type' => 'textfield',
				'param_name' => 'name',
				'heading' => esc_html__( 'Name', 'classymissy-core' ),
				'description' => esc_html__( 'Enter name', 'classymissy-core' )
			),

			# Role
			array(
				'type' => 'textfield',
				'param_name' => 'role',
				'heading' => esc_html__( 'Role', 'classymissy-core' ),
				'description' => esc_html__( 'Enter role', 'classymissy-core' )
			),

			# Image
			array(
				'type' => 'attach_image',
				'heading' => esc_html__('Image','classymissy-core'),
                'param_name' => 'image'
            ),

            # Team style
            array(
				'type' => 'dropdown',
				'heading' => esc_html__('Team Style','classymissy-core'),
            	'param_name' => 'teamstyle',
            	'value' => array(
            		esc_html__('Default','classymissy-core') => '',
				esc_html__('Simple','classymissy-core') => 'simple',
				esc_html__('Social on hover','classymissy-core') => 'hide-social-show-on-hover',
				esc_html__('Social and Role on hover','classymissy-core') => 'hide-social-role-show-on-hover',
				esc_html__('Details on hover','classymissy-core') => 'hide-details-show-on-hover',
				esc_html__('Show details & Social on hover','classymissy-core') => 'hide-social-show-on-hover details-on-image',
				esc_html__('Horizontal','classymissy-core') => 'type2',
				esc_html__('Rounded','classymissy-core') => 'hide-social-show-on-hover rounded'
            	)
            ),

            # Social Icon Style
            array(
				'type' => 'dropdown',
				'heading' => esc_html__('Social Icon Style','classymissy-core'),
            	'param_name' => 'socialstyle',
            	'value' => array(
            		esc_html__('Default','classymissy-core') => '' ,
            		esc_html__('Rounded Border','classymissy-core') => 'rounded-border' ,
            		esc_html__('Rounded Square','classymissy-core') => 'rounded-square' ,
            		esc_html__('Square Border','classymissy-core') => 'square-border' ,
            		esc_html__('Diamond Square Border','classymissy-core') => 'diamond-square-border' ,
            		esc_html__('Hexagon Border','classymissy-core') => 'hexagon-border'
            	)
            ),

            # Facebook
			array(
				'type' => 'textfield',
				'param_name' => 'facebook',
				'heading' => esc_html__( 'Facebook', 'classymissy-core' ),
			),

            # Twitter
			array(
				'type' => 'textfield',
				'param_name' => 'twitter',
				'heading' => esc_html__( 'Twitter', 'classymissy-core' ),
			),

            # Google
			array(
				'type' => 'textfield',
				'param_name' => 'google',
				'heading' => esc_html__( 'Google', 'classymissy-core' ),
			),

            # Linkedin
			array(
				'type' => 'textfield',
				'param_name' => 'linkedin',
				'heading' => esc_html__( 'Linkedin', 'classymissy-core' ),
			),

      		// Content
            array(
            	'type' => 'textarea_html',
            	'heading' => esc_html__('Content','classymissy-core'),
            	'param_name' => 'content',
            	'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at.'
            ),

      		# Class
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Extra class name", 'classymissy-core' ),
      			"param_name" => "class",
      			'description' => esc_html__('Style particular icon box element differently - add a class name and refer to it in custom CSS','classymissy-core')
      		)			
		)
	) );	
}?>