<?php

 // konstantos
  define('DB_VARDAS', 'hospital3'); // duomenu bazes vardas
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
    $nr - id, kuri gydytoja gauname
   */
function getDoctor( $nr = 0) { // default $nr = 0, jeigu nr nepaduotas
    $mano_sql_tekstas = "SELECT * FROM doctors WHERE id='$nr'; ";
    // ivykdome SQL
    // $rezultatai - (objektas) - gydytojo duomenys is DB
    $rezultatai   = mysqli_query( getDBPrisiungimas(),    $mano_sql_tekstas );
    if ( $rezultatai ) {
        // echo "Gygytoja radome<br>";
        // var_dump( $rezultatai );  // test  $rezultatai - objektas
        // mysqli_fetch_assoc - Objekta - pavercia i Masyva (asociatyvu)
        $rezultatai_masyve =  mysqli_fetch_assoc( $rezultatai );

        return $rezultatai_masyve;
    } else {
        echo "Gydytojas nr: $nr nerastas!!! <br>";
    }
}
// $gydytojas1 = getDoctor( 3 ); // gaunam masyva
// $gydytojas1 - gydytojo masyvas
 //print_r( $gydytojas1 ); // test

// ----------------DELETE trinti--------------------
// $nr - numeris arba id, gydytojo, kuri istrinsime
function deleteDoctor( $nr ) {
    $mano_sql_tekstas = "DELETE FROM doctors
                                WHERE id='$nr'
                                LIMIT 1
                        ";
    mysqli_query(   getDBPrisiungimas()  , $mano_sql_tekstas);
}
// deleteDoctor( 7 );

//
function createDoctor($vardas, $pavarde){
    $vardas_apdorotas =  mysqli_real_escape_string (getDBPrisiungimas(), $vardas );
    $pavarde_apdorotas =  mysqli_real_escape_string (getDBPrisiungimas(), $pavarde );

    $mano_sql_tekstas = "INSERT INTO doctors
                                VALUES('', '$vardas_apdorotas', '$pavarde_apdorotas' );
                        ";
    $arPavyko = mysqli_query(   getDBPrisiungimas() , $mano_sql_tekstas);

    if ( !$arPavyko ) {
         // '(! )' JEIGU skliaustuose FALSE?
         echo "EROROR: nepavyko uzregistruoti gydytojo." . mysqli_error( getDBPrisiungimas() );
    } else {
        // echo "pavyko sukurti";
    }
}
// createDoctor('Faustas', 'Gete');

function updateDoctor($nr, $vardas, $pavarde) {
    $vardas_apdorotas =  mysqli_real_escape_string (getDBPrisiungimas(), $vardas );
    $pavarde_apdorotas =  mysqli_real_escape_string (getDBPrisiungimas(), $pavarde );

    $mano_sql_tekstas = " UPDATE doctors SET
                            name = '$vardas_apdorotas',
                            lname = '$pavarde_apdorotas'
                            WHERE id='$nr'
                            LIMIT 1;
                        ";
    $arPavyko = mysqli_query(   getDBPrisiungimas() , $mano_sql_tekstas);

    if ( !$arPavyko ) {
         // '(! )' JEIGU skliaustuose FALSE?
         echo "EROROR: nepavyko uzregistruoti gydytojo." . mysqli_error( getDBPrisiungimas() );
    } else {
        // echo "pavyko sukurti";
    }
}
// updateDoctor(3, 'Ona', 'Harkauskeine');


function getDoctors($kiekis = 99999) {
    $mano_sql_tekstas = "SELECT * FROM doctors
                                  ORDER BY name DESC
                                  LIMIT $kiekis
                        ";
    // LIMIT 5 - limit skaiciai rasomi ne kabutese
    // ORDER BY - surikiuoja pabal stulpeli 'name'

    // $rezultatai - mysql objektas
    $rezultatai = mysqli_query( getDBPrisiungimas() , $mano_sql_tekstas);

    // tikrunu ar gryzo duomenu
    if ( $rezultatai ) {
         return $rezultatai; //  mysql objektas
    } else {
        return NULL; //
    }

}

// testuojam ar veikia
// $gydytojai = getDoctors(   ); // skaicius - kiek gydytoju paimsime

// $vienas_gydytojas = mysqli_fetch_assoc($gydytojai); // mysqli_fetch_assoc - paima sekanti gydytoja is mysql objekto IR sudajo jo stulpelius i ARRAY

// tikrinu ar turiu gydytojo duomenis
// while ( $vienas_gydytojas ) {
//     echo " <h2>"  . $vienas_gydytojas['name'] . $vienas_gydytojas['lname'] . "</h2>";
//
//     // kad to pacio gydytojo neisvestu - vel ir vel - imam sekanti
//     $vienas_gydytojas = mysqli_fetch_assoc($gydytojai); // mysqli_fetch_assoc - paima sekanti gydytoja is mysql objekto IR sudajo jo stulpelius i ARRAY
// }
