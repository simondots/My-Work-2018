<?php
// konstantos
define('DB_VARDAS', 'projektasapril'); // duomenu bazes bardas
define('MYSQL_VARTOTOJO_VARDAS', 'root'); //cia yra MySQL user
define('MYSQL_SLAPTAZODIS', 'root');
define('DB_HOST', 'localhost');
// echo DB_VARDAS; //konstantom nereikia $
// echo MYSQL_VARTOTOJO_VARDAS;
// echo MYSQL_SLAPTAZODIS;
// echo DB_HOST;

$connection=mysqli_connect(DB_HOST,MYSQL_VARTOTOJO_VARDAS,MYSQL_SLAPTAZODIS,DB_VARDAS);
//if tikrina ar true
if ($connection) {
  // echo "Prisijungete sekmingai<br>";
}else {
  die("ERROR: Jums nepavyko prisijungti prie DB". mysqli_connect_error());
}

function getDBPrisijungimas(){
  global $connection; //padaro, jog matytu reiksme in globla scale, cuz unlike in js, in php, FUNCTIONS cant see global variables.
  //global eiluteje negalima keisti reiksmes, you cant use "=";
  return $connection;
}

//duomenu paemimas is DB
//nr -id,kuri gydytoja paiimam is duomenu bazes
function getDoctor($nr=0){
  $mano_sql_tekstas="SELECT * FROM doctors WHERE id=$nr";
  //ivykdome SQL
  // global $connection;
  // $rezultatai - visi grize duomenys, siuo atveju, grizo doctors lenteles pirma eilute.
  $rezultatai=mysqli_query(getDBPrisijungimas(), $mano_sql_tekstas); //rezultatas objektas
  // echo "Radome duomenis<br>";
  if ($rezultatai) {
    // var_dump($rezultatai);
    $rezultatai=mysqli_fetch_assoc($rezultatai); //pavercia objekta perskaitomu masyvu
    // print_r($rezultatai);
    return $rezultatai;

  } else {
    echo "Neradome duomenu $nr gydytojo<br>";
  }
}
$gydytojas1=getDoctor(1); //gaunam masyva;


// UZDUOTIS
// 1. papildyti faila:  db_functions.php
// 3. suprogramuoti f-jas:
// 4. getDoctor($nr)
// 5. createDoctor($vardas, $pavarde)
// 6. deleteDoctor($nr)
// 7. updateDoctor($nr, $vardas, $pavarde)
// 8. getDoctors($kiekGydytoju)

function deleteDoctor($nr){
  $mano_sql_trynimas="DELETE FROM doctors WHERE id='$nr' LIMIT 1";
  mysqli_query(getDBPrisijungimas(),$mano_sql_trynimas);
}


function createDoctor($vardas, $pavarde){
  $vardas_apdorotas=mysqli_real_escape_string(getDBPrisijungimas(),$vardas);
  $pavarde_apdorotas=mysqli_real_escape_string(getDBPrisijungimas(),$pavarde);
  $mano_sql_kurimas="INSERT INTO doctors VALUES ('','$vardas_apdorotas','$pavarde_apdorotas','')";
  mysqli_query(getDBPrisijungimas(),$mano_sql_kurimas);
}

function updateDoctor($nr,$nVardas,$nPavarde){
  $nr_apdorotas=mysqli_real_escape_string(getDBPrisijungimas(),$nr);
  $nVardas_apdorotas=mysqli_real_escape_string(getDBPrisijungimas(),$nVardas);
  $nPavarde_apdorotas=mysqli_real_escape_string(getDBPrisijungimas(),$nPavarde);
  $mano_sql_update="UPDATE doctors SET name='$nVardas_apdorotas', lname='$nPavarde_apdorotas' WHERE id='$nr_apdorotas' LIMIT 1";
  $ar_pavyko=mysqli_query(getDBPrisijungimas(),$mano_sql_update);
  if (!$ar_pavayko) {
    echo "ERROR: nepavyko uzregistuoti gydytojo.". mysqli_error(getDBPrisijungimas(),$ar_pavayko);
  }

}
function getDoctors($nr){
  $nr_apdorotas=mysqli_real_escape_string(getDBPrisijungimas(),$nr);
  for ($i=0; $i <$nr ; $i++) {
    $mano_sql_tekstas="SELECT * FROM doctors WHERE id=$i";
      $rezultatai=mysqli_query(getDBPrisijungimas(), $mano_sql_tekstas); //rezultatas objektas
    if ($rezultatai) {
      $rezultatai=mysqli_fetch_assoc($rezultatai); //pavercia objekta perskaitomu masyvu
      $rezultatu_masyvas[$i]=$rezultatai;
    } else {
      echo "Neradome duomenu $i gydytojo<br>";
    }
  }
  return $rezultatu_masyvas;
}
// $bandymas=getDoctors(5);
// echo "<br>";
// print_r($bandymas);
// echo "<br>";
// susikurti nauja prjekta ir issivesti daktara is DB naudojant getDoctors() f-ja su while ar foreach
function getDoctors2($nr=9999){
  $mano_sql_tekstas="SELECT * FROM doctors ORDER BY name ASC LIMIT $nr";
  $resultatai=mysqli_query(getDBPrisijungimas(),$mano_sql_tekstas);
  //tikrinu ar grizo duomenu
  if($rezultatai){
    return $rezultatai; //grazinom msql objekta
  }else {
    return NULL;
  }
}
