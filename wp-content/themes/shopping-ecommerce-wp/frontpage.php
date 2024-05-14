<?php 
/**
 * Template Name: Homepage Template
 * @package testerwp
 * @subpackage Shopping Ecommerce Wp
 * @since 1.0.0
 */
get_header();?>

   <div class="bg-w">
         <div class="main-page">
            
               <?php
                    if( shortcode_exists( 'shopping-ecommerce-wp' ) ){
                       do_shortcode("[shopping-ecommerce-wp section='shopping_ecommerce_wp_show_frontpage']");
                    }
               ?>
            
         </div>
   </div>

<?php get_footer();