/****************/
// Main header	
/****************/
( function( $ ) {
//**********************************/
// Main Header settings
//**********************************/
OPNControlTrigger.addHook( 'shopping-ecommerce-wp-toggle-control', function( argument, api ){
		OPNCustomizerToggles ['shopping_ecommerce_wp_main_header_option'] = [
		    {
				controls: [    
				'shopping_ecommerce_wp_main_hdr_btn_txt', 
				'shopping_ecommerce_wp_main_hdr_btn_lnk',
				'shopping_ecommerce_wp_main_hdr_calto_txt',
				'shopping_ecommerce_wp_main_hdr_calto_nub',
				'shopping_ecommerce_wp_main_hdr_calto_email',
				'shopping_ecommerce_wp_main_header_widget_redirect'
				],
				callback: function(headeroptn){
					if (headeroptn =='none'){
					return false;
					}
					return true;
				}
			},	
			 {
				controls: [    
				'shopping_ecommerce_wp_main_hdr_btn_txt', 
				'shopping_ecommerce_wp_main_hdr_btn_lnk',
				],
				callback: function(layout){
					if(layout=='button'){
					return true;
					}
					return false;
				}
			},
			 {
				controls: [    
				'shopping_ecommerce_wp_main_hdr_calto_txt',
				'shopping_ecommerce_wp_main_hdr_calto_nub',
				'shopping_ecommerce_wp_main_hdr_calto_email',
				],
				callback: function(layout){
					if(layout=='callto'){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'shopping_ecommerce_wp_main_header_widget_redirect'
				],
				callback: function(layout){
					if(layout=='widget'){
					return true;
					}
					return false;
				}
			},
			 
		];	
		OPNCustomizerToggles ['shopping_ecommerce_wp_sticky_header'] = [
		    {
				controls: [    
				'shopping_ecommerce_wp_sticky_header_effect', 
				],
				callback: function(headeroptn){
					if (headeroptn == true){
					return true;
					}
					return false;
				}
			},	
		];	
    });
})( jQuery );