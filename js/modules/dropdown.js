define(['modules/elements'],
	function(ELEMENTS){
		
		console.log("**** Building the DropDown ****");
		
		function DROPDOWN(el,container){
			this.container = container;
			this.dd = el;
			this.placeholder = this.dd.children('span');
			this.initEvents();
		}

		DROPDOWN.prototype = {
			initEvents : function() {
				var obj = this;
				this.container.each(function(i) {
					$(ELEMENTS.DOM.dropDownMenu).append('<li><a href="'+ $(this).find('a').attr('href') +'">' + $(this).find('a').text() + '</a></li>');
				});
				obj.dd.on('click', function(event){
					$(this).toggleClass('active');
					return false;
				});
				$(ELEMENTS.DOM.dropDownMenuItem).click(function() {
					window.location = $(this).find('a').attr('href');
				});
			},
		};
		return( DROPDOWN );
	}
	);