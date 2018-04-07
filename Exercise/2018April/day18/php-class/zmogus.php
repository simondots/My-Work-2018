<?php


  class Zmogus {
    public $ugis = 200;
    private $bankoPin = 6662;
    protected $ligos = "AIDS";
    public function informacija (){
      echo "mano ugis:$this->ugis";
      echo "mano PIN:$this->bankoPin";
      echo "mano ligos:$this->ligos";
    }

  public function eiti() {
    echo "einu einu einu neskubink manes <br />"; echo "mano ugis : $this->ugis";
  }
public function begu($greitis) {
  echo "greit begu nu neskubink,mano greitis bus kokia: $greitis <br />";
  }
}

$Lionka = new Zmogus(); //sukuriau objekta Lionka
$Ciklopenija = new Zmogus();
$Lervijus = new Zmogus();

echo "Lionka ugis" . $Lionka -> ugis. "<br />";
echo "Ciklopenija ugis" . $Ciklopenija -> ugis. "<br />";
echo "Lervijus ugis" . $Lervijus -> ugis. "<br />";

$Lionka -> ugis = 169;

echo "Lionka ugis" . $Lionka -> ugis. "<br />";
echo "Ciklopenija ugis" . $Ciklopenija -> ugis. "<br />";
echo "Lervijus ugis" . $Lervijus -> ugis. "<br />";

$Lionka -> informacija();
// echo "Lionka BANKO PIN". $Lionka -> bankoPin . "<br />"; // privaciu kintamuju negalima paliesti
// echo "Lionka Ligos paveldetos". $Lionka -> ligos . "<br />"; // protected kintamuju negalima paliesti








 ?>
