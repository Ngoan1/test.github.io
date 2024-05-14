<?php
/**
 * Recommended plugins
 *
 * @package shopping-ecommerce-wp
 */

if ( ! function_exists( 'shopping_ecommerce_wp_recommended_plugins' ) ) :

    /**
     * Recommend plugins.
     *
     * @since 1.0.0
     */
    function shopping_ecommerce_wp_recommended_plugins() {

        $plugins = array(              
          
            array(
                'name'     => esc_html__( 'Testerwp Ecommerce Companion', 'shopping-ecommerce-wp' ),
                'slug'     => 'testerwp-ecommerce-companion',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'One Click Demo Import', 'shopping-ecommerce-wp' ),
                'slug'     => 'one-click-demo-import',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'WooCommerce', 'shopping-ecommerce-wp' ),
                'slug'     => 'woocommerce',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'YITH WooCommerce Wishlist', 'shopping-ecommerce-wp' ),
                'slug'     => 'yith-woocommerce-wishlist',
                'required' => false,
            ),
        );

        tgmpa( $plugins );

    }

endif;

add_action( 'tgmpa_register', 'shopping_ecommerce_wp_recommended_plugins' );