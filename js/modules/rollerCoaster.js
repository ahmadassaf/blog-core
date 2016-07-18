define([],
	function(){
		console.log("**** Building a Roller Coaster ****");
		
		function ROLLER(){
			this.waitTime = 15000;
		}

		ROLLER.prototype = {
			build: function(el){
				var hovered = false;
				$(el).hover(
					function() {hovered = true; },
					function() {hovered = false;}
					);

				if($(el).find('li').length > 5) {
					setInterval(function() {
						if (!hovered) {
							var posts =  $(el).find('li');
							posts.first().slideUp('slow', function() {
								$(this).appendTo($(el)).show();
							})
						}
					}, this.waitTime);
				} 
			}
		};
		return( ROLLER );
	}
);