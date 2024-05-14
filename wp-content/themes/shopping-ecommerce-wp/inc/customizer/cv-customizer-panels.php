<?php
/**
 * Shopping Ecommerce WP manage the Customizer panels.
 *
 * @subpackage shopping-ecommerce-wp
 * @since 1.0 
 */

/**
 * General Settings Panel
 */
Kirki::add_panel( 'shopping_ecommerce_wp_general_panel', array(
	'priority' => 10,
	'title'    => __( 'General Settings', 'shopping-ecommerce-wp' ),
) );

/**
 * Shopping Ecommerce WP Options
 */
Kirki::add_panel( 'shopping_ecommerce_wp_options_panel', array(
	'priority' => 20,
	'title'    => __( 'Shopping Ecommerce WP Theme Options', 'shopping-ecommerce-wp' ),
) );