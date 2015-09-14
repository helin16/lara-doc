(function($){
	var APP = function(){
		var _defaults = {
			'serverPath': '/MobileApp.php',
			'id_dialogPage': 'dialogPage'
		},
		_user = {};

		this.getUser = function() {
			return _user;
		}
		this.setUser = function (user) {
			_user = user;
			return this;
		}
	};

	//initialising
	$.fn.initApp = function() {
		var tmp = {};
		tmp.myApp = $(document).data('lhApp');

		// Return early if this element already has a plugin instance
		if (tmp.myApp === undefined) {
			tmp.myApp = new APP();
			try {
				//check to support local storage
				if((!('localStorage' in window)) || window['localStorage'] === null)
					throw 'Local Storage NOT supported!';

				//check to support local storage
				if((!('sessionStorage' in window)) || window['sessionStorage'] === null)
					throw 'Session Storage NOT supported!';

				//check to support JSON
				if((!('JSON' in window)) || window['JSON'] === null)
					throw 'JSON NOT supported!';

			} catch (e) {
				alert('HTML5 or JSON is NOT supported by your browser: ' + e);
				return;
			}
			// Store plugin object in this element's data
			$(document).data('lhApp', tmp.myApp);
		}
		//load settings
		//tmp.myApp.loadServerPath();
		//binding all the events
		//tmp.myApp.bindEvents();
		return tmp.myApp;
	};

	$.fn.getApp = function() {
		return $(document).data('lhApp');
	}
})(jQuery);
