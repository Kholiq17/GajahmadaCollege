
$(window).scroll(function(){ 
	var a = 30;
	var pos = $(window).scrollTop();
	if(pos > a) {
		$(".navbarku").addClass('blue');
		$(".blue").addClass('darken-3');
	}
	else {
		$(".navbarku").removeClass('blue');
		$(".blue").removeClass('darken-3');
	}
});

// (function ($) {
// 	$(function () {

//         // //initialize all modals           
//         $('.modal').modal();

//         // //now you can open modal from code
//         // $('#modal1').modal('open');

//         //or by click on trigger
//         $('#actimbul').click(function(){
//   			//do somethings
//   			$('#ac').modal('open');
// 		});
// 		$('#perpustimbul').click(function(){
//   			//do somethings
//   			$('#perpus').modal('open');
// 		});
// 		$('#wifitimbul').click(function(){
//   			//do somethings
//   			$('#wifi').modal('open');
// 		});
//     }); // end of document ready
// })(jQuery); // end of jQuery name space