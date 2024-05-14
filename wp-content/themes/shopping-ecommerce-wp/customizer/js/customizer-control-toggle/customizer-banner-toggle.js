/*************************************/
// Banner Hide N Show control
/*************************************/
( function( $ ){
OPNControlTrigger.addHook( 'shopping-ecommerce-wp-toggle-control', function( argument, api ){
OPNCustomizerToggles ['shopping_ecommerce_wp_banner_layout'] = [
		     

		     {
				controls: [    
				'shopping_ecommerce_wp_bnr_1_img',
				'shopping_ecommerce_wp_bnr_1_url',
				'shopping_ecommerce_wp_bnr_2_img',
				'shopping_ecommerce_wp_bnr_2_url',
				'shopping_ecommerce_wp_bnr_3_img',
				'shopping_ecommerce_wp_bnr_3_url',
				'shopping_ecommerce_wp_bnr_4_img',
				'shopping_ecommerce_wp_bnr_4_url',
				'shopping_ecommerce_wp_bnr_5_img',
				'shopping_ecommerce_wp_bnr_5_url',
				
				],
				callback: function(layout){
					if(layout=='bnr-four'){
					return true;
					}else{
					return false;	
					}
				}
			},	
			{
				controls: [    
				'shopping_ecommerce_wp_bnr_1_img',
				'shopping_ecommerce_wp_bnr_1_url',
				'shopping_ecommerce_wp_bnr_2_img',
				'shopping_ecommerce_wp_bnr_2_url',
				'shopping_ecommerce_wp_bnr_3_img',
				'shopping_ecommerce_wp_bnr_3_url',
				'shopping_ecommerce_wp_bnr_4_img',
				'shopping_ecommerce_wp_bnr_4_url',
				
				],
				callback: function(layout){
					if(layout=='bnr-five' ||  layout=='bnr-four'){
					return true;
					}else{
					return false;	
					}
				}
			},	
		    {
				controls: [    
				'shopping_ecommerce_wp_bnr_1_img',
				'shopping_ecommerce_wp_bnr_1_url',
				'shopping_ecommerce_wp_bnr_2_img',
				'shopping_ecommerce_wp_bnr_2_url',
				'shopping_ecommerce_wp_bnr_3_img',
				'shopping_ecommerce_wp_bnr_3_url',
				
				],
				callback: function(layout){
					if(layout=='bnr-three' || layout=='bnr-four' || layout=='bnr-five'){
					return true;
					}else{
					return false;	
					}
				}
			},	
			{
				controls: [    
				'shopping_ecommerce_wp_bnr_1_img',
				'shopping_ecommerce_wp_bnr_1_url',
				'shopping_ecommerce_wp_bnr_2_img',
				'shopping_ecommerce_wp_bnr_2_url',
				
				],
				callback: function(layout){
					if(layout=='bnr-two'|| layout=='bnr-three' || layout=='bnr-four' || layout=='bnr-five' || layout=='bnr-six'){
					return true;
					}else{
					return false;	
					}
				}
			},	
			{
				controls: [    
				'shopping_ecommerce_wp_bnr_1_img',
				'shopping_ecommerce_wp_bnr_1_url',	
				],
				callback: function(layout){
					if(layout=='bnr-one' || layout=='bnr-two'|| layout=='bnr-three' || layout=='bnr-four' || layout=='bnr-five' || layout=='bnr-six'){
					return true;
					}else{
					return false;	
					}
				}
			},	
				
		];	
	});
})( jQuery );