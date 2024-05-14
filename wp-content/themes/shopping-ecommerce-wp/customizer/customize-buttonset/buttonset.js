/**
 * Button control in customizer
 *
 * @package Shopping Ecommerce WP
 */
wp.customize.controlConstructor['shopping-ecommerce-wp-buttonset'] = wp.customize.Control.extend({
	ready: function() {
		'use strict';
		var control = this;
		// Change the value
		this.container.on( 'click', 'input', function() {
			control.setting.set( jQuery( this ).val() );
		});
	}

});

