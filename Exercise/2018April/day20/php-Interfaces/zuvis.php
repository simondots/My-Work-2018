<?php
/**
 *
 */
 include 'zuvuReikalavimai.php';

class fish implements fishesRequiraments {

  public $ilgis = 0;
  public $svoris = 0;
  public $pavadinimas= "Rhino";
  public function swim($x,$y,$z) {
    echo "I'm swimming $x,$y,$z";
  }
  public function food($x) {
    echo "I eat $x";
  }
  public function growth($x) {
    echo "My growth speed $x";
  }
  public function price($x) {
    echo "I do cost a lot $x";
  }

}





 ?>
