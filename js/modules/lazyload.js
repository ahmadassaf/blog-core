define(["lib/imagesLoaded"],
	function(){
		function LAZYLOAD(container){

			console.log("**** Retreiving a Lazy-Loader ****");

			this.container = container;
			this.attach();
		}

		LAZYLOAD.prototype = {
			attach: function() {
				var viewport = $(window).scrollTop() + $(window).height() + 100;
				this.container.find('img:not([data-loaded="true"])').each(function() {

					if ($(this).offset().top <= viewport ) {
						$(this).attr('src', $(this).attr('data-src')).attr('data-loaded','true').removeAttr('data-src').css('opacity' , 0)
						.imagesLoaded(function() {
							if ($(this.images[0].img).attr('data-width')) {
								width  = $(this.images[0].img).attr('data-width');
								height = $(this.images[0].img).attr('data-height');
								$(this.images[0].img).attr({ "width" : width , "height" : height });
							}
							$(this.images[0].img).removeAttr("style").animate({opacity:1},500);							
						})
					}
				});
			}
		};
		return( LAZYLOAD );
	}
);