<?php

$author_writer_tp_theme_css = '';


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