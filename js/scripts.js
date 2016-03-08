$(function(){

	//menu 
	var $toggleMenu = $('.toggle-menu');
	var $menu = $('.ed-menu');
	$toggleMenu.click(function(){
		$menu.toggleClass('mostrar');
	});


    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();


});//fin function

