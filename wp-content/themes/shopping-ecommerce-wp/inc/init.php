<?php 

get_template_part( 'inc/admin-function');

//custom-style
get_template_part( 'inc/shopping-ecommerce-wp-custom-style');

// theme-option
get_template_part( 'lib/texture-option/texture-option');

// customizer
get_template_part('customizer/models/class-shopping-ecommerce-wp-singleton');
get_template_part('customizer/models/class-shopping-ecommerce-wp-defaults-models');
get_template_part('customizer/repeater/class-shopping-ecommerce-wp-repeater');

/*customizer*/

get_template_part('customizer/extend-customizer/class-shopping-ecommerce-wp-customize-panel');
get_template_part('customizer/extend-customizer/class-shopping-ecommerce-wp-customize-section');
get_template_part('customizer/customizer-radio-image/class/class-shopping-ecommerce-wp-customize-control-radio-image');
get_template_part('customizer/customizer-range-value/class/class-shopping-ecommerce-wp-customizer-range-value-control');

get_template_part('customizer/color/class-control-color');
get_template_part('customizer/customize-buttonset/class-control-buttonset');

get_template_part('customizer/background/class-shopping-ecommerce-wp-background-image-control');

get_template_part('customizer/customizer-toggle/class-shopping-ecommerce-wp-toggle-control');

get_template_part('customizer/custom-customizer');
get_template_part('customizer/customizer');

/******************************/
// woocommerce
/******************************/
get_template_part( 'inc/woocommerce/woo-core');
get_template_part( 'inc/woocommerce/woo-function');
get_template_part('inc/woocommerce/woocommerce-ajax');