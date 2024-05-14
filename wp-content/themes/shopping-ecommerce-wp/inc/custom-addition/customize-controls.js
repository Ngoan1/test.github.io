( function( api ) {

	// Extends our custom "creative-gem" section.
	api.sectionConstructor['shopping-ecommerce-wp'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );