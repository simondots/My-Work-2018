<?php


function sumuoti() {
  static $x = 0; //sita eilute suveiks tik viena karta tam paciam vartotojui
  //static is RAM atminties neistrins X REIKMES ! f-jai pabaigus darba.
  echo "x yra : $x <br />";
  $x += 2; //$x = $x +2;
}
sumuoti();
sumuoti();
sumuoti();
sumuoti();
sumuoti();

//rekursija tai f-ja kuri iskviecia pati save
function rekursija(){
   static $z = 0; //static neleis nusilulinti o leis dideti
   if ($z < 10) {
     $z++;
     echo "dirbu:$z <br />";
     rekursija();
   }
}
rekursija();


 ?>
