console.log( " Labas ");


var names =["Jonas","Petras","Tadas","Egidijus","Aurimas"];
console.log(names.toString());
// string isvardins graziai
document.write(names.toString());
// isvardins negraziai
console.log(names.join("::"));
// join skiriklis

names.push("Marius","Tautvydas","Aleksas");
console.log(names.join("::"));
names.pop();
console.log(names.join("::"));
// pop istrins paskutini elementa is stalciaus
// push ides norimus elementus i stalciaus gala
names.shift();
// istrina nulinta 0 elementa ir paslenka visus elementus
console.log(names);
delete names[2];
console.log(names);
// rip second array names

names.unshift("im at the beginning");
console.log(names);


var arraylength = names.length;
names[ arraylength] = "Last Name";
console.log (arraylength);
// paskutinis vardas su push
names[20]="azuolas";
console.log(names);
names.splice(10);
console.log(names);

// names.splice(1,0,"statine medaus","pieno","batona");
// var extranames=names.slice(2,4);
// console.log("kopija",dalis kopijos);

var x = names;
console.log("x:",x);
console.log("names:",names);

delete x[3];
delete x[4];
console.log("x:",x);
console.log("names:",names);

var mygirls=["ema","tema"];
var myboys=["titas","maksimas","dziumbras"];
var mychildren=mygirls.concat(myboys);
console.log(mychildren);
// ta-da! sujungeme masyvus(array)
