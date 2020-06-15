<?php add_action( 'vc_before_init', 'dt_sc_pricing_table_item_vc_map' );
function dt_sc_pricing_table_item_vc_map() {
	vc_map( array( 
		"name" => esc_html__( "Pricing Box 1", 'classymissy-core' ),
		"base" => "dt_sc_pricing_table_item",
		"icon" => "dt_sc_pricing_table_item",
		"category" => DT_VC_CATEGORY,		
		"params" => array(

			// Heading
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Title", 'classymissy-core' ),
				'admin_label' => true,
      			"param_name" => "heading"
      		),

			// Sub Title
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Sub title", 'classymissy-core' ),
				'admin_label' => true,
      			"param_name" => "subtitle"
      		),

      		// selected
      		array(
      			'type' => 'checkbox',
      			'heading' => esc_html__( 'Is active?', 'classymissy-core' ),
				'admin_label' => true,
      			'param_name' => 'highlight',
      			'description' => esc_html__( 'If checked pricing box will be highlighted', 'classymissy-core' ),
      			'value' => array( esc_html__( 'Yes', 'classymissy-core' ) => 'yes' )
      		),

      		// Thumb
			array(
				'type' => 'attach_image',
				'heading' => esc_html__( 'Image', 'classymissy-core' ),
				'param_name' => 'thumb',
				'description' => esc_html__( 'Select image from media library', 'classymissy-core' ),
			),

			// Currency
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Currency", 'classymissy-core' ),
      			"param_name" => "currency",
      			"description" => esc_html__("Enter the price for this package e.g. $157.99 enter $ here",'classymissy-core'),
      		),

			// Price
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Price", 'classymissy-core' ),
      			"param_name" => "price",
      			"description" => esc_html__("Enter the price for this package e.g. $157.99 enter 157 here",'classymissy-core'),
      			),

			// Price decimal
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Price", 'classymissy-core' ),
      			"param_name" => "decimal",
      			"description" => esc_html__("Enter the price for this package e.g. $157.99 enter .99 here",'classymissy-core')
      		),

			// Price Unit
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Price Unit", 'classymissy-core' ),
      			"param_name" => "permonth",
      			"description" => esc_html__("Enter the price unit for this package e.g. / Month",'classymissy-core')
      		),

      		// Content
      		array(
      			'type' => 'textarea_html',
      			'heading' => esc_html__( 'Content', 'classymissy-core' ),
      			'param_name' => 'content',
				'value' => '<ul><li>Lorem ipsum dolor sit</li><li>Praesent convallis nibh</li><li>Nullam ac sapien sit</li><li>Phasellus auctor augue</li></ul>'
      		),

      		# URL
      		array(
      			'type' => 'vc_link',
      			'heading' => esc_html__( 'URL (Link)', 'classymissy-core' ),
      			'param_name' => 'link',
      			'description' => esc_html__( 'Add link to this package', 'classymissy-core' )
      		)      		      		      					      		
		)
	) );
}?>