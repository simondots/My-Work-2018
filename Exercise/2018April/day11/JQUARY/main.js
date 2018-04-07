console.log( " Labas ");


 var namas = {
    aukstuSk:4,
    butuSk:109,
    sildymas:"dujos",
    stoviu:function(){
      console.log("stoviu stoviu stoviu...");
      console.log("stoviu...");
    },
    remontas:function(){
      console.log("jauneju:)");
    }
  };

  console.log(namas);

console.log("namo aukstu skaicius:" + namas.aukstuSk);
console.log("namo butu skaicius:" + namas.butuSk);
console.log("namo sildymo tipas:" + namas.sildymas);

namas.kaminuSk = 3;
namas.kaminuSpalva = "yellow-orange";
console.log(namas);

$('h1').click(
  function(){
    console.log("as pati save issaukiu");
  });

  // arba
  var kalbeti = function (){
    console.log("kalbu");
  };
  kalbeti();

  namas.stoviu();


  // 1 UZDUOTIS:
  // sukurti mokinio objekta  : vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)


  var marks = {
    vardas : "Tomas",
    pavarde : "Tomulionis",
    kelintokas : "12-okas",
    pazymiai :[6,5,9,10,8]
  };


  // 1.1 UZDUOTIS
  // atspauzdinti visus duomenis
  console.log(marks);

  // 2 UZDUOTIS: sukurti 2-u objektus:
  // 1) tevas : vardas, pavarde, vaikas
  // 2) vaikas: klase, vardas
  // 3) priskirti tevo objekui (kintamajam) vaika


  // 3 UZDUOTIS
  // sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga

  //============3=pvz: construktorius =====
  // function Car(nr, c, ms) {
  //     this.numberOfDoors = nr;
  //     this.color = c;
  //     this.maxSpeed = m;
  // }

  // objekto kurimas
  // var AudiTT = new Car('AAA000', "red", 280);































  //

  // 1 UZDUOTIS:
  // sukurti mokinio objekta  : vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)


  var marks = {
    vardas:"Tomas",
    pavarde:"Tomulionis",
    klase:"12-okas",
    matematikospazymiai:[6,5,9,10,8]
  };
  // 1.1 UZDUOTIS
  // atspauzdinti visus duomenis
  console.log(marks);

  // 2 UZDUOTIS: sukurti 2-u objektus:
  // 1) tevas : vardas, pavarde, vaikas
  // 2) vaikas: klase, vardas
  // 3) priskirti tevo objekui (kintamajam) vaika

var father = {
  vardas : "Egidijus",
  pavarde : "Dragunas",
  vaikas : "Tobis",
};
var son = {
  klase : "12-okas",
  vardas : "Mikelandzelas"
};
var x = son;

console.log(father,son);
  // 3 UZDUOTIS
  // sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga
var darbuotojas = {
  vardas : "Tautvydas",
  pavarde : "Tutis",
  alga : "5.000 069$",
  nr : 865839529
};
// console.log(darbuotojas);
//  // var ugis=[185,195,205,181,191,166,160,169];
//  var ugis=[185,195,205,181,191,166,160,169];
//  var svoris=[60,65,70,75,80,85,95,55,50];
//  var lytis=["Male","Female"];
//  var talentas=["Šokti","Groti","Dainuoti","Žaisti krepšini","Žaisti krepšini","Future Porn Star","Tennis Prodigy","Genius IQ over 250"];
// function newBaby(ug,svor,lyt,talent) {
//
// }
// var newBaby = newBorn();
// console.log(newBaby);



  //============3=pvz: construktorius =====
  function Car(nr, spalva, greitis) {
      this.numberOfDoors = nr;
      this.color = spalva;
      this.maxSpeed = greitis;
  }

$('.creator').click(function(event){
  // document.write("created <br>");
  var article = document.createElement("article");
var text = document.createTextNode("wazeeee nigggaaaa...");
article.appendChild(text);
document.querySelector('section').appendChild(article);
});

  // objekto kurimas
  // var AudiTT = new Car('AAA000', "red", 280);





  // 1. sukurti "header"  DOM objekta/NODE'a
  // test
  // console.log(  manoHeader );

var manoheader = document.createElement("header");
  // 2. sukurti 'tekstas' kintamaji ir sukurti teksto Node : panaudojant js document.createTextNode(xxx)
var txt = document.createTextNode('Mano Tekstas');
console.log(txt);

  // 3. i susikuta 'header' objekta idedame 'tekstas' objekta
  // test
  // console.log(  manoHeader );

  manoheader.appendChild(txt);
  console.log(manoheader);


  // 4. headeri idesime virs H1
  // insertBefore(kaIdeti, PrieKa) -
var manoh1 = document.querySelector('h1');
document.querySelector('body').insertBefore(manoheader,manoh1);
