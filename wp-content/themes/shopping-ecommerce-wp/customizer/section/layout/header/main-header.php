<?php
// main header


/***************************************/
// Disable product category search box
/****************************************/




$wp_customize->add_setting( 'shopping_ecommerce_wp_cat_search_disable', array(
                'default'               => false,
                'sanitize_callback'     => 'shopping_ecommerce_wp_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'shopping_ecommerce_wp_cat_search_disable', array(
                'label'                 => esc_html__('Check to disable Category in Search Box', 'shopping-ecommerce-wp'),
                'type'                  => 'checkbox',
                //'section'               => 'shopping-ecommerce-wp-main-header',
				'section'               => 'shopping-ecommerce-wp-main-header',
                'settings'              => 'shopping_ecommerce_wp_cat_search_disable',
                'priority'   => 1,
            ) ) );


// choose col layout


/***********************************/  
// menu alignment
/***********************************/ 
$wp_customize->add_setting('shopping_ecommerce_wp_menu_alignment', array(
                'default'               => 'center',
                'sanitize_callback'     => 'shopping_ecommerce_wp_sanitize_select',
            ) );
$wp_customize->add_control( new Shopping_Ecommerce_wp_Customizer_Buttonset_Control( $wp_customize, 'shopping_ecommerce_wp_menu_alignment', array(
                'label'                 => esc_html__( 'Menu Alignment', 'shopping-ecommerce-wp' ),
                'section'               => 'shopping-ecommerce-wp-main-header',
                'settings'              => 'shopping_ecommerce_wp_menu_alignment',
                'choices'               => array(
                    'left'              => esc_html__( 'Left', 'shopping-ecommerce-wp' ),
                    'center'            => esc_html__( 'center', 'shopping-ecommerce-wp' ),
                    'right'             => esc_html__( 'Right', 'shopping-ecommerce-wp' ),
                ),
                'priority'   => 2,
        ) ) );
//Main menu option
$wp_customize->add_setting('shopping_ecommerce_wp_main_header_option', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_select',
    ));
$wp_customize->add_control( 'shopping_ecommerce_wp_main_header_option', array(
        'settings' => 'shopping_ecommerce_wp_main_header_option',
        'label'    => __('Right Column','shopping-ecommerce-wp'),
        'section'  => 'shopping-ecommerce-wp-main-header',
        'type'     => 'select',
        'choices'    => array(
        'none'       => __('None','shopping-ecommerce-wp'),
        'callto'     => __('Call-To','shopping-ecommerce-wp'),
        'button'     => __('Button (Pro)','shopping-ecommerce-wp'),
        
        'widget'     => __('Widget (Pro)','shopping-ecommerce-wp'),     
        ),
        'priority'   => 3,
    ));
//**************/
// BUTTON TEXT //
//**************/
$wp_customize->add_setting('shopping_ecommerce_wp_main_hdr_btn_txt', array(
        'default' => __('Button Text','shopping-ecommerce-wp'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'shopping_ecommerce_wp_main_hdr_btn_txt', array(
        'label'    => __('Button Text', 'shopping-ecommerce-wp'),
        'section'  => 'shopping-ecommerce-wp-main-header',
         'type'    => 'text',
         'priority'   => 4,
));

$wp_customize->add_setting('shopping_ecommerce_wp_main_hdr_btn_lnk', array(
        'default' => __('#','shopping-ecommerce-wp'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_text',
        
));
$wp_customize->add_control( 'shopping_ecommerce_wp_main_hdr_btn_lnk', array(
        'label'    => __('Button Link', 'shopping-ecommerce-wp'),
        'section'  => 'shopping-ecommerce-wp-main-header',
         'type'    => 'text',
         'priority'   => 5,
));
/*****************/
// Call-to
/*****************/
$wp_customize->add_setting('shopping_ecommerce_wp_main_hdr_calto_txt', array(
        'default' => __('Call To','shopping-ecommerce-wp'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'shopping_ecommerce_wp_main_hdr_calto_txt', array(
        'label'    => __('Call To Text', 'shopping-ecommerce-wp'),
        'section'  => 'shopping-ecommerce-wp-main-header',
         'type'    => 'text',
         'priority'   => 6,
));

$wp_customize->add_setting('shopping_ecommerce_wp_main_hdr_calto_nub', array(
        'default' => __('+1800090098','shopping-ecommerce-wp'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'shopping_ecommerce_wp_main_hdr_calto_nub', array(
        'label'    => __('Call To Number', 'shopping-ecommerce-wp'),
        'section'  => 'shopping-ecommerce-wp-main-header',
         'type'    => 'text',
         'priority'   => 7,
));

// col1 widget redirection
if (class_exists('Shopping_ecommerce_wp_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'shopping_ecommerce_wp_main_header_widget_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Shopping_Ecommerce_WP_Widegt_Redirect(
                $wp_customize, 'shopping_ecommerce_wp_main_header_widget_redirect', array(
                    'section'      => 'shopping-ecommerce-wp-main-header',
                    'button_text'  => esc_html__( 'Go To Widget', 'shopping-ecommerce-wp' ),
                    'button_class' => 'focus-customizer-widget-redirect',  
                    'priority'   => 8,
                )
            )
        );
} 
/***********************************/  
/***********************************/  
// menu alignment
/***********************************/ 
$wp_customize->add_setting('shopping_ecommerce_wp_mobile_menu_open', array(
                'default'               => 'left',
                'sanitize_callback'     => 'shopping_ecommerce_wp_sanitize_select',
            ) );
$wp_customize->add_control( new Shopping_Ecommerce_WP_Customizer_Buttonset_Control( $wp_customize, 'shopping_ecommerce_wp_mobile_menu_open', array(
                'label'                 => esc_html__( 'Mobile Menu', 'shopping-ecommerce-wp' ),
                'section'               => 'shopping-ecommerce-wp-main-header',
                'settings'              => 'shopping_ecommerce_wp_mobile_menu_open',
                'choices'               => array(
                    'left'              => esc_html__( 'Left', 'shopping-ecommerce-wp' ),
                    // 'overcenter'        => esc_html__( 'center', 'shopping-ecommerce-wp' ),
                    'right'             => esc_html__( 'Right', 'shopping-ecommerce-wp' ),
                ),
                'priority'   => 9,
        ) ) );

  $wp_customize->add_setting( 'shopping_ecommerce_wp_shadow_header', array(
    'default'           => false,
    'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new Shopping_Ecommerce_WP_Toggle_Control( $wp_customize, 'shopping_ecommerce_wp_shadow_header', array(
    'label'       => esc_html__( 'Header Shadow', 'shopping-ecommerce-wp' ),
    'section'     => 'shopping-ecommerce-wp-main-header',
    'type'        => 'toggle',
    'settings'    => 'shopping_ecommerce_wp_shadow_header',
    'priority'   => 10,
  ) ) );
/***********************************/  
// Sticky Header
/***********************************/ 
  $wp_customize->add_setting( 'shopping_ecommerce_wp_sticky_header', array(
    'default'           => false,
    'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new Shopping_Ecommerce_WP_Toggle_Control( $wp_customize, 'shopping_ecommerce_wp_sticky_header', array(
    'label'       => esc_html__( 'Sticky Header', 'shopping-ecommerce-wp' ),
    'section'     => 'shopping-ecommerce-wp-main-header',
    'type'        => 'toggle',
    'settings'    => 'shopping_ecommerce_wp_sticky_header',
    'priority'   => 10,
  ) ) );

  $wp_customize->add_setting('shopping_ecommerce_wp_sticky_header_effect', array(
        'default'        => 'scrldwmn',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_select',
    ));
$wp_customize->add_control( 'shopping_ecommerce_wp_sticky_header_effect', array(
        'settings' => 'shopping_ecommerce_wp_sticky_header_effect',
        'label'    => __('Sticky Header Effect','shopping-ecommerce-wp'),
        'section'  => 'shopping-ecommerce-wp-main-header',
        'type'     => 'select',
        'choices'    => array(
        'scrldwmn'    => __('Effect One','shopping-ecommerce-wp'),
        'scrltop'     => __('Effect Two','shopping-ecommerce-wp'),
        
        ),
        'priority'   => 11,
    ));
/******************/
// Disable in Mobile
/******************/
$wp_customize->add_setting( 'shopping_ecommerce_wp_whislist_mobile_disable', array(
                'default'               => false,
                'sanitize_callback'     => 'shopping_ecommerce_wp_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'shopping_ecommerce_wp_whislist_mobile_disable', array(
                'label'                 => esc_html__('Check to disable whislist icon in mobile device', 'shopping-ecommerce-wp'),
                'type'                  => 'checkbox',
                'section'               => 'shopping-ecommerce-wp-main-header',
                'settings'              => 'shopping_ecommerce_wp_whislist_mobile_disable',
                'priority'   => 12,
            ) ) );

$wp_customize->add_setting( 'shopping_ecommerce_wp_account_mobile_disable', array(
                'default'               => false,
                'sanitize_callback'     => 'shopping_ecommerce_wp_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'shopping_ecommerce_wp_account_mobile_disable', array(
                'label'                 => esc_html__('Check to disable account icon in mobile device', 'shopping-ecommerce-wp'),
                'type'                  => 'checkbox',
                'section'               => 'shopping-ecommerce-wp-main-header',
                'settings'              => 'shopping_ecommerce_wp_account_mobile_disable',
                'priority'   => 13,
            ) ) );

$wp_customize->add_setting( 'shopping_ecommerce_wp_cart_mobile_disable', array(
                'default'               => false,
                'sanitize_callback'     => 'shopping_ecommerce_wp_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'shopping_ecommerce_wp_cart_mobile_disable', array(
                'label'                 => esc_html__('Check to disable cart icon in mobile device', 'shopping-ecommerce-wp'),
                'type'                  => 'checkbox',
                'section'               => 'shopping-ecommerce-wp-main-header',
                'settings'              => 'shopping_ecommerce_wp_cart_mobile_disable',
                'priority'   => 14,
            ) ) );

/****************/
//doc link
/****************/
$wp_customize->add_setting('shopping_ecommerce_wp_main_header_doc_learn_more', array(
    'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_text',
    ));
$wp_customize->add_control(new Shopping_Ecommerce_WP_Misc_Control( $wp_customize, 'shopping_ecommerce_wp_main_header_doc_learn_more',
            array(
        'section'    => 'shopping-ecommerce-wp-main-header',
        'type'      => 'doc-link',
        'url'       => '#',
        'description' => esc_html__( 'To know more go with this', 'shopping-ecommerce-wp' ),
        'priority'   =>100,
    )));

// exclude header category
function shopping_ecommerce_wp_get_category_id($arr='',$all=true){
    $cats = array();
    foreach ( get_categories($arr) as $categories => $category ){
       
        $cats[$category->term_id] = $category->name;
     }
     return $cats;
  }
$wp_customize->add_setting('shopping_ecommerce_wp_main_hdr_cat_txt', array(
        'default' => __('Category','shopping-ecommerce-wp'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'shopping_ecommerce_wp_main_hdr_cat_txt', array(
        'label'    => __('Category Text', 'shopping-ecommerce-wp'),
        'section'  => 'shopping_ecommerce_wp_exclde_cat_header',
         'type'    => 'text',
));
 if (class_exists( 'shopping_ecommerce_wp_Customize_Control_Checkbox_Multiple')) {
   $wp_customize->add_setting('shopping_ecommerce_wp_exclde_category', array(
        'default'           => '',
        'sanitize_callback' => 'shopping_ecommerce_wp_checkbox_explode'
    ));
    $wp_customize->add_control(new Shopping_Ecommerce_WP_Customize_Control_Checkbox_Multiple(
            $wp_customize,'shopping_ecommerce_wp_exclde_category', array(
        'settings'=> 'shopping_ecommerce_wp_exclde_category',
        'label'   => __( 'Choose Categories To Exclude', 'shopping-ecommerce-wp' ),
        'section' => 'shopping_ecommerce_wp_exclde_cat_header',
        'choices' => shopping_ecommerce_wp_get_category_id(array('taxonomy' =>'product_cat'),true),
        ) 
    ));

}  