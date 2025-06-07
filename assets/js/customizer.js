(function( $ ) {
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Live preview for contact methods
	wp.customize( 'contacts_discord', function( value ) {
		value.bind( function( to ) {
			updateContactRow('fab fa-discord', to);
		} );
	} );
	wp.customize( 'contacts_email', function( value ) {
		value.bind( function( to ) {
			updateContactRow('fas fa-envelope', to);
		} );
	} );
	wp.customize( 'contacts_twitter', function( value ) {
		value.bind( function( to ) {
			updateContactRow('fab fa-twitter', to);
		} );
	} );
	wp.customize( 'contacts_github', function( value ) {
		value.bind( function( to ) {
			updateContactRow('fab fa-github', to);
		} );
	} );
	wp.customize( 'contacts_linkedin', function( value ) {
		value.bind( function( to ) {
			updateContactRow('fab fa-linkedin', to);
		} );
	} );
	wp.customize( 'contacts_instagram', function( value ) {
		value.bind( function( to ) {
			updateContactRow('fab fa-instagram', to);
		} );
	} );
	wp.customize( 'contacts_whatsapp', function( value ) {
		value.bind( function( to ) {
			updateContactRow('fab fa-whatsapp', to);
		} );
	} );

	function updateContactRow(icon, value) {
		var $box = jQuery('.contacts-box');
		if (!$box.length) return;
		var found = false;
		$box.find('.contacts-box-row').each(function() {
			if (jQuery(this).find('i').hasClass(icon)) {
				if (value) {
					jQuery(this).html('<i class="' + icon + '"></i> ' + value);
				} else {
					jQuery(this).remove();
				}
				found = true;
			}
		});
		if (!found && value) {
			$box.append('<div class="contacts-box-row"><i class="' + icon + '"></i> ' + value + '</div>');
		}
	}
})( jQuery ); 