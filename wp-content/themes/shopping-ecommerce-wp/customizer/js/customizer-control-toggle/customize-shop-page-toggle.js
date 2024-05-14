( function( $ ) {
//**********************************/
// Slider settings
//**********************************/
OPNControlTrigger.addHook( 'shopping-ecommerce-wp-toggle-control', function( argument, api ){
         OPNCustomizerToggles ['shopping_ecommerce_wp_pagination'] = [
		    {
				controls: [    
				'shopping_ecommerce_wp_pagination_loadmore_btn_text',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == 'click'){
					return true;
					}
					return false;
				}
			},
			
			];


    });
})( jQuery );