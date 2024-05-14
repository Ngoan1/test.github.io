<?php
/**
 * Shopping Ecommerce WP manage the Customizer options of general panel.
 *
 * @subpackage shopping-ecommerce-wp
 * @since 1.0 
 */
Kirki::add_field(
	'shopping_ecommerce_wp_config', array(
		'type'        => 'checkbox',
		'settings'    => 'shopping_ecommerce_wp_home_posts',
		'label'       => esc_attr__( 'Checked to hide latest posts in homepage.', 'shopping-ecommerce-wp' ),
		'section'     => 'static_front_page',
		'default'     => true,
	)
);

// Color Picker field for Primary Color
Kirki::add_field( 
	'shopping_ecommerce_wp_config', array(
		'type'        => 'color',
		'settings'    => 'shopping_ecommerce_wp_theme_color',
		'label'       => esc_html__( 'Primary Color', 'shopping-ecommerce-wp' ),
		'section'     => 'colors',
		'default'     => '#f10e00',
	)
);