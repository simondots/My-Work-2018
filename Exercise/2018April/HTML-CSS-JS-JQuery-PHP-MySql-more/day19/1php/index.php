  <?php
include_once('zmogus.php');
  $Petras = new Vyras();
ECHO $Petras->ugis;
$Petras->valgyti();
// ECHO $Petras->turtas;
//KEEP IN MIND PRIVATE KINTAMUJU NEPAVELDIMA (IMPOSSIBLE TO INHERIT)
// Private ir Protected KINTAMIEJI NEPASIEKIAMI UZ KLASES (REMEMBER IT!)
$Onyte = new Moteris();
$Onyte->dainuoti();







 ?>
