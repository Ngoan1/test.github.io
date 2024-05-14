/*************************************/
// Bottom Footer Hide and Show control
/*************************************/
( function( $ ){
OPNControlTrigger.addHook( 'shopping-ecommerce-wp-toggle-control', function( argument, api ){
OPNCustomizerToggles ['shopping_ecommerce_wp_bottom_footer_layout'] = [
		    {
				controls: [ 
				'shopping_ecommerce_wp_bottom_footer_col1_set',
				'shopping_ecommerce_wp_footer_bottom_col1_texthtml',
				],
				callback: function(layout){
					if(layout=='ft-btm-none' ){
					return false;
					}
					return true;
				}
				
		},


		{
				controls: [ 
				'shopping_ecommerce_wp_bottom_footer_col1_set',
				'shopping_ecommerce_wp_footer_bottom_col1_texthtml',
				],
				callback: function(layout){
					if(layout=='ft-btm-none' || layout=='ft-btm-two' || layout=='ft-btm-three' ){
					return false;
					}
					return true;
				}
				
		},


		{
				controls: [ 
				'shopping_ecommerce_wp_bottom_footer_col1_set',
				'shopping_ecommerce_wp_footer_bottom_col1_texthtml',
				],
				callback: function(layout){
					if(layout=='ft-btm-one' ){
					return true;
					}
					return false;
				}
				
		},
		
		
		
		// col1
			{
				controls: [    
				'shopping_ecommerce_wp_bottom_footer_col1_set',
				'shopping_ecommerce_wp_footer_bottom_col1_texthtml',
				],
				callback: function(layout){
					var val = api( 'shopping_ecommerce_wp_bottom_footer_col1_set' ).get();
					if((layout!== 'ft-btm-none') && val=='text'){
					return true;
					}
					return false;
				}
			},
				
									
					
];


OPNCustomizerToggles ['shopping_ecommerce_wp_bottom_footer_col1_set'] = [
			{
				controls: [    
				'shopping_ecommerce_wp_footer_bottom_col1_texthtml',
				],
				callback: function(layout){
					var val = api( 'shopping_ecommerce_wp_bottom_footer_layout' ).get();
					if((layout == 'text') && (val!=='ft-btm-none')){
					return true;
					}
					return false;
				}
			},
			
			
			
			
		];


	});
})( jQuery );