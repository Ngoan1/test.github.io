<?php 
/**
 * all customizer setting includeed
 *
 * @param  
 * @return mixed|string
 */
function shopping_ecommerce_wp_front_customize_register( $wp_customize ){

//Registered panel and section
require SHOPPING_ECOMMERCE_WP_THEME_DIR . 'customizer/register-panels-and-sections.php';	
require SHOPPING_ECOMMERCE_WP_THEME_DIR . 'customizer/section/layout/header/main-header.php';
}

add_action('customize_register','shopping_ecommerce_wp_front_customize_register');
