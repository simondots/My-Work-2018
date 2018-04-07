
// ====================Scope====================
//   UZDUOTIS  A
// sukurti funkcija "printDuomenys()" ,
// funkcijoje sukurti kintamaji: var vardas = "Tomas"
// kuri  atspausdina i konsole  kintamaji "vardas"
// iskviesti f-ja
function printDuomenys() {
  var vardas= "Tomas";
  console.log("vardas yra:",vardas);
}
printDuomenys();

// ciia kuriame local kintamaji (jis bus istrintas funkcijai pabaigus darba)

//   UZDUOTIS  B
//  dabar, pabandykite po f-ja (uz jos ribu) i konsole atspausdinti kintamaji "vardas"
//  console.log( vardas) ;
// NOTE: gausite klaida ""is not defined""



// ================local && global=========
// var x = "x global";
// function testLocalVar() {
//    var y = "y local";
//    z = "z global";
//    console.log("x", x);
//    console.log("y", y);
//    console.log("z", z);
// }
// testLocalVar();
// console.log("x", x);
// console.log("z", z);
// console.log("y", y);  // error - 1)   nes sukurtas f-jos viduje 2) sukurtas su "var"

//------
 // UZDUOTIS
 // A) sukurti kintamaji var kakis = "juodas"
 // B) sukurti f-ja
 // C) sukurti f-jos viduje kintamaji var kakis = "baltas"
 // D) atspauzdinti abu f-jos viduje
 // E) atspauzdinti  uz f-jos
 // var kakis = "juodas";
 // function testLocalVar() {
 //     var kakis = "baltas";
 //    console.log("kakis:", kakis);
 //    console.log("this.kakis - f-jos viduje: ",  this.kakis);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
 // }
 // testLocalVar();
 // console.log("kakis:", kakis);  // error - 1)   nes sukurtas f-jos viduje 2) sukurtas su "var"

function kakioSpalva() {
var kakis="juodas";
var kakis1="baltas";
console.log(kakis,kakis1);
}
kakioSpalva();

 //======================
 // var vardas = "Jonas";   // global - kintamasis
 // function myName ( vardas ) { //  vardas - local kintamasis
 //     console.log( " vardas" + vardas);
 //     console.log("this.vardas - f-jos viduje: ",  this.vardas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
 // }
 // myName("PETRAS");


var name="Chuan";
function nametion(name) {
  console.log("name:" + name);
  console.log("this name - Jacob");
}
nametion(name);

//======================TEKSTO ISVEDIMAS===============


//  1.1 UZDUOTIS
//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greik pageres orai", "Vasaros vis salteja"

var aprasymas=document.querySelector('.p1');
console.log(aprasymas);
aprasymas.innerHTML = "I changed you bitch";

// ==============================================

var visip = document.querySelectorAll('p');
console.log(visip);
visip[2]=innerHTML ="I changed you bitch with ARRAY ♥";

// ==================================================

for (var i = 0; i < 3; i++) {
// visistraipsniai lenght
visip[i].innerHTML = "Pakeistas us FOR ciklu";
visip[i].style.color='blue';
visip[i].style.backgroundColor='rgb(15, 255, 255)';
}

// ===================================================

var allPnH2 = document.querySelectorAll("h2,p");
console.log(allPnH2);
for (var i = 0; i < allPnH2.length; i++) {
  allPnH2[i].style.color="rgb(157, 132, 218)";
}





// vi
// visistraipsniai lenghtnction printAntravisiStraipsniai[i] = "Pakeistas us FOR ciklu";(x){
// console.log(x);
// }
// printAntraste("Geda");
// printAntraste("Labai geda");
// printAntraste("Labai Labai labai geda");



//  1.2 UZDUOTIS
//  sukurti funkcija "printStraipsnis(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme


// function printMagic(x){
//   console.log(x);
// }
// printMagic("Nebegeda");



//  1.3 UZDUOTIS
//  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",

// function callsection(x,y) {
//   console.log(x+"\n",y);
//
// }
// callsection("antraste1","Lorem1");
// callsection("antrase2","Lorem2");
// callsection("antrase3","Lorem3");

// x pirma reiksme, y antra, z trecia, reikia jas uzvadinti !









//=======================================
