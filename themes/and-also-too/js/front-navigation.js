/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
  console.log('front-navigation.js');
( function() {
	var container, fixedContainer, button, menu, links, i, len;

	fixedContainer = document.getElementById( 'fixed-site-navigation' );
	if ( ! fixedContainer ) {
		return;
	}

	container = document.getElementById( 'site-navigation' )
	if ( ! container ) {
		return;
	}

	openToggle = document.getElementById( 'open-toggle' );
	if ( 'undefined' === typeof openToggle ) {
		return;
	}

	var openToggleFixed = document.getElementById( 'open-toggle-fixed' );
	console.log(openToggleFixed);
	if ( 'undefined' === typeof openToggleFixed ) {
		return;
	}

	closeToggle = document.getElementById('close-toggle');
	if ( 'undefined' === typeof closeToggle ) {
		return;
	}

	var closeToggleFixed = document.getElementById('close-toggle-fixed');
	if ( 'undefined' === typeof closeToggle ) {
		return;
	}


	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		openToggle.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	openToggle.onclick = function() {
		container.className += ' toggled';
		openToggle.setAttribute( 'aria-expanded', 'true' );
		menu.setAttribute( 'aria-expanded', 'true' );
	};

	openToggleFixed.onclick = function() {
		console.log('openToggle clicked');
		fixedContainer.className += ' toggled';
		openToggle.setAttribute( 'aria-expanded', 'true' );
		menu.setAttribute( 'aria-expanded', 'true' );
	};

	closeToggle.onclick = function() {
		container.className = container.className.replace( ' toggled', '' );
		closeToggle.setAttribute( 'aria-expanded', 'false' );
		menu.setAttribute( 'aria-expanded', 'false' );
	};

	closeToggleFixed.onclick = function() {
		fixedContainer.className = fixedContainer.className.replace( ' toggled', '' );
		closeToggle.setAttribute( 'aria-expanded', 'false' );
		menu.setAttribute( 'aria-expanded', 'false' );
	};


	// Get all the link elements within the menu.
	links = menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				if ( -1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}

	/**
	 * Toggles `focus` class to allow submenu access on tablets.
	 */
	( function( container ) {
		var touchStartFn, i,
			parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

		if ( 'ontouchstart' in window ) {
			touchStartFn = function( e ) {
				var menuItem = this.parentNode, i;

				if ( ! menuItem.classList.contains( 'focus' ) ) {
					e.preventDefault();
					for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
						if ( menuItem === menuItem.parentNode.children[i] ) {
							continue;
						}
						menuItem.parentNode.children[i].classList.remove( 'focus' );
					}
					menuItem.classList.add( 'focus' );
				} else {
					menuItem.classList.remove( 'focus' );
				}
			};

			for ( i = 0; i < parentLink.length; ++i ) {
				parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
			}
		}
	}( container ) );
} )();
