console.log( " Labas ");

var h1h2= {
  'font-size':'50px',
  'corol':"hotpink",
  'background-color':"rgb(44, 176, 124)"
  };
$('h1').css( h1h2 );
// A) visus h1 ir h2 pakeisti i melyna spalva (visur naudoti tik jQuery)
// A2) kas antra h2 pakeisti i melyna
$( "h2:even" ).css("color","rgb(60, 194, 190)");
// B) paskutinta "li" elemnta pakeisti i zalia (visur naudoti tik jQuery)
$("li").last().css("background","rgb(160, 40, 196)");

// C) visus 'li' elementus pakeisti i geltonus (isskyrus su klase 'reklama') pvz.: li:not('.reklama') {}
$("li:not('.reklama')").css({"color": "rgb(128, 152, 217)"});
// $("li").nextAll();
// $("li:not('.reklama')").css("color")
// UZDUOTIS 1
// pakeisti visus h1 tekstus i "Antraste nr: XX" ( vietoj "xx" isvesti skaiciu, kelinta tai antrate)

var manoH4 = $('h4').text();
console.log("h4 tekstas buvo:",manoH4);
// isvedimas i console and add console check
var manoH3 = $('h3').html();
$('h3').text(manoH3 + '3 pakeistas');
// add something to all h3

$('h5').html("<u> 5 Pakeistas </u> ");

// underline all h5

//  UZDUOTIS 2
// pakeisti visus h2 tekstus, kurie yra "section" elemente.
// pakeisti i "Pakeista antraste "
//
$('h1:first').text("Antraste nr:1");
$('h1:nth-of-type(2)').text("Antraste nr:2");
$('h1:last').text("Antraste nr:3");
$('section h2').html("Pkeista antraste");
// UZDUOTIS 3
// i console atspausdinti "li" elemento, kurio klase "reklama" - teksta
$(' li .reklama ').text();
var liText = $(' li.reklama ').text();
console.log("li text is:", liText);
// UZDUOTIS 4
// i console atspausdinti  visus "li" tekstus
var allLI = $("li");
for(var i=0; i<allLI.length; i++) {
  console.log( allLI.eq(i).text());
}

//-------advance --------

// UZDUOTIS 5
// sukeisti vietomis "li" elementu "about" ir "gallery" (naujant jQuery)


//------ atributes--------------------------
// UZDUOTIS 6
// surasti <li classs='reklama'> ir jam ideti dar viena taributa: style='color: red'   (naujant jQuery)
$('li.reklama').attr('style','color:red');
$('li.reklama').attr('title','You luv meeee bruhhh');
$('li.reklama').attr('width','20px');


// UZDUOTIS 7
// A. visiems "li" elementams pridete atributa: classs='nav-item '   (naujant jQuery)
// B. pirmam "li" elementui uzddeti dar viena klase: "active"
$('li').attr('class','nav-item');


// arba taip, (atributas cia atlieka same funkcija bet sunaikins visas kitas klases taip kad nelabai gerai)

$('li').addClass('nav-item bg-primary m-3 p-3');
// UZDUOTIS 8
//   su jquery uzpildyti form'a uz vartotoja:
//  visiems "input" elementams pridete atributa: value=' xxx '   (naujant jQuery)
//  ivesti vardas: 'Tomas'
//  ivesti pastas: 'a@a.lt'


$("input[name='vardas']").val('Algirdas');
