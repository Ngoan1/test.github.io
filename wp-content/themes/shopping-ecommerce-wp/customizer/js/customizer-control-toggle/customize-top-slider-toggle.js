( function( $ ){
//**********************************/
// Slider settings
//**********************************/
OPNControlTrigger.addHook( 'shopping-ecommerce-wp-toggle-control', function( argument, api ){
		OPNCustomizerToggles['shopping_ecommerce_wp_top_slide_layout'] = [
		    {
				controls: [    
				'shopping_ecommerce_wp_top_slider_2_title',
				'shopping_ecommerce_wp_lay2_adimg',
				'shopping_ecommerce_wp_lay2_url',
				'shopping_ecommerce_wp_lay2_adimg2',
				'shopping_ecommerce_wp_lay2_url2',
				'shopping_ecommerce_wp_top_slider_2_title2',
				'shopping_ecommerce_wp_lay2_adimg3',
				'shopping_ecommerce_wp_lay2_url3',
				'shopping_ecommerce_wp_lay3_adimg',
				'shopping_ecommerce_wp_lay3_url',
				'shopping_ecommerce_wp_lay3_adimg3',
				'shopping_ecommerce_wp_lay3_3url',
				'shopping_ecommerce_wp_lay3_adimg2',
				'shopping_ecommerce_wp_lay3_2url',
				'shopping_ecommerce_wp_include_category_slider',
				'shopping_ecommerce_wp_lay3_bg_img',
				'shopping_ecommerce_wp_lay3_bg_img_ovrly',
				'shopping_ecommerce_wp_lay3_heading_txt',
				],
				callback: function(slideroptn){
					if(slideroptn =='slide-layout-1'){
					return false;
					}
					return true;
				}
			},	
			{
				controls: [    
				'shopping_ecommerce_wp_top_slide_content',
				'shopping_ecommerce_wp_top_slider_2_title',
				'shopping_ecommerce_wp_lay2_adimg',
				'shopping_ecommerce_wp_lay2_url',
				'shopping_ecommerce_wp_lay2_adimg2',
				'shopping_ecommerce_wp_lay2_url2',
				'shopping_ecommerce_wp_top_slider_2_title2',
				'shopping_ecommerce_wp_lay2_adimg3',
				'shopping_ecommerce_wp_lay2_url3',
				'shopping_ecommerce_wp_lay3_bg_img_ovrly',
				'shopping_ecommerce_wp_lay3_bg_img',
				],
				callback: function(slideroptn){
					if(slideroptn =='slide-layout-2'){
					return true;
					}
					return false;
				}
			},	
			{
				controls: [  
				'shopping_ecommerce_wp_top_slide_content',  
				'shopping_ecommerce_wp_lay3_adimg',
				'shopping_ecommerce_wp_lay3_url',
				'shopping_ecommerce_wp_lay3_adimg2',
				'shopping_ecommerce_wp_lay3_2url',
				'shopping_ecommerce_wp_lay3_adimg3',
				'shopping_ecommerce_wp_lay3_3url',
				'shopping_ecommerce_wp_include_category_slider',
				'shopping_ecommerce_wp_lay3_bg_img_ovrly',
				'shopping_ecommerce_wp_lay3_bg_img',
				'shopping_ecommerce_wp_lay3_heading_txt',
				],
				callback: function(slideroptn){
					if(slideroptn =='slide-layout-3'){
					return true;
					}
					return false;
				}
			},	
			{
				controls: [  
				
				'shopping_ecommerce_wp_lay3_bg_img_ovrly',
				'shopping_ecommerce_wp_lay3_bg_img',
				],
				callback: function(slideroptn){
					if(slideroptn =='slide-layout-4' || slideroptn =='slide-layout-3'|| slideroptn =='slide-layout-2'){
					return true;
					}
					return false;
				}
			},	
			{
				controls: [    
				'shopping_ecommerce_wp_top_slide_content',
				],
				callback: function(slideroptn){
					if(slideroptn =='slide-layout-4' || slideroptn =='slide-layout-1' || slideroptn =='slide-layout-2' || slideroptn =='slide-layout-3'){
					return true;
					}
					return false;
				}
			},
			
			
			 
		];	
            OPNCustomizerToggles['shopping_ecommerce_wp_top_slider_optn'] = [
		    {
				controls: [    
				'shopping_ecommerce_wp_slider_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			},
			
			];
			OPNCustomizerToggles['shopping_ecommerce_wp_cat_slider_optn'] = [
		    {
				controls: [    
				'shopping_ecommerce_wp_cat_slider_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			},
			
			];
			OPNCustomizerToggles['shopping_ecommerce_wp_product_slider_optn'] = [
		    {
				controls: [    
				'shopping_ecommerce_wp_product_slider_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			},
			];	
			OPNCustomizerToggles['shopping_ecommerce_wp_category_slider_optn'] = [
		    {
				controls: [    
				'shopping_ecommerce_wp_category_slider_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			}
			
			];

			OPNCustomizerToggles['shopping_ecommerce_wp_product_list_slide_optn'] = [
		    {
				controls: [    
				'shopping_ecommerce_wp_product_list_slide_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			}
			
			];
			OPNCustomizerToggles['shopping_ecommerce_wp_feature_product_slider_optn'] = [
		    {
				controls: [    
				'shopping_ecommerce_wp_feature_product_slider_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			}
			
			];
			OPNCustomizerToggles['shopping_ecommerce_wp_cat_tb_lst_slider_optn'] = [
		    {
				controls: [    
				'shopping_ecommerce_wp_cat_tb_lst_slider_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			}
			
			];
			OPNCustomizerToggles['shopping_ecommerce_wp_brand_slider_optn'] = [
		    {
				controls: [    
				'shopping_ecommerce_wp_brand_slider_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			}
			
		];


    });
})( jQuery );