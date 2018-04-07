console.log(" Labas ");
// =================taisyklingas Array copy  =================
// NOTE: var arr2 =  arr1; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
var arr1 = ['a', 'b', 'c']; // Becomes arr1 = ['a', 'b', 'c']
var arr2a = arr1.slice(0); // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var arr2b = arr1.concat(); // Becomes arr2b = ['a', 'b', 'c'] - deep copy
// ================= ========= ======== ========

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];
// var length =names.length;
// var ieskome = "Rico";
// for (var i = 0; i < names.length; i++) {
// if (names[i]==ieskome) {
// console.log("Radome šitiek rikų",i);
// }
//
// }

function ieskotiVienoVardo() {
  var ieskome = "Rico";
  for (var i = 0; i < names.length; i++) {
    if (names[i] == ieskome) {
      console.log("Radome šitiek rikų", i);
      break;
    }
  }
}
// UZDUOTIS
// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"
// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)


function searching() {
  var ieskome = "Rico";
  var arRadau = false;
  for (var i = 0; i < names.length; i++) {
    if (names[i] === ieskome) {
      console.log("Pagaliau radau ta nelemta Rico blemba!", i);
      arRadau = true;
      break;
    }
  }

  if (arRadau == false) {
    console.log("try again");
  } else {
    console.log("found it");
  }
}
searching();
// uzduots:----------------------------

// function raiseSalary() {
//   var salary = 1500;
//   var $changed = true;
//
// if (salary > 1500) {
//   $changed = true;
// } else {
//       $changed=false;
// if ($changed==true) {
//   console.log("salary got raised a bit");
//
// }else {
//   console.log("salary,stayed the same");
// }
// raiseSalary();


// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];


// function ieskotiVienoVardo() {
//   var ieskome = "Freida";
//   for (var i = 0; i < names.length; i++) {
//     if (names[i] == ieskome) {
//       console.log("Found this bitch" + ieskome, nr, i);
//     }
//   }
// }
// ieskotiVienoVardo();


// 4) rasti visu zmoniu vardu "Rico" pavardes
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];  isvesti ju pavardes ir vardus

var ieskomiZmones = [2, 16, 17, 18, 19, 25];

function findEmAll() {
  for (var i = 0; i < ieskomiZmones.length; i++) {
    ieskomiZmones[i]
    console.log(names[i],lastNames[i]);
  }
}
findEmAll();


var FerrariGL890 = Math.random();
if (FerrariGL890<=0.001) {
console.log("You Won");
}
console.log("lottery number:",FerrariGL890)


// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }

// ieskomiZmones = [2, 16, 17, 18, 19, 25];
//
// var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];
//
// var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];
