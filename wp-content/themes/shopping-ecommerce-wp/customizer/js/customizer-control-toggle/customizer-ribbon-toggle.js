/*************************************/
// Ribbon Hide N Show control
/*************************************/
( function( $ ){
OPNControlTrigger.addHook( 'shopping-ecommerce-wp-toggle-control', function( argument, api ){
OPNCustomizerToggles ['shopping_ecommerce_wp_ribbon_background'] = [
		     {
				controls:[    
				'shopping_ecommerce_wp_ribbon_bg_background_image',
				
				],
				callback: function(layout){
					if(layout=='image'){
					return true;
					}else{
					return false;	
					}
				}
			},	
			{
				controls: [  
				'shopping_ecommerce_wp_ribbon_video_poster_image',
				'shopping_ecommerce_wp_ribbon_bg_video', 
			    
				],
				callback: function(layout1){
					if(layout1 =='video'){
					return true;
					}else{
					return false;	
					}
				}
			},	
		];	
	});
})( jQuery );