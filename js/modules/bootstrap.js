define(["modules/elements", "modules/lazyload", "modules/popupOpener", "modules/dropdown", "modules/search","lib/pace","lib/nicescroll","lib/scrolling"],
	function(ELEMENTS, LAZYLOAD, POPUP_OPENER, DROPDOWN)
	{
		console.log("**** Boostraping ****");

		var disquss_loaded = false;
		var break_point    = $(document).height() - 200;
		var lazyload       = new LAZYLOAD($('body'));
		var menu           = new DROPDOWN(ELEMENTS.DOM.responsiveMenu, ELEMENTS.DOM.responsiveMenuElement );
		var pop_options    = {
			activator         : ELEMENTS.DOM.searchIcon,
			element_to_show   : ELEMENTS.DOM.searchMenu,
			timeout           : 350
		};
		var popup          = new POPUP_OPENER(pop_options);

		Pace.start();
		popup.attach();

		if (typeof isPost !== "undefined" && isPost == true) check();

		$("body").niceScroll({cursorcolor: "#000"});

		// Attaching on the window scrolling "listener"
		window.scrolling(window,function() {

			lazyload.attach();
			if (typeof isPost !== "undefined" && isPost == true) {

				check();
				if (window.flexibleNavUpdate) window.flexibleNavUpdate();

				if ($(window).scrollTop() >= $(ELEMENTS.DOM.articleTopOffset).offset().top +  $(ELEMENTS.DOM.articleTopOffset).height()) {
					if ($('.header .postToolbar').length == 0) {
						$(ELEMENTS.DOM.postShareCounterBar).hide().appendTo(ELEMENTS.DOM.headerContainer).addClass('attachedSharingToolbar').fadeIn();
					}
				}  else if ($('.main .postToolbar').length == 0) {
					$(ELEMENTS.DOM.postShareCounterBar).appendTo(ELEMENTS.DOM.postMetaInformation).removeClass('attachedSharingToolbar');
				}
			}
		});

		// Check if we are in a category or search page and activiate infinite scrolling
		if (typeof isCategory !== "undefined" || typeof isSearch !== "undefined" ) require(["modules/infiniteScroll"],function(INFINITE_SCROLLER){
				new INFINITE_SCROLLER(ELEMENTS.DOM.lazyLoadContainer,$(window));
		});

		// Lazy loading Disqus Comments Function
		function check() {
			if(!disquss_loaded && $(window).scrollTop() + $(window).height()  + 200 >  break_point ) {
				disquss_loaded = true;
				(function() {
					var dsq = document.createElement('script'); dsq.type = 'text/javascript';
					dsq.async = true;
					dsq.src = '//' + "ahmadassaf" + '.disqus.com/embed.js';
					(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);

					// Disqus sepcific variables
					var disqus_shortname = "ahmadassaf";
					var disqus_title = post_title;
					var disqus_url = post_link;
					var disqus_identifier = 'ahmadassaf'+post_ID;
				})();
			}
		}
	}
);
