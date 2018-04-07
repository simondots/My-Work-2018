console.log( " Labas ");
//==============TEORIJA ++ / -- ==========
    // var x = 10;
    // x = x + 1;  // x = 11
    // x += 1;     // x = x + 1;

//=============FOR   LOOP====================
// teo:  https://www.w3schools.com/js/js_loop_for.asp
//  https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration

// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)
for (var i = 0; i < 50; i++){
  console.log("Azuolas"+i);
}
// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba
var tekstas = "<article class='bg-success'> <h2> Azuolas </h2> </article>";
for (var i=0; i<15; i++) {
//   document.write ( tekstas );
// }

// arba

document.querySelector('footer').innerHTML += tekstas;
}
function printXX( x){
  document.write(x);
}
// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)" i browser langa (panaudojanti document.write arba innerHTML)
// printX (" Lansbergis 88 ");
// }
// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu
// for (var i = 0; i < 100; i++){
//   printX ("<b>Miskas</b>");
// }

// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// skirtingius paveikslelius
var logo = '<img src="http://cha.lt/wp-content/uploads/2014/12/11647010-R3L8T8D-900-2.jpg" alt="fox"';
var logo1 = '<img src="http://cha.lt/wp-content/uploads/2014/12/11647010-R3L8T8D-900-2.jpg" alt="fox"';
var logo2 = '<img src="http://cha.lt/wp-content/uploads/2014/12/11647010-R3L8T8D-900-2.jpg" alt="fox"';
var logo3 = '<img src="http://cha.lt/wp-content/uploads/2014/12/11647010-R3L8T8D-900-2.jpg" alt="fox"';
var logo4 = '<img src="http://cha.lt/wp-content/uploads/2014/12/11647010-R3L8T8D-900-2.jpg" alt="fox"';
var mass=[logo,logo1,logo2,logo3,logo4];
// console.log(mass[4]);
for (var i = 0; i < 5; i++) {
  var ss=mass[i];
  console.log(mass[i]);
  printXX(ss);
}

// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! add logo !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// }

//
// function addTheImage() {
//     var img = document.createElement('img');
//     img.src = "http://cha.lt/wp-content/uploads/2014/12/11647010-R3L8T8D-900-2.jpg"; }

// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)
//
// piestiEilute(40);
// console.log('vardas | pavarde | amzius');
// piestiEilute(40);
// spausdintiStulpeli(15);
// // /*
// // ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |
// // advance
// // 5 UZDUOTIS
// // sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
// var kiekMenesiu = 10 * 12;
// var menAtlyginimas = 680;
// var algosPokytis = 1;  // 1%
// */
// ==============SCSS============================

//========= local/global or Frog/Garden =======
