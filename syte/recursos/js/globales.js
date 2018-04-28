jQuery(document).ready(function(){
	initMenu();
});

jQuery(window).scroll(function() {
	initMenu();
});

jQuery(window).resize(function() {
	initMenu();
});

function initMenu(){
/*	var w = jQuery(window).width();
	if(jQuery(this).scrollTop() > 10) {
		if( !jQuery("nav").hasClass("opaco") ){
			jQuery('nav').addClass('opaco');
		}
	} else {
		if( !jQuery(".navbar").hasClass("opaco") ){
			jQuery('nav').removeClass('opaco');
		}
	}*/
}