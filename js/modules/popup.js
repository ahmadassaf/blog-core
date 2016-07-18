define([],
	function(){
		console.log("**** Building a pop-up ****");
		
		function POPUP(){
			this.width = 640;
			this.height = 420; 
		}

		POPUP.prototype = {
			open: function(url){
				var popupName = 'popup_' + this.width + 'x' + this.height;
				var left = (screen.width- this.width)/2;
				var top = ((screen.height- this.height)/2)+25;
				var params = 'width=' + this.width + ',height=' + this.height + ',location=no,menubar=no,scrollbars=yes,status=no,toolbar=no,left=' + left + ',top=' + top;

				window[popupName] = window.open(url, popupName, params);

				if(window.focus) {
					window[popupName].focus();
				}
			}
		};
		return( POPUP );
	}
);