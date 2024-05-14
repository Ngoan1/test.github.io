<?php
/**
 * Shopping Ecommerce WP manage the Customizer options of frontpage panel.
 *
 * @subpackage shopping-ecommerce-wp
 * @since 1.0 
 */

/* top header section*/

// Toggle field for Enable/Disable top header
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_top_header_section',
		'label'    => __( 'Display Top Header', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_top_header_section_content',
		'default'  => '1',
		'priority' => 5,
	)
);

// Toggle field for Enable/Disable Social Icon
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_social_top_header_section',
		'label'    => __( 'Display Social Icons', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_top_header_section_content',
		'default'  => '1',
		'priority' => 10,
		'active_callback' => array(
			array(
				'setting'  => 'shopping_ecommerce_wp_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// facebook url
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'text',
		'settings' => 'shopping_ecommerce_wp_social_fb_button_link',
		'label'    => __( 'Facebook URL', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_top_header_section_content',
		'default'  => '#',
		'priority' => 15,
		'active_callback' => array(
			array(
				'setting'  => 'shopping_ecommerce_wp_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// twitter url
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'text',
		'settings' => 'shopping_ecommerce_wp_social_tw_button_link',
		'label'    => __( 'Twitter URL', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_top_header_section_content',
		'default'  => '#',
		'priority' => 20,
		'active_callback' => array(
			array(
				'setting'  => 'shopping_ecommerce_wp_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// instagram url
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'text',
		'settings' => 'shopping_ecommerce_wp_social_insta_button_link',
		'label'    => __( 'Instagram URL', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_top_header_section_content',
		'default'  => '#',
		'priority' => 25,
		'active_callback' => array(
			array(
				'setting'  => 'shopping_ecommerce_wp_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// linkedin url
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'text',
		'settings' => 'shopping_ecommerce_wp_social_lkdn_button_link',
		'label'    => __( 'Linkedin URL', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_top_header_section_content',
		'default'  => '#',
		'priority' => 30,
		'active_callback' => array(
			array(
				'setting'  => 'shopping_ecommerce_wp_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// pinterest url
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'text',
		'settings' => 'shopping_ecommerce_wp_social_pint_button_link',
		'label'    => __( 'Pinterest URL', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_top_header_section_content',
		'default'  => '#',
		'priority' => 35,
		'active_callback' => array(
			array(
				'setting'  => 'shopping_ecommerce_wp_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// youtube url
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'text',
		'settings' => 'shopping_ecommerce_wp_social_youtube_button_link',
		'label'    => __( 'Youtube URL', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_top_header_section_content',
		'default'  => '#',
		'priority' => 40,
		'active_callback' => array(
			array(
				'setting'  => 'shopping_ecommerce_wp_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Toggle field for Enable/Disable new tab for social icon url
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_new_tab_top_header_section',
		'label'    => __( 'Display Social URL in new Window', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_top_header_section_content',
		'default'  => '1',
		'priority' => 45,
		'active_callback' => array(
			array(
				'setting'  => 'shopping_ecommerce_wp_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Toggle field for Enable/Disable Contact Number
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_contact_top_header_section',
		'label'    => __( 'Display Contact Number', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_top_header_section_content',
		'default'  => '1',
		'priority' => 50,
		'active_callback' => array(
			array(
				'setting'  => 'shopping_ecommerce_wp_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for Contact Number
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'text',
		'settings' => 'shopping_ecommerce_wp_contact_top_header_section',
		'label'    => __( 'Contact Number', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_top_header_section_content',
        'default'  => '+1-200-196-348-24',
		'priority' => 55,
		'active_callback' => array(
			array(
				'setting'  => 'shopping_ecommerce_wp_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Toggle field for Enable/Disable Address
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_address_top_header_section',
		'label'    => __( 'Display Address', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_top_header_section_content',
		'default'  => '1',
		'priority' => 60,
		'active_callback' => array(
			array(
				'setting'  => 'shopping_ecommerce_wp_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for Address
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'text',
		'settings' => 'shopping_ecommerce_wp_address_top_header_section',
		'label'    => __( 'Address', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_top_header_section_content',
        'default'  => '272 California, USA',
		'priority' => 65,
		'active_callback' => array(
			array(
				'setting'  => 'shopping_ecommerce_wp_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Toggle field for Enable/Disable Timing
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_timing_top_header_section',
		'label'    => __( 'Display Timing', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_top_header_section_content',
		'default'  => '1',
		'priority' => 70,
		'active_callback' => array(
			array(
				'setting'  => 'shopping_ecommerce_wp_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for Timing
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'text',
		'settings' => 'shopping_ecommerce_wp_timing_top_header_section',
		'label'    => __( 'Timing', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_top_header_section_content',
        'default'  => 'Mon - Sat: 8.00 - 18.00',
		'priority' => 75,
		'active_callback' => array(
			array(
				'setting'  => 'shopping_ecommerce_wp_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

/* end of top header section*/

/* general options */

// Text field for general options
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'text',
		'settings' => 'shopping_ecommerce_wp_readmore_general_section',
		'label'    => __( 'Read More Label', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_general_section_content',
		'default'  => 'Read More',	
		'priority' => 5,
	)
);

// excerpt length 
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'number',
		'settings' => 'shopping_ecommerce_wp_excerpt_general_section',
		'label'    => __( 'Excerpt Length', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_general_section_content',
		'description' => __( '0 length will not show the excerpt.', 'shopping-ecommerce-wp' ),
		'default'  => '55',	
		'priority' => 5,
	)
);

/* end of general options */

/* layout options */

// Select field for Theme Layout
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'select',
		'settings' => 'shopping_ecommerce_wp_theme_layout_section',
		'label'    => __( 'Theme Layout', 'shopping-ecommerce-wp' ),
		'description' => __( 'Box layout will be visible at minimum 1200px display', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_layout_section_content',
		'default'  => 'wide',	
		'priority' => 5,
		'choices'  => array(
			'wide' => __( 'Wide', 'shopping-ecommerce-wp' ),
			'box'  => __( 'Box',  'shopping-ecommerce-wp' ),
		),
	)
);

// Select field for sidebar position
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'select',
		'settings' => 'shopping_ecommerce_wp_sidebar_layout_section',
		'label'    => __( 'Sidebar Position', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_layout_section_content',
		'default'  => 'right',	
		'priority' => 10,
		'choices'  => array(
			'right' => __( 'Right Sidebar', 'shopping-ecommerce-wp'),
			'left'  => __( 'Left Sidebar',  'shopping-ecommerce-wp'),
			'no'    => __( 'No Sidebar',  'shopping-ecommerce-wp'),
		),
	)
);

/* end of layout options */

/* blog post options */

// Toggle field for Enable/Disable Author
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_author_blog_section',
		'label'    => __( 'Display Author', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_blog_post_section_content',
		'default'  => '1',
		'priority' => 5,
	)
);

// Toggle field for Enable/Disable Comment Count
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_comment_blog_section',
		'label'    => __( 'Display Comments Count', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_blog_post_section_content',
		'default'  => '1',
		'priority' => 10,
	)
);

// Toggle field for Enable/Disable Visit Count
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_vcount_blog_section',
		'label'    => __( 'Display Visit Count', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_blog_post_section_content',
		'default'  => '1',
		'priority' => 15,
	)
);

// Toggle field for Enable/Disable Date
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_date_blog_section',
		'label'    => __( 'Display Date on Image', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_blog_post_section_content',
		'default'  => '1',
		'priority' => 20,
	)
);

// Toggle field for Enable/Disable Featured Image
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_fimage_blog_section',
		'label'    => __( 'Display Featured Image', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_blog_post_section_content',
		'default'  => '1',
		'priority' => 25,
	)
);

/* end of blog post options */

/* single post options */

// Toggle field for Enable/Disable Author
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_author_single_section',
		'label'    => __( 'Display Author', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_single_post_section_content',
		'default'  => '1',
		'priority' => 5,
	)
);

// Toggle field for Enable/Disable Comment Count
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_comment_single_section',
		'label'    => __( 'Display Comments Count', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_single_post_section_content',
		'default'  => '1',
		'priority' => 10,
	)
);

// Toggle field for Enable/Disable Date
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_date_single_section',
		'label'    => __( 'Display Date', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_single_post_section_content',
		'default'  => '1',
		'priority' => 15,
	)
);

// Toggle field for Enable/Disable Visit Count
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_vcount_single_section',
		'label'    => __( 'Display Visit Count', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_single_post_section_content',
		'default'  => '1',
		'priority' => 18,
	)
);

// Toggle field for Enable/Disable Visit Count
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_tags_single_section',
		'label'    => __( 'Display Tags', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_single_post_section_content',
		'default'  => '1',
		'priority' => 20,
	)
);

// Toggle field for Enable/Disable Featured Image
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_fimage_single_section',
		'label'    => __( 'Display Featured Image', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_single_post_section_content',
		'default'  => '1',
		'priority' => 25,
	)
);

/* end of single post options */

/* footer options */

// Toggle field for Enable/Disable Copyright
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_cpright_footer_section',
		'label'    => __( 'Display Copyright Footer', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_footer_section_content',
		'default'  => '1',
		'priority' => 5,
	)
);

// Textarea field for Footer section content
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'textarea',
		'settings' => 'shopping_ecommerce_wp_cpright_footer_section',
		'label'    => __( 'Team Title', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_footer_section_content',
		'default'  => 'Powered by WordPress',	
		'priority' => 10,
		'active_callback' => array(
			array(
				'setting'  => 'shopping_ecommerce_wp_enable_cpright_footer_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Toggle field for Enable/Disable Social Icon
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_logo_footer_section',
		'label'    => __( 'Display Logo', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_footer_section_content',
		'default'  => '1',
		'priority' => 15,
	)
);

Kirki::add_field( 'shopping_ecommerce_wp_config', [
	'type'        => 'image',
	'settings'    => 'shopping_ecommerce_wp_logo_footer_section',
	'label'       => __( 'Footer Logo', 'shopping-ecommerce-wp' ),
	'description' => __( 'upload footer logo here', 'shopping-ecommerce-wp' ),
	'section'     => 'shopping_ecommerce_wp_footer_section_content',
	'default'     => '',
	'priority' => 20,
	'active_callback' => array(
			array(
				'setting'  => 'shopping_ecommerce_wp_enable_logo_footer_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
] );

// Text field for Footer section title
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'text',
		'settings' => 'shopping_ecommerce_wp_title_footer_section',
		'label'    => __( 'Footer Title', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_footer_section_content',
		'default'  => 'TAKE OWNERSHIP OF YOUR BRAND',	
		'priority' => 25,
	)
);

// Text field for Footer section description
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'text',
		'settings' => 'shopping_ecommerce_wp_description_footer_section',
		'label'    => __( 'Footer Description', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_footer_section_content',
		'default'  => 'Finally, a partner that handles the heavy lifting for you.',	
		'priority' => 30,
	)
);

// Toggle field for Enable/Disable Social Icon
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_social_footer_section',
		'label'    => __( 'Display Social Icon', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_footer_section_content',
		'default'  => '1',
		'priority' => 35,
	)
);

// facebook url
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'text',
		'settings' => 'shopping_ecommerce_wp_social_fb_button_link_footer',
		'label'    => __( 'Facebook URL', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_footer_section_content',
		'default'  => '#',
		'priority' => 40,
		'active_callback' => array(
			array(
				'setting'  => 'shopping_ecommerce_wp_enable_social_footer_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// instagram url
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'text',
		'settings' => 'shopping_ecommerce_wp_social_insta_button_link_footer',
		'label'    => __( 'Instagram URL', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_footer_section_content',
		'default'  => '#',
		'priority' => 45,
		'active_callback' => array(
			array(
				'setting'  => 'shopping_ecommerce_wp_enable_social_footer_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// linkedin url
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'text',
		'settings' => 'shopping_ecommerce_wp_social_lkdn_button_link_footer',
		'label'    => __( 'Linkedin URL', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_footer_section_content',
		'default'  => '#',
		'priority' => 50,
		'active_callback' => array(
			array(
				'setting'  => 'shopping_ecommerce_wp_enable_social_footer_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Toggle field for Enable/Disable new tab for social icon url
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_new_tab_footer_section',
		'label'    => __( 'Display Social URL in new Window', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_footer_section_content',
		'default'  => '1',
		'priority' => 55,
		'active_callback' => array(
			array(
				'setting'  => 'shopping_ecommerce_wp_enable_social_footer_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for general options
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'text',
		'settings' => 'shopping_ecommerce_wp_separator_title_footer_section',
		'label'    => __( 'Footer Separator Title', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_footer_section_content',
		'default'  => 'Start a conversation',	
		'priority' => 60,
	)
);

/* end of footer options */

/* advance options */

// Toggle field for Enable/Disable Sticky Header
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_sticky_header',
		'label'    => __( 'Enable Sticky Header', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_advance_option_content',
		'default'  => '1',
		'priority' => 5,
	)
);

Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_preloader',
		'label'    => __( 'Enable Preloader', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_advance_option_content',
		'default'  => '1',
		'priority' => 10,
	)
);

Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'     => 'toggle',
		'settings' => 'shopping_ecommerce_wp_enable_scroll_top',
		'label'    => __( 'Enable Scroll to Top', 'shopping-ecommerce-wp' ),
		'section'  => 'shopping_ecommerce_wp_advance_option_content',
		'default'  => '1',
		'priority' => 15,
	)
);
/* end of advance options */