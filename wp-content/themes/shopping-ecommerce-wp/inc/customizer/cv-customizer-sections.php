<?php
/**
 * Shopping Ecommerce WP manage the Customizer sections.
 *
 * @subpackage shopping-ecommerce-wp
 * @since 1.0 
 */

/**
 * Top Header Options
 */
Kirki::add_section( 'shopping_ecommerce_wp_top_header_section_content', array(
	'title'    => __( 'Top Header Options', 'shopping-ecommerce-wp' ),
	'panel'    => 'shopping_ecommerce_wp_options_panel',
	'description' => __( 'Personalize the settings top header.', 'shopping-ecommerce-wp' ),
	'priority' => 5,
) );

/**
 * General Options
 */
Kirki::add_section( 'shopping_ecommerce_wp_general_section_content', array(
	'title'    => __( 'General Options', 'shopping-ecommerce-wp' ),
	'panel'    => 'shopping_ecommerce_wp_options_panel',
	'description' => __( 'Personalize the settings of your theme.', 'shopping-ecommerce-wp' ),
	'priority' => 8,
) );

/**
 * Layout Options
 */
Kirki::add_section( 'shopping_ecommerce_wp_layout_section_content', array(
	'title'    => __( 'Layout Options', 'shopping-ecommerce-wp' ),
	'panel'    => 'shopping_ecommerce_wp_options_panel',
	'description' => __( 'Personalize the layout settings of your theme.', 'shopping-ecommerce-wp' ),
	'priority' => 10,
) );

/**
 * Blog Post Options
 */
Kirki::add_section( 'shopping_ecommerce_wp_blog_post_section_content', array(
	'title'    => __( 'Blog Post Options', 'shopping-ecommerce-wp' ),
	'panel'    => 'shopping_ecommerce_wp_options_panel',
	'description' => __( 'Setting will also apply on archieve and search page.', 'shopping-ecommerce-wp' ),
	'priority' => 12,
) );

/**
 * Single Post Options
 */
Kirki::add_section( 'shopping_ecommerce_wp_single_post_section_content', array(
	'title'    => __( 'Single Post Options', 'shopping-ecommerce-wp' ),
	'panel'    => 'shopping_ecommerce_wp_options_panel',
	'description' => __( 'Setting will apply on the content of single posts.', 'shopping-ecommerce-wp' ),
	'priority' => 14,
) );

/**
 * Footer Options
 */
Kirki::add_section( 'shopping_ecommerce_wp_footer_section_content', array(
	'title'    => __( 'Footer Options', 'shopping-ecommerce-wp' ),
	'panel'    => 'shopping_ecommerce_wp_options_panel',
	'description' => __( 'Personalize the footer settings of your theme.', 'shopping-ecommerce-wp' ),
	'priority' => 16,
) );

/**
 * Advance Options
 */
Kirki::add_section( 'shopping_ecommerce_wp_advance_option_content', array(
	'title'    => __( 'Advance Options', 'shopping-ecommerce-wp' ),
	'panel'    => 'shopping_ecommerce_wp_options_panel',
	'description' => __( 'Personalize the Advance settings of your theme.', 'shopping-ecommerce-wp' ),
	'priority' => 18,
) );