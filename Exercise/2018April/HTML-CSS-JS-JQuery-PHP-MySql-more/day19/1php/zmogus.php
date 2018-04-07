<?php

          class Zmogus {
            public $ugis = 0;
            private $pusryciai = '';
            protected $turtai = 'Pilis';
            public function valgyti() {
              echo "valgau"; }

            public function dainuoti() {

              echo "dainuoju";
            }

}


           class Vyras extends Zmogus {
             private $testosteronas = 6122;
           }

           class Moteris extends Zmogus {
             private $estrogenai = 2111;

           }

 ?>
