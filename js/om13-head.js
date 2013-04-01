(function () {
	'use strict';
	document.documentElement.className += (
		(typeof window.devicePixelRatio != 'undefined' && window.devicePixelRatio > 1.6)
			? ' retina' : ' no-retina'
	);
})();
