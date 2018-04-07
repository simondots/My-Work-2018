
        <?php

  echo "labas15646456";
        // konstantos/Constant
        // jos kuriamos su define (kintamieji kuriu negalima pakeisti bei uppercase budu kuriame)

        define('DB_NAME','hospital2018');
        define('DB_USER_NAME','root'); //cia yra mysql username
        define('DB_PASSWORD','root');
        define('DB_HOST','localhost');

        // pabandykime jas atsispausdinti

        echo DB_NAME; //constant nereikia $ zenklo

        // PRISIJUNGIMAS PRIE DUOMENU BAZE ============================================================

        $connection = mysqli_connect( DB_HOST, DB_USER_NAME, DB_PASSWORD, DB_NAME);
        // tikrina AR TRUE
        if ( $connection ) {
          echo "Logged In Succesfully";
        } else {
          die(" ERROR 404: Could not connect" . mysqli_connect_error() );
        }
        function getDBLogin() {
          global $connection; //prieiti prie globalaus , P.S. global eiluteje nenaudojama = simbolio bei negalime keisti reiksmes
          return $connection;
        }
// DUOMENU PAEMIMAS IS SERVERIO =====================================

function getDoctor( $nr = 0) { //nr tai ID gydytojo kuri paemame ♥
  $mano_sql = "SELECT * FROM doctors WHERE id='$nr'; ";

  // ivykdo SQL
  global $connection; //as noriu naudoti globalu kintamaji - paimk man ji
  $results = mysqli_query( getDBLogin() , $mano_sql);

  // results = tai array visi grize duomenys
  if ($results) {
    echo "Doctor have been found <br>";
    $results = mysqli_fetch_assoc($results); //apdoroti rezultatai / objekta pavercia masyvu
    // print_r($results); //isspausdiname
    return $results;//reikia duomenis kad kazkas grazintu
    // var_dump($results); //testas
  } else {
    echo "Doctors number : $nr NOT FOUND <br>";
  }
}
$doctor1 = getDoctor ( 3 ); //gaunam masyva
// print_r( $doctor1 ); //test



        echo "labas";







        ?>
