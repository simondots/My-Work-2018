<?php

$workers = [];

$x1 = ['PETKA',1999,'Leutenant'];
$x2 = ['JIOLKA',1885,'Escort'];
$x3 = ['ZVYRAS',1865,'Conductor'];

$workers[0] = $x1;
$workers[1] = $x2;
$workers[2] = $x3;

echo "PETKA work is:" . $workers[0][2] . "<br />";
echo "JIOLKA years is" . $workers[2][1] . "<br />";
for ($i=0; $i < 3 ; $i++) {

  echo "Name:" . $workers[$i][0] . "<br/>";
  echo "DATE:" . $workers[$i][1] . "<br/>" ;
  echo "Profession:" . $workers[$i][2] . "<br/>" ;
}

 for ($i=0; $i < 3 ; $i++) {
  for ($g=0; $g < 3 ; $g++) {
    echo "kappa INFO:" . $workers[$i][$g] . "<br/>";

  }
 }

 for ($i=0; $i < 3; $i++) {
   echo "ready <br />";
   for ($g=0; $g <3; $g++) {
     echo "dirbu <br />";

   }
 }

 ?>
