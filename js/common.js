
// $(window).load(function() {
	 var checkheadermenu = 0;
	// $(".loader_inner").fadeOut();
	// $(".loader").delay(400).fadeOut("slow");

	$(".slider").slick({
	  dots: true,
	  infinite: true,
	  speed: 500,
	  fade: true,
	  cssEase: 'linear',
		autoplay: true,
	  autoplaySpeed: 3000,
});
$(".clients-slider").slick({
	dots: true,
	infinite: true,
	speed: 500,
	slidesToShow: 4,
  slidesToScroll: 1,
	cssEase: 'linear',
 // centerMode: true,
 // variableWidth: true,
	autoplay: true,
	autoplaySpeed: 3000,
});
$("#fa-bars").click(function(){
	if(checkheadermenu == 0){
		$(".header-menu").css({'display':'flex'});
		checkheadermenu = 1;
	}else if (checkheadermenu == 1) {
		$(".header-menu").css({'display':'none'});
		checkheadermenu = 0;
	}
});
// $(".accord-item").click(function(){
// 	if(checkAccord == 0){
// 		$(this).animate({'height':1000},500);
// 		checkAccord = 1;
// 	}else{
// 		$(this).animate({'height':105},500);
// 		checkAccord = 0;
// 	}
// });

	// $(".accord-item").click(function(){
	// 	if(checkAccord == 0){
	// 		$(this).animate({'height':1000},500);
	// 		checkAccord = 1;
	// 	}else{
	// 		$(this).animate({'height':105},500);
	// 		checkAccord = 0;
	// 	}
	// });
// });
