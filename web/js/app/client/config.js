( function($) {
	CORSExample.Config = function() {
		$.support.cors = true;
		this.phphost = 'http://testbed';
		this.nodehost = 'http://testbed:3000';
	};
}(jQuery));