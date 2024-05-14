( function( $ ) {
//**********************************/
// Slider settings
//**********************************/
OPNControlTrigger.addHook( 'shopping-ecommerce-wp-toggle-control', function( argument, api ){
		OPNCustomizerToggles ['shopping_ecommerce_wp_cat_slide_layout'] = [
		    {
				controls: [    
				'shopping_ecommerce_wp_category_slider_optn', 
				],
				callback: function(layout){
					if(layout =='cat-layout-1'){
					return true;
					}
					return false;
				}
			},	
				
			
			 
		];	
    });
})( jQuery );