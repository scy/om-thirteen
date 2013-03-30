(function ($) {
	'use strict';
	$('html').addClass(
		(typeof window.devicePixelRatio != 'undefined' && window.devicePixelRatio > 1.6)
			? 'retina' : 'no-retina'
	);
})(jQuery);
