<?php

          class Zmogus {
            public $ugis = 0;
            private $pusryciai = '';
            protected $turtai = 'Pilis';
            public function valgyti() {
              echo "valgiau: $this->pusryciai"; }

            public function dainuoti() {

              echo "dainuoju";
            }

            public function setPusryciai($x) {
              $this->pusryciai = $x;
            }

            public function printDuomenys(){
              echo "ugis: $this->ugis";
            }

          }

           class Vyras extends Zmogus {
             private $testosteronas = 6122;
             public function settestosteronas($z) {
               $this->testosteronas = $z;
             }
             public function gettestosteronas() {
             echo $this->testosteronas;
             }
           }
           class Moteris extends Zmogus {
             private $estrogenai = 2111;

           }





 ?>
