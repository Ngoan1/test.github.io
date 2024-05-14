<?php 
/**
 * Custom Style for Shopping Ecommerce WP theme.
 * @package     Shopping Ecommerce WP
 * @author      wptexture
 * @copyright   Copyright (c) 2021, Shopping Ecommerce WP
 * @since       Shopping Ecommerce WP1.0.0
 */
function shopping_ecommerce_wp_custom_style(){
$shopping_ecommerce_wp_style=""; 
$shopping_ecommerce_wp_style.= shopping_ecommerce_wp_responsive_slider_funct( 'shopping_ecommerce_wp_logo_width', 'shopping_ecommerce_wp_logo_width_responsive');

/**********************/
//Scheme Color
/**********************/
$shopping_ecommerce_wp_color_scheme = esc_html(get_theme_mod('shopping_ecommerce_wp_color_scheme','opn-light'));


/**************************/
// Above Header
/**************************/
    $shopping_ecommerce_wp_above_brdr_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_above_brdr_clr','#fff'));  
    $shopping_ecommerce_wp_style.=".top-header,body.shopping-ecommerce-wp-dark .top-header{border-bottom-color:{$shopping_ecommerce_wp_above_brdr_clr}}";
    $shopping_ecommerce_wp_style.= shopping_ecommerce_wp_responsive_slider_funct( 'shopping_ecommerce_wp_abv_hdr_hgt', 'shopping_ecommerce_wp_top_header_height_responsive');
    $shopping_ecommerce_wp_style.= shopping_ecommerce_wp_responsive_slider_funct( 'shopping_ecommerce_wp_abv_hdr_botm_brd', 'shopping_ecommerce_wp_abv_hdr_botm_brd_responsive');

/**************************/
// Above Fooetr
/**************************/
    $shopping_ecommerce_wp_above_frt_brdr_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_above_frt_brdr_clr','#fff'));  
    $shopping_ecommerce_wp_style.=".top-footer,body.shopping-ecommerce-wp-dark .top-footer{border-bottom-color:{$shopping_ecommerce_wp_above_frt_brdr_clr}}";
    $shopping_ecommerce_wp_style.= shopping_ecommerce_wp_responsive_slider_funct( 'shopping_ecommerce_wp_above_ftr_hgt', 'shopping_ecommerce_wp_top_footer_height_responsive');
    $shopping_ecommerce_wp_style.= shopping_ecommerce_wp_responsive_slider_funct( 'shopping_ecommerce_wp_abv_ftr_botm_brd', 'shopping_ecommerce_wp_top_footer_border_responsive');

/**************************/
// Below Fooetr
/**************************/
    $shopping_ecommerce_wp_bottom_frt_brdr_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_bottom_frt_brdr_clr'));  
    $shopping_ecommerce_wp_style.=".below-footer,body.shopping-ecommerce-wp-dark .below-footer{border-top-color:{$shopping_ecommerce_wp_bottom_frt_brdr_clr}}";
    $shopping_ecommerce_wp_style.= shopping_ecommerce_wp_responsive_slider_funct( 'shopping_ecommerce_wp_btm_ftr_hgt', 'shopping_ecommerce_wp_below_footer_height_responsive');
    $shopping_ecommerce_wp_style.= shopping_ecommerce_wp_responsive_slider_funct( 'shopping_ecommerce_wp_btm_ftr_botm_brd', 'shopping_ecommerce_wp_below_footer_border_responsive');
/*********************/
// Global Color Option
/*********************/ 
  $shopping_ecommerce_wp_theme_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_theme_clr','#e99c2e'));

  $shopping_ecommerce_wp_style.=".single_add_to_cart_button.button.alt, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit, .woocommerce button.button, .woocommerce input.button,.cat-list a:after,.tagcloud a:hover, .texture-tags-wrapper a:hover,.ribbon-btn,.btn-main-header,.page-contact .leadform-show-form input[type='submit'],.woocommerce .widget_price_filter .shopping-ecommerce-wp-widget-content .ui-slider .ui-slider-range,
.woocommerce .widget_price_filter .shopping-ecommerce-wp-widget-content .ui-slider .ui-slider-handle,.entry-content form.post-password-form input[type='submit'],#shoppingecommerce-mobile-bar a,#shoppingecommerce-mobile-bar,.post-slide-widget .owl-carousel .owl-nav button:hover,.woocommerce div.product form.cart .button,#search-button,#search-button:hover, .woocommerce ul.products li.product .button:hover,.slider-content-caption a.slide-btn,.page-template-frontpage .owl-carousel button.owl-dot, .woocommerce #alm-quick-view-modal .alm-qv-image-slider .flex-control-paging li a,.button.return.wc-backward,.button.return.wc-backward:hover,.woocommerce .texture-product-hover a.add_to_cart_button:hover,
.woocommerce .texture-product-hover .texture-wishlist a.add_to_wishlist:hover,
.texture-wishlist .yith-wcwl-wishlistaddedbrowse:hover,
.texture-wishlist .yith-wcwl-wishlistexistsbrowse:hover,
.texture-quickview a:hover, .texture-compare .compare-button a.compare.button:hover,
.texture-woo-product-list .texture-quickview a:hover,.woocommerce .texture-product-hover a.th-button:hover,#alm-quick-view-modal .alm-qv-image-slider .flex-control-paging li a.flex-active,.menu-close-btn:hover:before, .menu-close-btn:hover:after,.cart-close-btn:hover:after,.cart-close-btn:hover:before,.cart-contents .count-item,[type='submit']:hover,.comment-list .reply a,.nav-links .page-numbers.current, .nav-links .page-numbers:hover,.woocommerce .texture-product-image-tab-section .texture-product-hover a.add_to_cart_button:hover,.woocommerce .texture-product-slide-section .texture-product-hover a.add_to_cart_button:hover,.woocommerce .texture-compare .compare-button a.compare.button:hover,.texture-product .woosw-btn:hover,.texture-product .wooscp-btn:hover,.woosw-copy-btn input{background:{$shopping_ecommerce_wp_theme_clr}}
  .open-cart p.buttons a:hover,
  .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.texture-slide .owl-nav button.owl-prev:hover, .texture-slide .owl-nav button.owl-next:hover, .shopping-ecommerce-wp-slide-post .owl-nav button.owl-prev:hover, .shopping-ecommerce-wp-slide-post .owl-nav button.owl-next:hover,/*.texture-list-grid-switcher a.selected,*/ .texture-list-grid-switcher a:hover,.woocommerce .woocommerce-error .button:hover, .woocommerce .woocommerce-info .button:hover, .woocommerce .woocommerce-message .button:hover,#searchform [type='submit']:hover,article.texture-post-article .texture-readmore.button:hover,.shopping-ecommerce-wp-load-more button:hover,.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current,.texture-top2-slide.owl-carousel .owl-nav button:hover,.product-slide-widget .owl-carousel .owl-nav button:hover, .texture-slide.texture-brand .owl-nav button:hover,.texture-heading-wrap:before,.woocommerce ul.products li.product .texture-product-hover a.add_to_cart_button:hover{background-color:{$shopping_ecommerce_wp_theme_clr} !important;} 
  .texture-product-hover .th-button.add_to_cart_button, .woocommerce ul.products .texture-product-hover .add_to_cart_button, .woocommerce .texture-product-hover a.th-butto, .woocommerce ul.products li.product .product_type_variable, .woocommerce ul.products li.product a.button.product_type_grouped,.open-cart p.buttons a:hover,.texture-slide .owl-nav button.owl-prev:hover, .texture-slide .owl-nav button.owl-next:hover, .shopping-ecommerce-wp-slide-post .owl-nav button.owl-prev:hover, .shopping-ecommerce-wp-slide-post .owl-nav button.owl-next:hover,body .woocommerce-tabs .tabs li a::before,/*.texture-list-grid-switcher a.selected,*/ .texture-list-grid-switcher a:hover,.woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button,#searchform [type='submit']:hover,article.texture-post-article .texture-readmore.button,.woocommerce .texture-product-hover a.th-button,.shopping-ecommerce-wp-load-more button,.texture-top2-slide.owl-carousel .owl-nav button:hover,.product-slide-widget .owl-carousel .owl-nav button:hover, .texture-slide.texture-brand .owl-nav button:hover,.page-contact .leadform-show-form input[type='submit'],.woocommerce .texture-product-hover a.product_type_simple,.post-slide-widget .owl-carousel .owl-nav button:hover{border-color:{$shopping_ecommerce_wp_theme_clr}} .loader {
    border-right: 4px solid {$shopping_ecommerce_wp_theme_clr};
    border-bottom: 4px solid {$shopping_ecommerce_wp_theme_clr};
    border-left: 4px solid {$shopping_ecommerce_wp_theme_clr};}
    .woocommerce .texture-product-image-cat-slide .texture-woo-product-list:hover .texture-product,.woocommerce .texture-product-image-cat-slide .texture-woo-product-list:hover .texture-product,[type='submit']{border-color:{$shopping_ecommerce_wp_theme_clr}} .shopping-ecommerce-wp-off-canvas-sidebar-wrapper .menu-close-btn:hover,.main-header .cart-close-btn:hover{color:{$shopping_ecommerce_wp_theme_clr};}";
   //text
   $shopping_ecommerce_wp_text_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_text_clr'));
   $shopping_ecommerce_wp_style.="body,.woocommerce-error, .woocommerce-info, .woocommerce-message {color: {$shopping_ecommerce_wp_text_clr}}";
   //title
   $shopping_ecommerce_wp_title_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_title_clr'));
   $shopping_ecommerce_wp_style.=".site-title span a,.sprt-tel b,.widget.woocommerce .widget-title, .open-widget-content .widget-title, .widget-title,.texture-title .title,.texture-hglt-box h6,h2.texture-post-title a, h1.texture-post-title ,#reply-title,h4.author-header,.page-head h1,.woocommerce div.product .product_title, section.related.products h2, section.upsells.products h2, .woocommerce #reviews #comments h2,.woocommerce table.shop_table thead th, .cart-subtotal, .order-total,.cross-sells h2, .cart_totals h2,.woocommerce-billing-fields h3,.page-head h1 a{color: {$shopping_ecommerce_wp_title_clr}}";
   //link
   $shopping_ecommerce_wp_link_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_link_clr'));
   $shopping_ecommerce_wp_link_hvr_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_link_hvr_clr'));
   $shopping_ecommerce_wp_style.="a,#open-above-menu.shopping-ecommerce-wp-menu > li > a{color:{$shopping_ecommerce_wp_link_clr}} #open-above-menu.shopping-ecommerce-wp-menu > li > a:hover,#open-above-menu.shopping-ecommerce-wp-menu li a:hover{color:{$shopping_ecommerce_wp_link_hvr_clr}}";

  // loader
   $shopping_ecommerce_wp_loader_bg_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_loader_bg_clr','#9c9c9'));
   $shopping_ecommerce_wp_style.=".shopping_ecommerce_wp_overlayloader{background-color:{$shopping_ecommerce_wp_loader_bg_clr}}";
  

//Move to top 
$shopping_ecommerce_wp_move_to_top_bg_clr      = esc_html(get_theme_mod('shopping_ecommerce_wp_move_to_top_bg_clr'));
$shopping_ecommerce_wp_move_to_top_icon_clr    = esc_html(get_theme_mod('shopping_ecommerce_wp_move_to_top_icon_clr'));
$shopping_ecommerce_wp_style.="#move-to-top{background:{$shopping_ecommerce_wp_move_to_top_bg_clr};color:{$shopping_ecommerce_wp_move_to_top_icon_clr}}";

// Slider BG 
   $shopping_ecommerce_wp_lay3_bg_img_ovrly = esc_html(get_theme_mod('shopping_ecommerce_wp_lay3_bg_img_ovrly','#eaeaea'));
   $shopping_ecommerce_wp_lay3_bg_background_image_url          = esc_url(get_theme_mod('shopping_ecommerce_wp_lay3_bg_background_image_url',''));
   
   $shopping_ecommerce_wp_lay3_bg_background_repeat         = esc_html(get_theme_mod('shopping_ecommerce_wp_lay3_bg_background_repeat','no-repeat'));
   $shopping_ecommerce_wp_lay3_bg_background_position       = esc_html(get_theme_mod('shopping_ecommerce_wp_lay3_bg_background_position','center center'));
   $shopping_ecommerce_wp_lay3_bg_background_size           = esc_html(get_theme_mod('shopping_ecommerce_wp_lay3_bg_background_size','auto'));
   $shopping_ecommerce_wp_lay3_bg_background_attach         = esc_html(get_theme_mod('shopping_ecommerce_wp_lay3_bg_background_attach','scroll'));
   $shopping_ecommerce_wp_style.=".texture-slider-section.slide-layout-3:before{background:{$shopping_ecommerce_wp_lay3_bg_img_ovrly}}";
   $shopping_ecommerce_wp_style.=".texture-slider-section.slide-layout-3{background-image:url($shopping_ecommerce_wp_lay3_bg_background_image_url);
    background-repeat:{$shopping_ecommerce_wp_lay3_bg_background_repeat};
    background-position:{$shopping_ecommerce_wp_lay3_bg_background_position};
    background-size:{$shopping_ecommerce_wp_lay3_bg_background_size};
    background-attachment:{$shopping_ecommerce_wp_lay3_bg_background_attach};}";

    // ribbon
   $shopping_ecommerce_wp_ribbon_bg_img_url          = esc_url(get_theme_mod('shopping_ecommerce_wp_ribbon_bg_img_url',SHOPPING_ECOMMERCE_WP_THEME_URI .'assets/img/ribbon.jpeg'));
   $shopping_ecommerce_wp_ribbon_bg_background_repeat        = esc_html(get_theme_mod('shopping_ecommerce_wp_ribbon_bg_background_repeat','no-repeat'));
   $shopping_ecommerce_wp_ribbon_bg_background_position       = esc_html(get_theme_mod('shopping_ecommerce_wp_ribbon_bg_background_position','center center'));
   $shopping_ecommerce_wp_ribbon_bg_background_size           = esc_html(get_theme_mod('shopping_ecommerce_wp_ribbon_bg_background_size','cover'));
   $shopping_ecommerce_wp_ribbon_bg_background_attach         = esc_html(get_theme_mod('shopping_ecommerce_wp_ribbon_bg_background_attach','scroll'));
   
   $shopping_ecommerce_wp_style.="section.texture-ribbon-section{background-image:url($shopping_ecommerce_wp_ribbon_bg_img_url);
    background-repeat:{$shopping_ecommerce_wp_ribbon_bg_background_repeat};
    background-position:{$shopping_ecommerce_wp_ribbon_bg_background_position};
    background-size:{$shopping_ecommerce_wp_ribbon_bg_background_size};}";


  /**************************/
  //Above Header Color Option
  /**************************/
   $shopping_ecommerce_wp_above_hd_bg_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_above_hd_bg_clr','#1f4c94'));
   $shopping_ecommerce_wp_abv_header_background_image = esc_html( get_theme_mod('header_image'));
   $shopping_ecommerce_wp_style.=".top-header:before{background:{$shopping_ecommerce_wp_above_hd_bg_clr}}";
   $shopping_ecommerce_wp_style.= ".top-header{background-image:url($shopping_ecommerce_wp_abv_header_background_image);
   }";
   
    $shopping_ecommerce_wp_abv_content_txt_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_abv_content_txt_clr','#fff'));
    $shopping_ecommerce_wp_abv_content_link_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_abv_content_link_clr','#fff'));
    $shopping_ecommerce_wp_style.= ".top-header .top-header-bar{color:{$shopping_ecommerce_wp_abv_content_txt_clr}} .top-header .top-header-bar a{color:{$shopping_ecommerce_wp_abv_content_link_clr}}";

  /**************************/
  //Main Header Color Option
  /**************************/
   $shopping_ecommerce_wp_main_hd_bg_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_main_hd_bg_clr','#2457AA'));
   $shopping_ecommerce_wp_main_content_txt_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_main_content_txt_clr','#888'));
   $shopping_ecommerce_wp_main_content_link_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_main_content_link_clr','#fff'));
   $shopping_ecommerce_wp_style.=".main-header:before,.sticky-header:before, .search-wrapper:before{background:{$shopping_ecommerce_wp_main_hd_bg_clr}}
    .site-description,main-header-col1,.header-support-content,.mhdrthree .site-description p{color:{$shopping_ecommerce_wp_main_content_txt_clr}} .mhdrthree .site-title span a,.header-support-content a, .texture-icon .count-item,.main-header a,.texture-icon .cart-icon a.cart-contents,.sticky-header .site-title a{color:{$shopping_ecommerce_wp_main_content_link_clr}}";

  /**************************/
  //Below Header Color Option
  /**************************/
   $shopping_ecommerce_wp_below_hd_bg_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_below_hd_bg_clr','#1f4c94'));
   $shopping_ecommerce_wp_category_text_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_category_text_clr',''));
   $shopping_ecommerce_wp_category_icon_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_category_icon_clr',''));
   $shopping_ecommerce_wp_style.=".below-header:before{background:{$shopping_ecommerce_wp_below_hd_bg_clr}}
      .menu-category-list .toggle-title,.toggle-icon{color:{$shopping_ecommerce_wp_category_text_clr}}
      .below-header .cat-icon span{background:{$shopping_ecommerce_wp_category_icon_clr}}
   ";

  /**************************/
  //Header Square Icon Option
  /**************************/
   $shopping_ecommerce_wp_sq_icon_bg_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_sq_icon_bg_clr','#1f4c94'));
   $shopping_ecommerce_wp_sq_icon_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_sq_icon_clr','#fff'));
   $shopping_ecommerce_wp_style.=".header-icon a ,.header-support-icon a.whishlist ,.texture-icon .cart-icon a.cart-contents i,.cat-icon,.sticky-header .header-icon a , .sticky-header .texture-icon .cart-icon a.cart-contents,.responsive-main-header .header-support-icon a,.responsive-main-header .texture-icon .cart-icon a.cart-contents,.responsive-main-header .menu-toggle .menu-btn,.sticky-header-bar .menu-toggle .menu-btn,.header-icon a.account,.header-icon a.prd-search {background:{$shopping_ecommerce_wp_sq_icon_bg_clr};color:{$shopping_ecommerce_wp_sq_icon_clr}} .cat-icon span,.menu-toggle .icon-bar{background:{$shopping_ecommerce_wp_sq_icon_clr}}";
   /**************************/
  //Main Menu
  /**************************/
  $shopping_ecommerce_wp_menu_link_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_menu_link_clr'));
  $shopping_ecommerce_wp_menu_link_hvr_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_menu_link_hvr_clr'));
  $shopping_ecommerce_wp_style.=".shopping-ecommerce-wp-menu > li > a,.menu-category-list .toggle-title,.toggle-icon{color:{$shopping_ecommerce_wp_menu_link_clr}} .shopping-ecommerce-wp-menu > li > a:hover,.shopping-ecommerce-wp-menu .current-menu-item a{color:{$shopping_ecommerce_wp_menu_link_hvr_clr}}";

  $shopping_ecommerce_wp_sub_menu_bg_clr      = esc_html(get_theme_mod('shopping_ecommerce_wp_sub_menu_bg_clr'));
  $shopping_ecommerce_wp_sub_menu_lnk_clr     = esc_html(get_theme_mod('shopping_ecommerce_wp_sub_menu_lnk_clr'));
  $shopping_ecommerce_wp_sub_menu_lnk_hvr_clr = esc_html(get_theme_mod('shopping_ecommerce_wp_sub_menu_lnk_hvr_clr'));
  $shopping_ecommerce_wp_style.=".shopping-ecommerce-wp-menu li ul.sub-menu li a{color:{$shopping_ecommerce_wp_sub_menu_lnk_clr}} .shopping-ecommerce-wp-menu li ul.sub-menu li a:hover{color:{$shopping_ecommerce_wp_sub_menu_lnk_hvr_clr}}   .shopping-ecommerce-wp-menu ul.sub-menu{background:{$shopping_ecommerce_wp_sub_menu_bg_clr}}";
if((bool)get_theme_mod('shopping_ecommerce_wp_shadow_header')==true){
$shopping_ecommerce_wp_style.="header{
    box-shadow: 0 .125rem .3rem -.0625rem rgba(0,0,0,.03),0 .275rem .75rem -.0625rem rgba(0,0,0,.06)!important;
position: relative;
 }";
}
//Product title in single line
$shopping_ecommerce_wp_color_scheme = (bool)get_theme_mod('shopping_ecommerce_wp_prdct_single',true);
if($shopping_ecommerce_wp_color_scheme==false){
   $shopping_ecommerce_wp_style.=".texture-woo-product-list .woocommerce-loop-product__title {
    overflow: hidden;
    text-overflow: inherit;
    display: inherit;
    -webkit-box-orient: inherit;
    -webkit-line-clamp: inherit;
    line-height: 24px;
    max-height: inherit;}";
}
//Hide yith if WPC SMART Icon 

if( (class_exists( 'YITH_WCWL' )) ){
$shopping_ecommerce_wp_style.=" .woocommerce .entry-summary .woosw-btn{
  display:none;
}";
}elseif((class_exists( 'WPCleverWoosw' ))){
$shopping_ecommerce_wp_style.=" .woocommerce .entry-summary .yith-wcwl-add-to-wishlist{
  display:none;
}";
}

if( (class_exists( 'YITH_Woocompare' )) ){
$shopping_ecommerce_wp_style.=" .woocommerce .entry-summary .woosc-btn, .woocommerce-shop .woosc-btn{
  display:none;
}";
}elseif((class_exists( 'WPCleverWoosc' ))){
$shopping_ecommerce_wp_style.=" .woocommerce .entry-summary a.compare.button{
  display:none;
}";
}

  return $shopping_ecommerce_wp_style;
}

//start logo width
function shopping_ecommerce_wp_logo_width_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.texture-logo img,.sticky-header .logo-content img{
    max-width: ' . $v3 . 'px;
  }';
  $custom_css = shopping_ecommerce_wp_add_media_query( $dimension, $custom_css );
  return $custom_css;
}
// top header height
function shopping_ecommerce_wp_top_header_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.top-header .top-header-bar{
    line-height: ' . $v3 . 'px;
  }';
  $custom_css = shopping_ecommerce_wp_add_media_query( $dimension, $custom_css );
  return $custom_css;
}
function shopping_ecommerce_wp_abv_hdr_botm_brd_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.top-header{
    border-bottom-width: ' . $v3 . 'px;
  }';
  $custom_css = shopping_ecommerce_wp_add_media_query( $dimension, $custom_css );
  return $custom_css;
}

// top footer height
function shopping_ecommerce_wp_top_footer_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.top-footer .top-footer-bar{
    line-height: ' . $v3 . 'px;
  }';
  $custom_css = shopping_ecommerce_wp_add_media_query( $dimension, $custom_css );
  return $custom_css;
}
function shopping_ecommerce_wp_top_footer_border_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.top-footer{
    border-bottom-width: ' . $v3 . 'px;
  }';
  $custom_css = shopping_ecommerce_wp_add_media_query( $dimension, $custom_css );
  return $custom_css;
}

// below footer height
function shopping_ecommerce_wp_below_footer_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.below-footer .below-footer-bar{
    line-height: ' . $v3 . 'px;
  }';
  $custom_css = shopping_ecommerce_wp_add_media_query( $dimension, $custom_css );
  return $custom_css;
}
function shopping_ecommerce_wp_below_footer_border_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.below-footer{
    border-top-width: ' . $v3 . 'px;
  }';
  $custom_css = shopping_ecommerce_wp_add_media_query( $dimension, $custom_css );
  return $custom_css;
}