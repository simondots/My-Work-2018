$(window).scroll(function() {
  parallax();
});

function parallax() {

  var wScroll = $(window).scrollTop();

$('.parallax--box').css('top',
-5+(wScroll*0.0225)+'em');
// Who we are blocko automatinis pavaziavimas efektas
// -5+ nes uzdejau 5em css,  *0.0225 scroll greitis
}

// var windowWidth = $(window).width();
//
// $('.container').mousemove(function(event) {
//
//     var moveX = (($(window).width() / 2) - event.pageX) * 0.1;
//     var moveY = (($(window).height() / 2) - event.pageX) * 0.1;
//     $('.footer').css('margin-left' , moveX + 'px');
//     $('.footer').css('margin-top' , moveY + 'px');
// });
// failed effect above :'(
