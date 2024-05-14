/*************************************/
// Blog Archive Hide and Show control
/*************************************/
( function( $ ){
OPNControlTrigger.addHook( 'shopping-ecommerce-wp-toggle-control', function( argument, api ){
OPNCustomizerToggles ['shopping_ecommerce_wp_blog_post_content'] = [
		    {
				controls: [    
				'shopping_ecommerce_wp_blog_expt_length',
				'shopping_ecommerce_wp_blog_read_more_txt',
				],
				callback: function(layout){
					if(layout=='full'|| layout=='nocontent'){
					return false;
					}
					return true;
				}
			},	
		];	
	});
})( jQuery );