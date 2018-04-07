console.log( " Labas ");

// var prekybosCentrai=["Rimi","Iki","Maxima","Lidl","Prisma"];
// console.log(prekybosCentrai);
// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------
	// UZDUOTIS
	// var prekiautojai = []; // empty array
  //
	// prekiautojai[0] = "IKI";
	// console.log(  "prekybos centrai:", prekiautojai  );
	// prekiautojai[1] = "Maxima";
	// prekiautojai[2] = "Lidl";
	// prekiautojai[3] = "Rimi";
	// prekiautojai[50] = "Cia Market";

	// A) pervadinti pirma stalciu
	// prekiautojai[1] = "Barbora";

var prekybosCentrai=[];
prekybosCentrai[0]="IKI";
prekybosCentrai[1]="Maxima";
prekybosCentrai[2]="Rimi";
prekybosCentrai[3]="Lidl";
prekybosCentrai[4]="Prisma";
prekybosCentrai[5]="Silas";
prekybosCentrai[6]="Express_Market";

prekybosCentrai[2]="Cento";
console.log(prekybosCentrai[2]);
// pirma uzduotis
	// B) sukeisti antro ir trecio stalciu reiksmes vietomis.
	// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)
var x= prekybosCentrai[2];
prekybosCentrai[2] = prekybosCentrai[3] ;
prekybosCentrai[3] = x;
console.log(prekybosCentrai);
	// C) padaryti B) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

function sukeistiarray2elements(nr1,nr2) {
var temp2 = prekybosCentrai[nr2];
var temp1 = prekybosCentrai[nr1];

prekybosCentrai[nr1] = temp2;
prekybosCentrai[nr2] = temp1;
console.log(prekybosCentrai[nr1],prekybosCentrai[nr2]);
console.log(prekybosCentrai);
}
sukeistiarray2elements(2,5);

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------
// names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
//
// console.log(names);
//
// .length
// .join()
// .shift()
// .pop()



// =========================================================
// uzduotis  Array
// keiautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// 1. i masyvo gala ideti elmenta "butelis vandens"
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// 3. istrinti 3-cia elmenta
var traveler =["Tomas","Pietukus",25,"VDU - inzinerija"];
console.log(traveler);
// 1 done
traveler.push(" gyvybes eleksyras");
console.log(traveler.join("::"));

// 2 done
traveler.unshift("Ferrari");
console.log(traveler.join("::"));

// 3 done

delete traveler[2];
console.log(traveler);




// 4 done

// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
var masyvas=[];
for (var i = 0; i < 50; i++) {
  masyvas[i]=0;
  console.log(masyvas);
  // how did you forgot that u dumbass :D
}
// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;


// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
for (var i = 0; i < 50; i=i+3) {
  masyvas[i+1]=3;
  // vis dideja po viena obviously
  console.log(masyvas);
  }



// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
for (var i = 0; i < 50; i=i+5) {
  masyvas[i+4]=9;
  // vis dideja po viena obviously
  console.log(masyvas);
}




//
// =============bootstrap---sm-md-lg-xl (30-60m)==========
