console.log( " Labas ");

document.querySelector('header h1').innerHTML= "Pakeistas su js";

$('footer h2').text('Pakeistas su JQUERY');

var x = $ ('footer h1').html();
// nenurodzius nieko skliausteliuose jis paima
console.log("footerio h1 yra:",x);

var blokas = $('<section>mano tekstas</section>');
var blogas = $('<section></section>').text("mano tekstas");


$('body').append( blokas );
blokas.appendTo('header');

blokas.insertAfter(header);
