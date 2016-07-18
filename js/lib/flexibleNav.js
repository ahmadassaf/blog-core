// Flexible Nav jQuery library.
(function($){
	"use strict";

  // **Utilities functions**
  //
  // Generate an unique number identifier
  var _uuid = 0;
  var uuid = function(){ return ++_uuid; };

  // Template for creating a nav element with links.
  //
  // * `links` : an Array of *{ href, text }*
  var tmplNav = function(links) {
  	var nav = $('<nav class="flexible-nav"><ul></ul></nav>');
  	var lis = $.map(links, function(link){
  		return $('<li><a class="mark-container" href="' + link.href + '"><span>' + link.text+ '</span></a></li>')[0];
  	});
  	nav.find('ul').append(lis);
  	return nav;
  }
  

  // Retrieve a node pointed by an a element `aEl` hash href.
  var targetForLink = function(aEl) {
  	var href = $(aEl).attr('href');
  	if(href.substring(0,1) == '#') {
  		var target = $(href);
  		return target.size() ? target : null;
  	}
  	return null;
  }


  // FlexibleNavMaker
  // ------------------------
  // Dynamically create a nav.
  //
  // * `selector` (optional) : selector for all nodes to add in nav.
  // using `h1, h2, h3` if not setted.
  window.FlexibleNavMaker = function(selector) {
  	var self = this;
  	self.nodes = $(selector || 'h1,h2,h3');

    // ### .make() ###
    // An instance of FlexibleNavMaker contains only a `make` method
    // which create the nav element with nodes matching `selector`.
    self.make = function() {
    	var links = self.nodes.map(function(){
    		var node = $(this);
	// Find the id or create a unique one
	var id = node.attr('id');
	if(!id) {
		while(!id) {
			id = 'n'+( uuid() );
			if($('#'+id).size()>0) id = null;
		}
		node.attr('id', id);
	}
	// The text link is the `data-navtext` attribute or the node text.
	var text = node.attr('data-navtext') || node.text();
	return { href: '#'+id, text: text };
});
    	return tmplNav(links);
    }
  }

  // FlexibleNav
  // -----------
  // Make a nav element "flexible".
  //
  // * `nav` : a nav DOM element
  window.FlexibleNav = function(nav) {
  	var self = this;
  	self.nav = $(nav);

    // Init links adding some classes.
    //
    // Set the target node name class.
    // Example: class `tnn-h1`
    self.updateClasses = function() {
    	self.nav.find('a').each(function(){
    		var node = $(this);
    		var target = targetForLink(node);
    		if(target) {
    			node.addClass('tnn-'+target[0].nodeName.toLowerCase());
    		}
    	});
    }

    // ### .update() ###
    self.update = function() {
      var documentHeight = $(document).height();
      var windowHeight = $(window).height();
      
      // Transform links into array of visible target `top` position and link `node`.
      var links = self.nav.find('a').map(function(){
        var node = $(this);
        var target = targetForLink(node);
        if(target==null || !target.is(':visible')) return null;
        return {
          top: target.offset().top,
          node: node
        };
      });

      // Update nav link positions.
      $.each(links, function(i, link) {
         link.node.css('top', (100*link.top/documentHeight)+'%');
      });
    }

       $('.mark-container').on('click', function(e)
       {
         e.preventDefault();      
         var elem = $($(this).attr('href'))[0];
         var scrollTo = $(elem).offset().top - 100;
         var that = this;
         $('body').animate({scrollTop: scrollTo }, function(){
           $('.mark-container').removeClass('current');          
           $(that).addClass('current');
         });
       });

       $(".mark-container").hover(
         function () { if (!$(this).hasClass('current')) $(this).find('span').show();},
         function () { $(this).find('span').hide();});

       self.updateClasses();
       self.update();       
       window.flexibleNavUpdate = self.update;
     }
 }(jQuery));