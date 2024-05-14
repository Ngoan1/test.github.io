<?php
/**
 * Register customizer panels & sections.
 */
/*************************/
/*WordPress Default Panel*/
/*************************/
/**
 * Category Section Customizer Settings
 */
if(!function_exists('shopping_ecommerce_wp_get_category_list')){
function shopping_ecommerce_wp_get_category_list($arr='',$all=true){
    $cats = array();
    foreach ( get_categories($arr) as $categories => $category ){
       
        $cats[$category->slug] = $category->name;
     }
     return $cats;
  }
}

$shopping_ecommerce_wp_shop_panel_default = new Shopping_Ecommerce_WP_Customize_Panel( $wp_customize,'shopping-ecommerce-wp-panel-default', array(
    'priority' => 1,
    'title'    => __( 'WordPress Default', 'shopping-ecommerce-wp' ),
  ));
$wp_customize->add_panel($shopping_ecommerce_wp_shop_panel_default);
$wp_customize->get_section( 'title_tagline' )->panel = 'shopping-ecommerce-wp-panel-default';
$wp_customize->get_section( 'static_front_page' )->panel = 'shopping-ecommerce-wp-panel-default';
$wp_customize->get_section( 'custom_css' )->panel = 'shopping-ecommerce-wp-panel-default';

$wp_customize->add_setting('shopping_ecommerce_wp_home_page_setup', array(
    'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_text',
    ));
$wp_customize->add_control(new Shopping_Ecommerce_WP_Misc_Control( $wp_customize, 'shopping_ecommerce_wp_home_page_setup',
            array(
        'section'    => 'static_front_page',
        'type'      => 'doc-link',
        'url'       => '#',
        'description' => esc_html__( 'To know more go with this', 'shopping-ecommerce-wp' ),
        'priority'   =>100,
    )));
/************************/
// Background option
/************************/
$shopping_ecommerce_wp_shop_bg_option = new  Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping-ecommerce-wp-bg-option', array(
    'title' =>  __( 'Background', 'shopping-ecommerce-wp' ),
    'panel' => 'shopping-ecommerce-wp-panel-default',
    'priority' => 10,
  ));
$wp_customize->add_section($shopping_ecommerce_wp_shop_bg_option);

/*************************/
/*Layout Panel*/
/*************************/

//blog
$shopping_ecommerce_wp_section_blog_group = new  Shopping_Ecommerce_WP_Customize_Section( $wp_customize,'shopping-ecommerce-wp-section-blog-group', array(
    'title' =>  __( 'Blog', 'shopping-ecommerce-wp' ),
    'panel' => 'shopping-ecommerce-wp-panel-layout',
    'priority' => 2,
  ));
$wp_customize->add_section($shopping_ecommerce_wp_section_blog_group);

$shopping_ecommerce_wp_section_footer_group = new  Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping-ecommerce-wp-section-footer-group', array(
    'title' =>  __( 'Footer', 'shopping-ecommerce-wp' ),
    'panel' => 'shopping-ecommerce-wp-panel-layout',
    'priority' => 3,
  ));
$wp_customize->add_section( $shopping_ecommerce_wp_section_footer_group);
// sidebar
$shopping_ecommerce_wp_section_sidebar_group = new  Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping-ecommerce-wp-section-sidebar-group', array(
    'title' =>  __( 'Sidebar', 'shopping-ecommerce-wp' ),
    'panel' => 'shopping-ecommerce-wp-panel-layout',
    'priority' => 3,
  ));
$wp_customize->add_section($shopping_ecommerce_wp_section_sidebar_group);
// Scroll to top
$shopping_ecommerce_wp_move_to_top = new  Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping-ecommerce-wp-move-to-top', array(
    'title' =>  __( 'Move To Top', 'shopping-ecommerce-wp' ),
    'panel' => 'shopping-ecommerce-wp-panel-layout',
    'priority' => 3,
  ));
$wp_customize->add_section($shopping_ecommerce_wp_move_to_top);
//above-footer
$shopping_ecommerce_wp_above_footer = new  Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping-ecommerce-wp-above-footer',array(
    'title'    => __( 'Above Footer','shopping-ecommerce-wp' ),
    'panel'    => 'shopping-ecommerce-wp-panel-layout',
        'section'  => 'shopping-ecommerce-wp-section-footer-group',
        'priority' => 1,
));
$wp_customize->add_section( $shopping_ecommerce_wp_above_footer);
//widget footer
$shopping_ecommerce_wp_shop_widget_footer = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-widget-footer', array(
    'title'    => __('Widget Footer','shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-layout',
    'section'  => 'shopping-ecommerce-wp-section-footer-group',
    'priority' => 5,
));
$wp_customize->add_section( $shopping_ecommerce_wp_shop_widget_footer);
//Bottom footer
$shopping_ecommerce_wp_shop_bottom_footer = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-bottom-footer', array(
    'title'    => __('Below Footer','shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-layout',
    'section'  => 'shopping-ecommerce-wp-section-footer-group',
    'priority' => 5,
));
$wp_customize->add_section( $shopping_ecommerce_wp_shop_bottom_footer);
// rtl
$shopping_ecommerce_wp_rtl = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping-ecommerce-wp-rtl', array(
    'title' =>  __( 'RTL', 'shopping-ecommerce-wp' ),
    'panel' => 'shopping-ecommerce-wp-panel-layout',
    'priority' => 6,
));
$wp_customize->add_section($shopping_ecommerce_wp_rtl);
/*************************/
/* Preloader */
/*************************/
$wp_customize->add_section( 'shopping-ecommerce-wp-pre-loader' , array(
    'title'      => __('Preloader','shopping-ecommerce-wp'),
    'priority'   => 30,
) );
/*************************/
/* Social   Icon*/
/*************************/
$shopping_ecommerce_wp_social_header = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping-ecommerce-wp-social-icon', array(
    'title'    => __( 'Social Icon', 'shopping-ecommerce-wp' ),
    'priority' => 30,
  ));
$wp_customize->add_section( $shopping_ecommerce_wp_social_header );
/*************************/
/* Frontpage Panel */
/*************************/
$wp_customize->add_panel( 'shopping-ecommerce-wp-panel-frontpage', array(
                'priority' => 5,
                'title'    => __( 'Frontpage Sections', 'shopping-ecommerce-wp' ),
) );

$shopping_ecommerce_wp_top_slider_section = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping_ecommerce_wp_top_slider_section', array(
    'title'    => __( 'Top Slider', 'shopping-ecommerce-wp' ),
    'panel'    => 'shopping-ecommerce-wp-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $shopping_ecommerce_wp_top_slider_section );

$shopping_ecommerce_wp_feature_banner_section = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping_ecommerce_wp_feature_banner_section', array(
    'title'    => __( 'Featured Banner', 'shopping-ecommerce-wp' ),
    'panel'    => 'shopping-ecommerce-wp-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $shopping_ecommerce_wp_feature_banner_section );

$shopping_ecommerce_wp_cat_slide_section = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping_ecommerce_wp_cat_slide_section', array(
    'title'    => __( 'Woo Category', 'shopping-ecommerce-wp' ),
    'panel'    => 'shopping-ecommerce-wp-panel-frontpage',
    'priority' => 4,
  ));
$shopping_ecommerce_wp_category_tab_section = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping_ecommerce_wp_category_tab_section', array(
    'title'    => __( 'Tabbed Product Carousel', 'shopping-ecommerce-wp' ),
    'panel'    => 'shopping-ecommerce-wp-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $shopping_ecommerce_wp_category_tab_section );



$wp_customize->add_section( $shopping_ecommerce_wp_cat_slide_section );
// ribbon
$shopping_ecommerce_wp_ribbon = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping_ecommerce_wp_ribbon', array(
    'title'    => __( 'Ribbon', 'shopping-ecommerce-wp' ),
    'panel'    => 'shopping-ecommerce-wp-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $shopping_ecommerce_wp_ribbon );
$shopping_ecommerce_wp_product_tab_image = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping_ecommerce_wp_product_tab_image', array(
    'title'    => __( 'Product Tab Image Carousel', 'shopping-ecommerce-wp' ),
    'panel'    => 'shopping-ecommerce-wp-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $shopping_ecommerce_wp_product_tab_image );

$shopping_ecommerce_wp_product_slide_section = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping_ecommerce_wp_product_slide_section', array(
    'title'    => __( 'Product Carousel', 'shopping-ecommerce-wp' ),
    'panel'    => 'shopping-ecommerce-wp-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $shopping_ecommerce_wp_product_slide_section );

$shopping_ecommerce_wp_banner = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping_ecommerce_wp_banner', array(
    'title'    => __( 'Banner', 'shopping-ecommerce-wp' ),
    'panel'    => 'shopping-ecommerce-wp-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $shopping_ecommerce_wp_banner );

$shopping_ecommerce_wp_product_slide_list = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping_ecommerce_wp_product_slide_list', array(
    'title'    => __( 'News & Blogs', 'shopping-ecommerce-wp' ),
    'panel'    => 'shopping-ecommerce-wp-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $shopping_ecommerce_wp_product_slide_list );



$shopping_ecommerce_wp_highlight = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping_ecommerce_wp_highlight', array(
    'title'    => __( 'Features', 'shopping-ecommerce-wp' ),
    'panel'    => 'shopping-ecommerce-wp-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $shopping_ecommerce_wp_highlight );

$shopping_ecommerce_wp_brand = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping_ecommerce_wp_brand', array(
    'title'    => __( 'Brand', 'shopping-ecommerce-wp' ),
    'panel'    => 'shopping-ecommerce-wp-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $shopping_ecommerce_wp_brand );

$shopping_ecommerce_wp_product_big_feature = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping_ecommerce_wp_product_big_feature', array(
    'title'    => __( 'Big Featured Product', 'shopping-ecommerce-wp' ),
    'panel'    => 'shopping-ecommerce-wp-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $shopping_ecommerce_wp_product_big_feature );
$shopping_ecommerce_wp_product_cat_list = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping_ecommerce_wp_product_cat_list', array(
    'title'    => __( 'Tabbed Product List Carousel', 'shopping-ecommerce-wp' ),
    'panel'    => 'shopping-ecommerce-wp-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $shopping_ecommerce_wp_product_cat_list );
$shopping_ecommerce_wp_1_custom_sec = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping_ecommerce_wp_1_custom_sec', array(
    'title'    => __( 'First Custom Section', 'shopping-ecommerce-wp' ),
    'panel'    => 'shopping-ecommerce-wp-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $shopping_ecommerce_wp_1_custom_sec );

$shopping_ecommerce_wp_2_custom_sec = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping_ecommerce_wp_2_custom_sec', array(
    'title'    => __( 'Second Custom Section', 'shopping-ecommerce-wp' ),
    'panel'    => 'shopping-ecommerce-wp-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $shopping_ecommerce_wp_2_custom_sec );

$shopping_ecommerce_wp_3_custom_sec = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping_ecommerce_wp_3_custom_sec', array(
    'title'    => __( 'Third Custom Section', 'shopping-ecommerce-wp' ),
    'panel'    => 'shopping-ecommerce-wp-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $shopping_ecommerce_wp_3_custom_sec );

$shopping_ecommerce_wp_4_custom_sec = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping_ecommerce_wp_4_custom_sec', array(
    'title'    => __( 'Fourth Custom Section', 'shopping-ecommerce-wp' ),
    'panel'    => 'shopping-ecommerce-wp-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $shopping_ecommerce_wp_4_custom_sec );
//section ordering
$shopping_ecommerce_wp_section_order = new Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-section-order', array(
    'title'    => __('Section Ordering', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-frontpage',
    'priority' => 6,
));
$wp_customize->add_section($shopping_ecommerce_wp_section_order);
/******************/
// Color Option
/******************/
$wp_customize->add_panel( 'shopping-ecommerce-wp-panel-color-background', array(
        'priority' => 22,
        'title'    => __( 'Total Color & BG Options', 'shopping-ecommerce-wp' ),
    ) );
// Section gloab color and background
$wp_customize->add_section('shopping-ecommerce-wp-gloabal-color', array(
    'title'    => __('Global Colors', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'priority' => 1,
));
//header
$shopping_ecommerce_wp_header_color = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-header-color', array(
    'title'    => __('Header', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'priority' => 1,
));
$wp_customize->add_section( $shopping_ecommerce_wp_header_color );
$shopping_ecommerce_wp_abv_header_clr = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-abv-header-clr', array(
    'title'    => __('Above Header','shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-header-color',
    'priority' => 1,
));
$wp_customize->add_section( $shopping_ecommerce_wp_abv_header_clr);

$shopping_ecommerce_wp_main_header_clr = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-main-header-clr', array(
    'title'    => __('Main Header','shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-header-color',
    'priority' => 2,
));
$wp_customize->add_section( $shopping_ecommerce_wp_main_header_clr);

$shopping_ecommerce_wp_below_header_clr = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-below-header-clr', array(
    'title'    => __('Below Header','shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-header-color',
    'priority' => 3,
));
$wp_customize->add_section( $shopping_ecommerce_wp_below_header_clr);

$shopping_ecommerce_wp_icon_header_clr = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-icon-header-clr', array(
    'title'    => __('Square Icon','shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-header-color',
    'priority' => 4,
));
$wp_customize->add_section( $shopping_ecommerce_wp_icon_header_clr);
$shopping_ecommerce_wp_menu_header_clr = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-menu-header-clr', array(
    'title'    => __('Main Menu','shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-header-color',
    'priority' => 4,
));
$wp_customize->add_section( $shopping_ecommerce_wp_menu_header_clr);

$shopping_ecommerce_wp_sticky_header_clr = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-sticky-header-clr', array(
    'title'    => __('Sticky Header','shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-header-color',
    'priority' => 2,
));
$wp_customize->add_section($shopping_ecommerce_wp_sticky_header_clr);


$shopping_ecommerce_wp_mobile_pan_clr = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-mobile-pan-clr', array(
    'title'    => __('Mobile','shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-header-color',
    'priority' => 2,
));
$wp_customize->add_section($shopping_ecommerce_wp_mobile_pan_clr);

$shopping_ecommerce_wp_canvas_pan_clr = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-canvas-pan-clr', array(
    'title'    => __('Off Canvas Sidebar','shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-header-color',
    'priority' => 2,
));
$wp_customize->add_section($shopping_ecommerce_wp_canvas_pan_clr);

$shopping_ecommerce_wp_main_header_header_clr = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-main-header-header-clr', array(
    'title'    => __('Header','shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-main-header-clr',
    'priority' => 2,
));
$wp_customize->add_section($shopping_ecommerce_wp_main_header_header_clr);

// main-menu
$shopping_ecommerce_wp_main_header_menu_clr = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-main-header-menu-clr', array(
    'title'    => __('Main Menu','shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-main-header-clr',
    'priority' => 2,
));
$wp_customize->add_section($shopping_ecommerce_wp_main_header_menu_clr);

// header category
$shopping_ecommerce_wp_main_header_cat_clr = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-main-header-cat-clr', array(
    'title'    => __('Category','shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-main-header-clr',
    'priority' => 3,
));
$wp_customize->add_section($shopping_ecommerce_wp_main_header_cat_clr);
// header search
$shopping_ecommerce_wp_main_header_srch_clr = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-main-header-srch-clr', array(
    'title'    => __('Search','shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-main-header-clr',
    'priority' => 4,
));
$wp_customize->add_section($shopping_ecommerce_wp_main_header_srch_clr);
//Shop Icon
$shopping_ecommerce_wp_main_header_shp_icon = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-main-header-shp-icon', array(
    'title'    => __('Shop Icon','shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-main-header-clr',
    'priority' => 5,
));
$wp_customize->add_section($shopping_ecommerce_wp_main_header_shp_icon);
/****************/
//Sidebar
/****************/
$shopping_ecommerce_wp_sidebar_color = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-sidebar-color', array(
    'title'    => __('Sidebar', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'priority' => 1,
));
$wp_customize->add_section( $shopping_ecommerce_wp_sidebar_color );
/****************/
//footer
/****************/
$shopping_ecommerce_wp_footer_color = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-footer-color', array(
    'title'    => __('Footer', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'priority' => 1,
));
$wp_customize->add_section( $shopping_ecommerce_wp_footer_color );

$shopping_ecommerce_wp_abv_footer_clr = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-abv-footer-clr', array(
    'title'    => __('Above Footer','shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-footer-color',
    'priority' => 1,
));
$wp_customize->add_section( $shopping_ecommerce_wp_abv_footer_clr);

$shopping_ecommerce_wp_footer_widget_clr = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-footer-widget-clr', array(
    'title'    => __('Footer Widget','shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-footer-color',
    'priority' => 2,
));
$wp_customize->add_section($shopping_ecommerce_wp_footer_widget_clr);

$shopping_ecommerce_wp_btm_footer_clr = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-btm-footer-clr', array(
    'title'    => __('Bottom Footer','shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-footer-color',
    'priority' => 3,
));
$wp_customize->add_section( $shopping_ecommerce_wp_btm_footer_clr);

/****************/
//Woocommerce color
/****************/
$shopping_ecommerce_wp_woo_color = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-woo-color', array(
    'title'    => __('Woocommerce', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'priority' => 6,
));
$wp_customize->add_section( $shopping_ecommerce_wp_woo_color );
// product
$shopping_ecommerce_wp_woo_prdct_color = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-woo-prdct-color', array(
    'title'    => __('Product', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-woo-color',
    'priority' => 1,
));
$wp_customize->add_section( $shopping_ecommerce_wp_woo_prdct_color );
// shopping cart
$shopping_ecommerce_wp_woo_cart_color = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-woo-cart-color', array(
    'title'    => __('Shopping Cart', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-woo-color',
    'priority' => 1,
));
$wp_customize->add_section( $shopping_ecommerce_wp_woo_cart_color );

// sale
$shopping_ecommerce_wp_woo_prdct_sale_color = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-woo-prdct-sale-color', array(
    'title'    => __('Sale Badge', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-woo-color',
    'priority' => 2,
));
$wp_customize->add_section( $shopping_ecommerce_wp_woo_prdct_sale_color );
// single product
$shopping_ecommerce_wp_woo_prdct_single_color = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-woo-prdct-single-color', array(
    'title'    => __('Single Product', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-woo-color',
    'priority' => 3,
));
$wp_customize->add_section( $shopping_ecommerce_wp_woo_prdct_single_color );

/*************************/
// Frontpage
/*************************/
$shopping_ecommerce_wp_front_page_color = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-front-page-color', array(
    'title'    => __('Frontpage', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'priority' => 4,
));
$wp_customize->add_section($shopping_ecommerce_wp_front_page_color);

$shopping_ecommerce_wp_top_slider_color = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-top-slider-color', array(
    'title'    => __('Top Slider', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-front-page-color',
    'priority' => 1,
));
$wp_customize->add_section($shopping_ecommerce_wp_top_slider_color);

$shopping_ecommerce_wp_cat_slider_color = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-cat-slider-color', array(
    'title'    => __('Woo Category', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-front-page-color',
    'priority' => 2,
));
$wp_customize->add_section($shopping_ecommerce_wp_cat_slider_color);

$shopping_ecommerce_wp_product_slider_color = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-product-slider-color', array(
    'title'    => __('Product Carousel', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-front-page-color',
    'priority' => 3,
));
$wp_customize->add_section($shopping_ecommerce_wp_product_slider_color);

$shopping_ecommerce_wp_product_cat_slide_tab_color = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-product-cat-slide-tab-color', array(
    'title'    => __('Tabbed Product Carousel', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-front-page-color',
    'priority' => 3,
));
$wp_customize->add_section($shopping_ecommerce_wp_product_cat_slide_tab_color);

$shopping_ecommerce_wp_product_list_slide_color = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-product-list-slide-color', array(
    'title'    => __('News & Blogs', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-front-page-color',
    'priority' => 4,
));
$wp_customize->add_section($shopping_ecommerce_wp_product_list_slide_color);

$shopping_ecommerce_wp_product_list_tab_slide_color = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-product-list-tab-slide-color', array(
    'title'    => __('Tabbed Product List Carousel', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-front-page-color',
    'priority' => 5,
));
$wp_customize->add_section($shopping_ecommerce_wp_product_list_tab_slide_color);

$shopping_ecommerce_wp_banner_color = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-banner-color', array(
    'title'    => __('Banner', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($shopping_ecommerce_wp_banner_color);

$shopping_ecommerce_wp_ribbon_color = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-ribbon-color', array(
    'title'    => __('Ribbon', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($shopping_ecommerce_wp_ribbon_color);

$shopping_ecommerce_wp_brand_color = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-brand-color', array(
    'title'    => __('Brand', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($shopping_ecommerce_wp_brand_color);

$shopping_ecommerce_wp_highlight_color = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-highlight-color', array(
    'title'    => __('Highlight', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($shopping_ecommerce_wp_highlight_color);
$shopping_ecommerce_wp_tabimgprd_color = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-tabimgprd-color', array(
    'title'    => __('Product Tab Image', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($shopping_ecommerce_wp_tabimgprd_color);
$shopping_ecommerce_wp_big_featured_color = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-big-featured-color', array(
    'title'    => __('Big Featured Product', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($shopping_ecommerce_wp_big_featured_color);
/****************/
//custom section
/****************/
$shopping_ecommerce_wp_custom_one_color = new Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-custom-one-color', array(
    'title'    => __('Custom Section', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($shopping_ecommerce_wp_custom_one_color);

$shopping_ecommerce_wp_custom_two_color = new Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-custom-two-color', array(
    'title'    => __('Custom Section Two', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($shopping_ecommerce_wp_custom_two_color);

$shopping_ecommerce_wp_custom_three_color = new Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-custom-three-color', array(
    'title'    => __('Custom Section Three', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($shopping_ecommerce_wp_custom_three_color);


$shopping_ecommerce_wp_custom_four_color = new Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-custom-four-color', array(
    'title'    => __('Custom Section Four', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'section'  => 'shopping-ecommerce-wp-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($shopping_ecommerce_wp_custom_four_color);

// pan color
$shopping_ecommerce_wp_pan_color = new  Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-pan-color', array(
    'title'    => __('Pan / Mobile Menu Color', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'priority' => 5,
));
$wp_customize->add_section( $shopping_ecommerce_wp_pan_color);
/*********************/
// Page Content Color
/*********************/
$shopping_ecommerce_wp_custom_page_content_color = new Shopping_Ecommerce_WP_Customize_Section($wp_customize,'shopping-ecommerce-wp-page-content-color', array(
    'title'    => __('Content Color', 'shopping-ecommerce-wp'),
    'panel'    => 'shopping-ecommerce-wp-panel-color-background',
    'priority' => 2,
));
$wp_customize->add_section($shopping_ecommerce_wp_custom_page_content_color);
/******************/
// Shop Page
/******************/
$shopping_ecommerce_wp_woo_shop = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping-ecommerce-wp-woo-shop', array(
    'title'    => __( 'Product Style', 'shopping-ecommerce-wp' ),
     'panel'    => 'woocommerce',
     'priority' => 2,
));
$wp_customize->add_section( $shopping_ecommerce_wp_woo_shop );

$shopping_ecommerce_wp_woo_single_product = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping-ecommerce-wp-woo-single-product', array(
    'title'    => __( 'Single Product', 'shopping-ecommerce-wp' ),
     'panel'    => 'woocommerce',
     'priority' => 3,
));
$wp_customize->add_section($shopping_ecommerce_wp_woo_single_product );

$shopping_ecommerce_wp_woo_cart_page = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping-ecommerce-wp-woo-cart-page', array(
    'title'    => __( 'Cart Page', 'shopping-ecommerce-wp' ),
     'panel'    => 'woocommerce',
     'priority' => 4,
));
$wp_customize->add_section($shopping_ecommerce_wp_woo_cart_page);

$shopping_ecommerce_wp_woo_shop_page = new Shopping_Ecommerce_WP_Customize_Section( $wp_customize, 'shopping-ecommerce-wp-woo-shop-page', array(
    'title'    => __( 'Shop Page', 'shopping-ecommerce-wp' ),
     'panel'    => 'woocommerce',
     'priority' => 4,
));
$wp_customize->add_section($shopping_ecommerce_wp_woo_shop_page);