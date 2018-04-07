<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.min.css">
        <!-- galimos klaidos -->
        <!-- blogas kelias iki failo -->
        <!-- "/" ne i ta puse -->
        <!-- neuzdarete ">" -->
        <link rel="stylesheet" href="css/master.css">
        <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
    </head>

    <body>

        <h1> MOkomes </h1>

        <?php

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
    print_r($results); //isspausdiname
    // var_dump($results); //testas
  } else {
    echo "Doctors number : $nr NOT FOUND <br>";
  }
}
$doctor1 = getDoctor ( 3 ); //gaunam masyva
// print_r( $doctor1 ); //test










        ?>



        <!-- bootstrap4 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- !!! jQuery "slim" yra nepilna versija ir jQuery kai kurios komandos neveikia, reiktu isisdeti kita jQuery  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas visada zemiausias -->
        <script type="text/javascript" src="main.js"> </script>
    </body>
</html>
