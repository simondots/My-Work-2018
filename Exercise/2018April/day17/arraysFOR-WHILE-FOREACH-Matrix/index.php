











<?php

$dates = [1981,1980,1975,1995,1999];
 foreach($dates as $tables) {
   echo $tables. "<br>";
 }
 for ($i=0; $i < count($dates) ; $i++):
   echo "was Born in:".$dates[$i]. "<br>";
 endfor;

$x = 1970;
while ($x < 2000 ) {
  echo "Baby Born in : $x <br>";
$x++;
}

for ($i=0; $i < 5 ; $i+2) {
  echo "every second:" . $dates[$i]. "<br>";
  $i++;
}
for ($i=2; $i < 5 ; $i+2) {
  echo "starting from 3rd:" . $dates[$i]. "<br>";
  $i++;

 ?>
