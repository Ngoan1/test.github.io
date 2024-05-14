/*****************************************************************************/
/**********************customizer control setting*************************/
/*****************************************************************************/
( function( $ ) {
//**********************************/
// Footer widget hide and show settings
//**********************************/
OPNControlTrigger.addHook( 'shopping-ecommerce-wp-toggle-control', function( argument, api ){
		OPNCustomizerToggles ['shopping_ecommerce_wp_bottom_footer_widget_layout'] = [
			{
				controls: [
					
					
					'shopping_ecommerce_wp_bottom_footer_widget_redirect',
				],
				callback: function(layout){
					if ('ft-wgt-none'== layout){
						return false;
					}
					return true;
				}
			},
				
		];	
 });
})( jQuery );