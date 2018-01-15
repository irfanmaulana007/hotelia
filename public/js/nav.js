// Nav flex
$(window).scroll(function(){
	if($(document).scrollTop() > 60) {
    	$("header nav").addClass("dark");
    }else {
    	$("header nav").removeClass("dark");
    }
});