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

	// Live preview for footer settings
	wp.customize( 'footer_name', function( value ) {
		value.bind( function( to ) {
			$( '.footer-identity b' ).text( to );
		} );
	} );
	wp.customize( 'footer_email', function( value ) {
		value.bind( function( to ) {
			$( '.footer-email' ).text( to );
		} );
	} );
	wp.customize( 'footer_role', function( value ) {
		value.bind( function( to ) {
			$( '.footer-role' ).text( to );
		} );
	} );

	wp.customize( 'footer_copyright_year', function( value ) {
		value.bind( function( to ) {
			updateCopyrightText();
		} );
	} );
	wp.customize( 'footer_copyright_text', function( value ) {
		value.bind( function( to ) {
			updateCopyrightText();
		} );
	} );

	function updateCopyrightText() {
		var year = wp.customize('footer_copyright_year')();
		var text = wp.customize('footer_copyright_text')();
		$('.footer-copyright').html('&copy; Copyright ' + year + '. ' + text);
	}

	var MAX_PROJECTS = 6;

	function createRepeaterItem(index, selected) {
		var html = '<div class="my-portfolio-repeater-item">';
		html += '<select class="my-portfolio-project-select" name="home_projects_repeater[' + index + ']">';
		html += '<option value="">-- Select Project --</option>';
		if (window.myPortfolioProjects) {
			window.myPortfolioProjects.forEach(function(project) {
				var sel = (selected == project.id) ? 'selected' : '';
				html += '<option value="' + project.id + '" ' + sel + '>' + project.title + '</option>';
			});
		}
		html += '</select>';
		html += '<button type="button" class="button-link my-portfolio-repeater-remove">Remove</button>';
		html += '</div>';
		return html;
	}

	function updateRepeaterHidden($container) {
		var values = [];
		$container.find('.my-portfolio-project-select').each(function(){
			var val = $(this).val();
			if(val) values.push(parseInt(val));
		});
		$container.closest('.customize-control').find('.my-portfolio-repeater-hidden').val(JSON.stringify(values)).trigger('change');
	}

	function updateAddButton($control) {
		var $list = $control.find('.my-portfolio-repeater-list');
		var $addBtn = $control.find('.my-portfolio-repeater-add');
		if ($list.children('.my-portfolio-repeater-item').length >= MAX_PROJECTS) {
			$addBtn.prop('disabled', true);
		} else {
			$addBtn.prop('disabled', false);
		}
	}

	$(document).on('click', '.my-portfolio-repeater-add', function(){
		var $control = $(this).closest('.customize-control');
		var $list = $control.find('.my-portfolio-repeater-list');
		var index = $list.children('.my-portfolio-repeater-item').length;
		if (index >= MAX_PROJECTS) return;
		var $new = $(createRepeaterItem(index, ''));
		$list.append($new);
		updateRepeaterHidden($list);
		updateAddButton($control);
	});

	$(document).on('click', '.my-portfolio-repeater-remove', function(){
		var $control = $(this).closest('.customize-control');
		var $item = $(this).closest('.my-portfolio-repeater-item');
		var $list = $item.parent();
		$item.remove();
		// Re-index names
		$list.children('.my-portfolio-repeater-item').each(function(i){
			$(this).find('select').attr('name', 'home_projects_repeater[' + i + ']');
		});
		updateRepeaterHidden($list);
		updateAddButton($control);
	});

	$(document).on('change', '.my-portfolio-project-select', function(){
		updateRepeaterHidden($(this).closest('.my-portfolio-repeater-list'));
	});

	// On Customizer load, update the add button state
	$(document).ready(function(){
		$('.customize-control-projects_repeater').each(function(){
			updateAddButton($(this));
		});
	});
})( jQuery ); 