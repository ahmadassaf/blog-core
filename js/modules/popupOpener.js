define([],
	function(){
		console.log("**** Building a Popup Opener with Delay ****");

		function POPUP_OPENER(options){
			this.activator       = options.activator;
			this.element_to_show = options.element_to_show;
			this.timeout         = options.timeout;
			this.functionOnShow  = options.functionOnShow;
			this.functionOnHide  = options.functionOnHide;
		}

		POPUP_OPENER.prototype = {
			attach: function(){
				var timeout;
				var popupHandler = this;
				popupHandler.activator.hover(function() {
					clearTimeout(timeout);
					if (popupHandler.functionOnShow) popupHandler.functionOnShow();
					popupHandler.element_to_show.show();
				}, function() {
					if ($('.swiftype-widget:hover').length == 0) {
						timeout = setTimeout(function(){
							if (popupHandler.functionOnHide) popupHandler.functionOnHide();
							popupHandler.element_to_show.hide();
						}, popupHandler.timeout);
					}
				});
				//Handling clicking Outside the container to hide
				$(document).mouseup(function(e)
				{
					var container = popupHandler.element_to_show;
					if (container.has(e.target).length === 0) container.hide();
				});
			}
		};
		return( POPUP_OPENER );
	}
);