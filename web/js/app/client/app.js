( function($) {
	/**
	 * Constructs the application object.
	 */
	CORSExample.App = function() {

		// the core configuration
		this.config = new CORSExample.Config();

		// let's get the show on the road!
		this.init();
	};

	CORSExample.App.prototype = {

		init : function() {

			var self;

			self = this;
			
			//Make a call to the PHP Server
			$.get(this.config.phphost + "/data.json", function(data){
				$('#php-data-block').html(JSON.stringify(data));
			});
			
			//Make a call to the PHP Server
			$.get(this.config.nodehost, function(data){
				$('#node-data-block').html(data);
			});
			
			
		}

	};

	$(document).bind('ready', function() {
		var x = new CORSExample.App();
	});
}(jQuery));