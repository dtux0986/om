(function ($) {
	var navbar = $('.navbar-nav');


	var navbarHasChildren = navbar.find('.menu-item-has-children');

	var navbarSubMenu = navbarHasChildren.find('.sub-menu');

	navbarSubMenu.addClass('dropdown-menu');

})(jQuery);