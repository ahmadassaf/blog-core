define(["modules/lazyload","modules/ajax","modules/share","modules/elements","lib/scrolling","lib/flexibleNav","lib/hoverIntent"], 
	function(LAZYLOAD,AJAX,SHARE,ELEMENTS)
	{
		console.log("**** Preparing Post Index Functions ****");

		var ajaxLoader      = new AJAX();
		var share           = new SHARE(post_link);

		// Align all iframes (video embeds) to the right
		$('.postContent iframe').addClass('alignright').show();
		
		// Wrap the first image and liunk it to the aricles' URL
		if ($('.material img').length > 0 ) $('.material img').first().wrap('<a class="no_hover" href="'+$('.material a:not(.printandpdf):first').attr('href')+ '"></a>');
		
		// Check if a code highlight page exists and load the hilighter.js library
		if ($('code').length > 1) require(["lib/highlight"], function(hljs){
			$('pre code').each(function(i, e) {hljs.highlightBlock(e)});
		});

		// Check any code page in the page that is not a code block and add the highlight class for it
		$('code:not([class])').each(function(){  if ($(this).parents('pre').length == 0 ) $(this).addClass('highlightCode') });

		// Load the PrintPDF function on Click on the print toolbar
		ELEMENTS.DOM.printAndPDF.on('click', function(e){
				e.preventDefault();
				require(["modules/print"]);
		}); 

		new FlexibleNav(new FlexibleNavMaker(ELEMENTS.DOM.flexibleNavigation).make().prependTo('body'));

		ELEMENTS.DOM.sidebar.appendTo('body');

		function checkSideBar() {
			var distance = ELEMENTS.DOM.wrapperOverlay.css('right');
			if(distance == "auto" || distance == "0px") {
				ELEMENTS.DOM.wrapperOverlay.animate({right: '590px', duration: 400 }, { done : function() { ELEMENTS.DOM.snarcHandle.show(); } }); 
			} else {
				ELEMENTS.DOM.snarcHandle.hide();
				ELEMENTS.DOM.wrapperOverlay.animate({right: '0px', duration: 400});
			}
		}

		ELEMENTS.DOM.toggleSocialBar.on('click',function(){
			if (ELEMENTS.DOM.sidebar.is(":hidden")) {
				ajaxLoader.fetchSemanticDocument(post_link,post_excerpt,post_title,post_tags);
				ELEMENTS.DOM.sidebar.css('display','block');
				checkSideBar();
			} else checkSideBar();
		}); 
	}
);
