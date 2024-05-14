<?php
if ( ! defined( 'ABSPATH' ) ) exit; 
/**
 * This file stores all functions that return default content.
 *
 * @package  Shopping Ecommerce WP
 */
/**
 * Class Shopping_Ecommerce_wp_Defaults_Models
 *
 * @package  Shopping Ecommerce WP
 */
class Shopping_Ecommerce_WP_Defaults_Models extends Shopping_Ecommerce_wp_Singleton{
/**
	 * Get default values for features section.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	
	/**
	 * Get default values for features section.

	 * @access public
	 */
	public function get_feature_default() {
		return apply_filters(
			'shopping_ecommerce_wp_highlight_default_content', json_encode(
				array(
					array(
						'icon_value' => 'fa-shopping-bag',
						'title'      => esc_html__( 'Free Shipping Worldwide', 'shopping-ecommerce-wp' ),
						'subtitle'   => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod.', 'shopping-ecommerce-wp' ),	
					),
					array(
						'icon_value' => 'fa-money',
						'title'      => esc_html__( 'Money Back Guarantee', 'shopping-ecommerce-wp' ),
						'subtitle'   => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod.', 'shopping-ecommerce-wp' ),
					),
					array(
						'icon_value' => 'fa-user-plus',
						'title'      => esc_html__( '24/7 Customer Service', 'shopping-ecommerce-wp' ),
						'subtitle'   => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod.', 'shopping-ecommerce-wp' ),
					),
					array(
						'icon_value' => 'fa-dollar',
						'title'      => esc_html__( '100% Secure Payments', 'shopping-ecommerce-wp' ),
						'subtitle'   => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod.', 'shopping-ecommerce-wp' ),
					),
				)
			)
		);
	}	
	
}