define(["modules/elements","modules/lazyload"],
	function(ELEMENTS,LAZYLOAD){

		function INFINITE_SCROLLER(container,scrollerContainer){

			console.log("**** Attaching an infinite Scroller ****");

			var infiniteScroll = this;
			
			infiniteScroll.lazyload          = new LAZYLOAD(container);
			infiniteScroll.is_loading        = false;
			infiniteScroll.cloned            = $(ELEMENTS.DOM.archiveItem).clone();
			infiniteScroll.mainHref          = window.location.href;
			infiniteScroll.bottom_margin     = 200;
			infiniteScroll.break_point       = infiniteScroll.check_breakpoint(scrollerContainer);
			infiniteScroll.loaded_first_time = false;

			$(ELEMENTS.DOM.articlePostsPreview).before(ELEMENTS.DOM.lazyLoader);

			ELEMENTS.DOM.archiveFilters.on("click", function(event)
			{
				event.preventDefault();
				// Check if already executing an AJAX call and abort it
				if (infiniteScroll.ajaxCall) infiniteScroll.ajaxCall.abort();
				// Get the filter item that has been clicked on
				var radio = $(this).prev("input[type='radio']");
				// check if the element has not been filtered upon already and the category contains posts (not empty)				
				if (radio.attr('id') !== $("input[type='radio']:checked").attr('id') && 
					$(this).prev("input[type='radio']").attr('data-count') !== '0') {
						// Call the filtering function
						infiniteScroll.filter(radio,$(this));					
				}				
			});

			window.scrolling(window,function() {
				/*
				 Deprecated condition - Checks if scrolling reached the related items section
				 $(window).scrollTop() + $(window).height() + infiniteScroll.bottom_margin >= $(document).height()
				 */
				if ( infiniteScroll.check_breakpoint(scrollerContainer) ) {
					infiniteScroll.loaded_first_time = true;
					// Check if we are not loading already and that there are links (posts to fetch)
					if (!infiniteScroll.is_loading && $(ELEMENTS.DOM.paginationDiv).length !== 0) infiniteScroll.attach();
				}
			});
		}

		INFINITE_SCROLLER.prototype = {

			attach: function(){

				console.log("**** Loading Posts !! ****");

				// Get the URL of the next page
				var url = $(ELEMENTS.DOM.paginationDiv +' a:not(.active):first');
				var infiniteScroll = this;

				if (this.is_loading || url.length == 0 ) return;

				infiniteScroll.is_loading = true;
				// Show the preloader animation
				$(ELEMENTS.DOM.inifiniteScrollLoader).show();

				$.ajax({
					url: $(url).attr('href'),
					success: function(html) {
						// On function success get the archive items elements and append them to the archive page
						$('.archive').append($(html).find(ELEMENTS.DOM.archiveItem));
						// Add a border-bottom attribute to the posts preview and remove it from the last post before 
						$(ELEMENTS.DOM.articlePostsPreview).css('border-bottom', '1px solid #e8e8e8');
						$('.archive_item:nth-child(11)').css('border-bottom', 'none');
						// Add a flag "inactive class" to indicate that the URL has been parsed
						$(url).addClass('active').removeClass('inactive');
						// Hide the preloading animation
						$(ELEMENTS.DOM.inifiniteScrollLoader).hide();
					}					
				}).always(function() { infiniteScroll.is_loading = false; });				
			},

			check_breakpoint: function(scrollerContainer) {
				
				var infiniteScroll = this;

				if (!infiniteScroll.loaded_first_time) return scrollerContainer.scrollTop() + $(ELEMENTS.DOM.articlePostsPreview).height() * 2 >= $(ELEMENTS.DOM.articlePostsPreview).offset().top || $(window).height() > $(ELEMENTS.DOM.articlePostsPreview).offset().top; 
					else return $(window).scrollTop() + $(window).height() + infiniteScroll.bottom_margin >= $(document).height();
			},

			filter: function(radio,label) {

				var infiniteScroll = this;	

				console.log("**** Filtering Posts !! ****");

				// Remove the checked attribute from all the buttons
				$("input[type='radio']").removeAttr('checked');
				// Assign the checked attribute only to the clicked radio
				radio.attr('checked','checked');
				// Check if the user is clicking back to view all and reload from cached elements
				if (radio.attr('id') == "*") $(ELEMENTS.DOM.filtersBar).after(infiniteScroll.cloned);			
				else {
					// If the category is not cached then make the AJAX call
					infiniteScroll.ajaxCall = $.ajax({
						url: infiniteScroll.mainHref + radio.attr('id'),
						success: function(html) {
							// Remove all the posts in the archive and append the newly found elements and the pagination div
							var items      = $(html).find(ELEMENTS.DOM.archiveItem);
							var pagination = $(html).find(ELEMENTS.DOM.paginationDiv);

							infiniteScroll.loaded_first_time = false;
							
							$(ELEMENTS.DOM.archiveItem).remove();
								$(ELEMENTS.DOM.paginationDiv).replaceWith(pagination); // replace the pagination div
								$('.pagination a:first').addClass('active');		   // Mark first link as visisted
								window.history.pushState("","",radio.attr('id'));      // Change the address bar location
								$(ELEMENTS.DOM.filtersBar).after(items);			   // Append the new filtered items
								infiniteScroll.lazyload.attach();					   // Attach a lazy loader							
						}
					}).always(function() { infiniteScroll.is_loading = false; });	
				};
			}
		};
		return( INFINITE_SCROLLER );
	}
);