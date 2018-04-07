//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa


var vardas ="Egidijus";
var pavarde ="Martinkus";
var amzius =29;
var pajamos =250.90;
// susikuriau kintamuosius

console.log( vardas, pavarde,  amzius,  pajamos);
//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius


function printVardasPavardeAmzius() {

// consolei isves varda pavarde amziu vienoje eilute o kablelis tarpus deda

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// f-ja kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")
}
console.log( "vardas:", vardas,"pavarde:",pavarde,"amzius:",amzius,"pajamos:",pajamos); {
printVardasPavardeAmzius();
}
function printMetinisPajamuDydis() {

            var suma = pajamos * 12;
            console.log( "metines pajamos:", suma );
              printMetinisPajamuDydis();
  // conf-ja kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

}

      // printMetinisPajamuDydis();
      // (iskvieteme loop)
//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

var salis = "Japan";
var miestas ="Tokyo";
var adresas ="Utsunomya";
var pastoKodas ="31532";

function printAddressData() {

console.log("salis:", salis,"miestas:",miestas,"adresas:",adresas,"pastoKodas:",pastoKodas); }

printAddressData();

// f jos iskvietimas

// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

function printTekstas(x){
// kintamasis , jis bus sunaikintas baigus darba
// gera funkcija apacioja (variantas B)
console.log( x);

// var ass=Math.pow(t,2);
//   console.log(ass);
}
printTekstas("Sveiki mielieji, neikitie i miska");

// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"

function daugyba(x1 , x2) {
var suma = x1 * x2;
console.log("sudauginus" ,x1 , "ir" , x2 , "gauname:",suma);
}

daugyba(4,0);


// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y

// variantas 1
// function pitagoroTeorema(a,b) {
//   var ilgoji =Math.sqrt((Math.pow(a,2)) + Math.pow(b,2));
//   console.log("Ilgoji trikampiuko krastine:", ilgoji);
// }
// pitagoroTeorema(6,8);
// kaip funkcija vadinsis ir ka apskaiciuojame
// "tai ka rasys atsakymas", ka liepiama isvesti (var)
// math.sqrt = tai saknis , math pow does the math
// kvieciame funkcija po uzdarytu }

// variantas2

function pitagoras(x,y) {

  var tarpinis = x*x + y*y;

  var z = Math.sqrt(tarpinis);

  console.log("z yra:",z);
}
pitagoras(10,20);

// pasikartoti paskutines 2 exercies !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!♥♥♥♥♥♥
//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos


// namu darbai darbeliai


                                        // ==============patarimai==========
                                        // reiksme  - kintamasis  / variable
                                        // "reiksme" - tekstas/ reiksme/ value
                                        // reiksme() - f-jos paleidimas
                                        // =============================


                                        // ===================pasikartoti  F-jas===================
                                        //  01 UZDUOTIS
                                        // sukurti 3 Globalius kintamuosius:  vardas , pavarde, klase   (ir jiems priskirti reiksmes):
                                        // atspausdinti visus kintamuosius

                                        var vardas ="egidijus" ;

                                        var pavarde ="dragunas" ;

                                        var klase = 12;


                                        console.log("vardas",vardas,"pavarde",pavarde,"klase",klase); {

                                        }




                                        //  02 UZDUOTIS
                                        // sukurti funkcijas:
                                        // printName()  printLName(), printClass() ,
                                        // kurios atspausdina i konsole pirmos uzduoties kintamuosius


                                        function printName(q) {

                                          console.log("vardas:",q+";");
                                        }

                                        printName(vardas);

                                        function printLName(w) {

                                          console.log("pavarde",w+";");
                                        }

                                        printLName(pavarde);

                                        function printClass(e) {
                                        console.log("klase",e+";");
                                        }
                                        printClass(klase);


                                        alert('I CAN SEE YOU');

                                        alert('ENOUGH LOOKING AT MY JS!');


                                        alert('Seriously enough ♥ :*');









                                        //  03 UZDUOTIS
                                        // parasyti f-ja printVardasPavardeKlase(name, lname, klase)
                                        // kuria iskviesti 3 kartus su skirtingais zmoniu vardasi ir pavardem


                                        function printVardasPavardeKlase(name,lname,klase) {
                                          console.log("vardas:",name+";","pavarde:",lname+";","klase:",klase+";");

                                          }

                                          printVardasPavardeKlase("egidijus","dragunas","astunta");
                                            printVardasPavardeKlase("svetlana","nelaboji","eleventh");
                                              printVardasPavardeKlase("ricardo","cialiao","10");



                                        // =====================CSS Flex=========================

                                        // 1) suzaisti CSS Frog game      CHECK*

                                        // =====================JS zaidimas=========================

                                        // suzaisti JS zaidima Code Combat


                                        // *CHECK*



                                        //
                                        // some training
