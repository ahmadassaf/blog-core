define(["modules/elements","lib/swift"], function(ELEMENTS)
{
	console.log("**** Preparing Search ****");

	$('.searchForm').submit(function(){
		var selected = '';
		$('input[type="checkbox"]:checked').each(function(){ selected += $(this).val() + ','; });
		ELEMENTS.DOM.searchCategoryFilter.val(selected.substr(0, selected.length - 1));
		return true;
	});

	ELEMENTS.DOM.searchBox.on('input',function(){

		var spin_icon   = ELEMENTS.DOM.searchField.attr('data-spin');
		var search_icon = ELEMENTS.DOM.searchField.attr('data-search'); 

		if ($(this).val().length == 0 ) ELEMENTS.DOM.searchField.attr('data-icon',search_icon).removeClass('animate-spin');
		else ELEMENTS.DOM.searchField.attr('data-icon',spin_icon).addClass('animate-spin');
		}).swiftype({ engineKey: 'Z7zeoGk4r5a5U6FVXzzo' });

	ELEMENTS.DOM.searchExpandCategories.on('click', function()
	{
		if ($(this).attr("data-action") == "expand") {
			$('.cat-filter[data-hidden="hidden"]').css("display","block");
			ELEMENTS.DOM.searchExpandCategories.attr("data-action", "hide").text("- Minimze Categories");
		} else {
			$('.cat-filter[data-hidden="hidden"]').css("display","none");
			ELEMENTS.DOM.searchExpandCategories.attr("data-action", "expand").text("+ Expand Categories");
		}
	});

	if (Swiftype && Swiftype.disableEmbedTracking !== true) {
		var i = document.createElement('iframe'),
		params = '#host=' + encodeURIComponent(window.location.hostname);
		i.style.display = 'none';
		i.onload = function() { i.parentNode.removeChild(i); };
		i.src = "https://swiftype.com/te" + params;
		document.body.appendChild(i);
	}

});



