<?php

$author_writer_tp_theme_css = "";

//body layout//

$author_writer_theme_lay = get_theme_mod( 'author_writer_tp_body_layout_settings','Full');
if($author_writer_theme_lay == 'Container'){
$author_writer_tp_theme_css .='body{';
	$author_writer_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
$author_writer_tp_theme_css .='}';
$author_writer_tp_theme_css .='.page-template-front-page .menubar{';
	$author_writer_tp_theme_css .='position: static;';
$author_writer_tp_theme_css .='}';
$author_writer_tp_theme_css .='.scrolled{';
	$author_writer_tp_theme_css .='width: auto; left:0; right:0;';
$author_writer_tp_theme_css .='}';
$author_writer_tp_theme_css .='@media screen and (max-width:575px){';
$author_writer_tp_theme_css .='body{';
    $author_writer_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left:0px';
$author_writer_tp_theme_css .='} }';

}else if($author_writer_theme_lay == 'Container Fluid'){
$author_writer_tp_theme_css .='body{';
$author_writer_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
$author_writer_tp_theme_css .='}';
$author_writer_tp_theme_css .='.page-template-front-page .menubar{';
$author_writer_tp_theme_css .='width: 99%';
$author_writer_tp_theme_css .='}';
$author_writer_tp_theme_css .='.scrolled{';
	$author_writer_tp_theme_css .='width: auto; left:0; right:0;';
$author_writer_tp_theme_css .='}';
$author_writer_tp_theme_css .='.scrolled{';
	$author_writer_tp_theme_css .='width: auto; left:0; right:0;';
$author_writer_tp_theme_css .='}';
$author_writer_tp_theme_css .='@media screen and (max-width:575px){';
$author_writer_tp_theme_css .='body{';
    $author_writer_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left:0px';
$author_writer_tp_theme_css .='} }';

}else if($author_writer_theme_lay == 'Full'){
$author_writer_tp_theme_css .='body{';
	$author_writer_tp_theme_css .='max-width: 100%;';
$author_writer_tp_theme_css .='}';
}

//scroll-top-alignmemt
$author_writer_scroll_position = get_theme_mod( 'author_writer_scroll_top_position','Right');
if($author_writer_scroll_position == 'Right'){
$author_writer_tp_theme_css .='#return-to-top{';
    $author_writer_tp_theme_css .='right: 20px;';
$author_writer_tp_theme_css .='}';
}else if($author_writer_scroll_position == 'Left'){
$author_writer_tp_theme_css .='#return-to-top{';
    $author_writer_tp_theme_css .='left: 20px;';
$author_writer_tp_theme_css .='}';
}else if($author_writer_scroll_position == 'Center'){
$author_writer_tp_theme_css .='#return-to-top{';
    $author_writer_tp_theme_css .='right: 50%;left: 50%;';
$author_writer_tp_theme_css .='}';
}


//Social icon Font size
$author_writer_social_icon_fontsize = get_theme_mod('author_writer_social_icon_fontsize');
$author_writer_tp_theme_css .='.media-links a i{';
	$author_writer_tp_theme_css .='font-size: '.esc_attr($author_writer_social_icon_fontsize).'px;';
$author_writer_tp_theme_css .='}';

// site title font size option
$author_writer_site_title_font_size = get_theme_mod('author_writer_site_title_font_size', 20);{
$author_writer_tp_theme_css .='.logo h1 a, .logo p a{';
	$author_writer_tp_theme_css .='font-size: '.esc_attr($author_writer_site_title_font_size).'px;';
$author_writer_tp_theme_css .='}';
}

// site tagline font size option
$author_writer_site_tagline_font_size = get_theme_mod('author_writer_site_tagline_font_size', 15);{
$author_writer_tp_theme_css .='.logo p{';
	$author_writer_tp_theme_css .='font-size: '.esc_attr($author_writer_site_tagline_font_size).'px;';
$author_writer_tp_theme_css .='}';
}

// related post
$author_writer_related_post_mob = get_theme_mod('author_writer_related_post_mob', true);
$author_writer_related_post = get_theme_mod('author_writer_remove_related_post', true);
$author_writer_tp_theme_css .= '.related-post-block {';
if ($author_writer_related_post == false) {
    $author_writer_tp_theme_css .= 'display: none;';
}
$author_writer_tp_theme_css .= '}';
$author_writer_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($author_writer_related_post == false || $author_writer_related_post_mob == false) {
    $author_writer_tp_theme_css .= '.related-post-block { display: none; }';
}
$author_writer_tp_theme_css .= '}';

// slider btn
$author_writer_slider_buttom_mob = get_theme_mod('author_writer_slider_buttom_mob', true);
$author_writer_slider_button = get_theme_mod('author_writer_slider_button', true);
$author_writer_tp_theme_css .= '#slider .more-btn {';
if ($author_writer_slider_button == false) {
    $author_writer_tp_theme_css .= 'display: none;';
}
$author_writer_tp_theme_css .= '}';
$author_writer_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($author_writer_slider_button == false || $author_writer_slider_buttom_mob == false) {
    $author_writer_tp_theme_css .= '#slider .more-btn { display: none; }';
}
$author_writer_tp_theme_css .= '}';

//return to header mobile               
$author_writer_return_to_header_mob = get_theme_mod('author_writer_return_to_header_mob', true);
$author_writer_return_to_header = get_theme_mod('author_writer_return_to_header', true);
$author_writer_tp_theme_css .= '.return-to-header{';
if ($author_writer_return_to_header == false) {
    $author_writer_tp_theme_css .= 'display: none;';
}
$author_writer_tp_theme_css .= '}';
$author_writer_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($author_writer_return_to_header == false || $author_writer_return_to_header_mob == false) {
    $author_writer_tp_theme_css .= '.return-to-header{ display: none; }';
}
$author_writer_tp_theme_css .= '}';

//footer bg image
$author_writer_footer_widget_image = get_theme_mod('author_writer_footer_widget_image');
if($author_writer_footer_widget_image != false){
$author_writer_tp_theme_css .='#footer{';
	$author_writer_tp_theme_css .='background: url('.esc_attr($author_writer_footer_widget_image).');';
$author_writer_tp_theme_css .='}';
}

//related products
$author_writer_related_product = get_theme_mod('author_writer_related_product',true);
if($author_writer_related_product == false){
	$author_writer_tp_theme_css .='.related.products{';
		$author_writer_tp_theme_css .='display: none;';
	$author_writer_tp_theme_css .='}';
}

//menu font size
$author_writer_menu_font_size = get_theme_mod('author_writer_menu_font_size', 12);{
$author_writer_tp_theme_css .='.main-navigation a,.main-navigation li.page_item_has_children:after, .main-navigation li.menu-item-has-children:after{';
	$author_writer_tp_theme_css .='font-size: '.esc_attr($author_writer_menu_font_size).'px;';
$author_writer_tp_theme_css .='}';
}

// menu text transform
$author_writer_menu_text_tranform = get_theme_mod( 'author_writer_menu_text_tranform','Capitalize');
if($author_writer_menu_text_tranform == 'Uppercase'){
$author_writer_tp_theme_css .='.main-navigation a {';
	$author_writer_tp_theme_css .='text-transform: uppercase;';
$author_writer_tp_theme_css .='}';
}else if($author_writer_menu_text_tranform == 'Lowercase'){
$author_writer_tp_theme_css .='.main-navigation a {';
	$author_writer_tp_theme_css .='text-transform: lowercase;';
$author_writer_tp_theme_css .='}';
}
else if($author_writer_menu_text_tranform == 'Capitalize'){
$author_writer_tp_theme_css .='.main-navigation a {';
	$author_writer_tp_theme_css .='text-transform: capitalize;';
$author_writer_tp_theme_css .='}';
}

//======================= slider Content layout ===================== //

$author_writer_slider_content_layout = get_theme_mod('author_writer_slider_content_layout', 'LEFT-ALIGN'); 
$author_writer_tp_theme_css .= '#slider .carousel-caption{';
switch ($author_writer_slider_content_layout) {
    case 'LEFT-ALIGN':
        $author_writer_tp_theme_css .= 'text-align:left; right: 35%; left: 15%';
        break;
    case 'CENTER-ALIGN':
        $author_writer_tp_theme_css .= 'text-align:center; left: 25%; right: 25%';
        break;
    case 'RIGHT-ALIGN':
        $author_writer_tp_theme_css .= 'text-align:right; left: 35%; right: 15%';
        break;
    default:
        $author_writer_tp_theme_css .= 'text-align:left; right: 35%; left: 15%';
        break;
}
$author_writer_tp_theme_css .= '}';

//sale position
$author_writer_scroll_position = get_theme_mod( 'author_writer_sale_tag_position','right');
if($author_writer_scroll_position == 'right'){
$author_writer_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $author_writer_tp_theme_css .='right: 25px !important;';
$author_writer_tp_theme_css .='}';
}else if($author_writer_scroll_position == 'left'){
$author_writer_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $author_writer_tp_theme_css .='left: 25px !important; right: auto !important;';
$author_writer_tp_theme_css .='}';
}

//Font Weight
$author_writer_menu_font_weight = get_theme_mod( 'author_writer_menu_font_weight','600');
if($author_writer_menu_font_weight == '100'){
$author_writer_tp_theme_css .='.main-navigation a{';
    $author_writer_tp_theme_css .='font-weight: 100;';
$author_writer_tp_theme_css .='}';
}else if($author_writer_menu_font_weight == '200'){
$author_writer_tp_theme_css .='.main-navigation a{';
    $author_writer_tp_theme_css .='font-weight: 200;';
$author_writer_tp_theme_css .='}';
}else if($author_writer_menu_font_weight == '300'){
$author_writer_tp_theme_css .='.main-navigation a{';
    $author_writer_tp_theme_css .='font-weight: 300;';
$author_writer_tp_theme_css .='}';
}else if($author_writer_menu_font_weight == '400'){
$author_writer_tp_theme_css .='.main-navigation a{';
    $author_writer_tp_theme_css .='font-weight: 400;';
$author_writer_tp_theme_css .='}';
}else if($author_writer_menu_font_weight == '500'){
$author_writer_tp_theme_css .='.main-navigation a{';
    $author_writer_tp_theme_css .='font-weight: 500;';
$author_writer_tp_theme_css .='}';
}else if($author_writer_menu_font_weight == '600'){
$author_writer_tp_theme_css .='.main-navigation a{';
    $author_writer_tp_theme_css .='font-weight: 600;';
$author_writer_tp_theme_css .='}';
}else if($author_writer_menu_font_weight == '700'){
$author_writer_tp_theme_css .='.main-navigation a{';
    $author_writer_tp_theme_css .='font-weight: 700;';
$author_writer_tp_theme_css .='}';
}else if($author_writer_menu_font_weight == '800'){
$author_writer_tp_theme_css .='.main-navigation a{';
    $author_writer_tp_theme_css .='font-weight: 800;';
$author_writer_tp_theme_css .='}';
}else if($author_writer_menu_font_weight == '900'){
$author_writer_tp_theme_css .='.main-navigation a{';
    $author_writer_tp_theme_css .='font-weight: 900;';
$author_writer_tp_theme_css .='}';
}