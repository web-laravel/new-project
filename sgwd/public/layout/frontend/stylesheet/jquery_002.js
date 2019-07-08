
// navbar-fixed-top click
		$(document).on('scroll', function() {
			if ($(document).scrollTop() > window.innerHeight) {
				$('#header').addClass('fix_menu');							
			} else {
				$('#header').removeClass('fix_menu');						
			}
			if($(document).scrollTop() > window.innerHeight){
				$('.tabs').addClass('fix_tabs');
			} else {
				$('.tabs').removeClass('fix_tabs');
			}

			
			if ($(document).scrollTop() > 200) {
				$('.contact_right').addClass('fix');
				$('.fb_right').addClass('facefix');						
			} else {
				$('.contact_right').removeClass('fix');	
				$('.fb_right').removeClass('facefix');					
			}
		});