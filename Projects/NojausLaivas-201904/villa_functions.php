<?php

 // konstantos
  define('DB_VARDAS', 'projektasapril'); // duomenu bazes vardas
  define('MYSQL_VARTOTOJO_VARDAS', 'root'); // mysql user'is
  define('MYSQL_SLAPTAZODIS', 'root');
  define('DB_HOST', 'localhost');

// Prisijungimas prie DB
$connection = mysqli_connect( DB_HOST, MYSQL_VARTOTOJO_VARDAS, MYSQL_SLAPTAZODIS, DB_VARDAS );   // jei PORT ne 80, irasykite i gala

//      AR true
if (   $connection  ) {
    ///echo "Prisijungete sekmingai <br>";
} else {
    die( "ERRROR: neapvyko prisijungti" .  mysqli_connect_error()  );
}

function getDBPrisiungimas() {
    global $connection; // duodam leidima prieiti pire global kintamojo
    // !!! global eilute ,negali keisti kintamojo:     $connection = 'false';
    return $connection;
}

/*
    Duomenu paemimas is duomenu bazes
    $nr - id, kuria villa gauname
   */
function getPrice( $nr = 0) { // default $nr = 0, jeigu nr nepaduotas
    $mano_sql_tekstas = "SELECT * FROM duty WHERE id='$nr'; ";
    // ivykdome SQL
    // $rezultatai - (objektas) - villa duomenys is DB
    $rezultatai   = mysqli_query( getDBPrisiungimas(),    $mano_sql_tekstas );
    if ( $rezultatai ) {
        // echo "villa radome<br>";
        // var_dump( $rezultatai );  // test  $rezultatai - objektas
        // mysqli_fetch_assoc - Objekta - pavercia i Masyva (asociatyvu)
        $rezultatai_masyve =  mysqli_fetch_assoc( $rezultatai );

        return $rezultatai_masyve;
    } else {
        echo "Villa nr: $nr nerasta!!! <br>";
    }
}
$villa1 = getPrice( 1 ); // gaunam masyva
// $Price1 - price masyvas

 //print_r( $getPrice1 ); // test



//
