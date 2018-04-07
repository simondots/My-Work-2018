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
          // echo "Logged In Succesfully";
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
    // echo "Doctor have been found <br>";
    $results = mysqli_fetch_assoc($results); //apdoroti rezultatai / objekta pavercia masyvu
    print_r($results); //isspausdiname
    // var_dump($results); //testas
  } else {
    echo "Doctors number : $nr NOT FOUND <br>";
  }
}
$doctor1 = getDoctor ( 3 ); //gaunam masyva
// print_r( $doctor1 ); //test


                                              // <!-- DELETE TRINTI ==================================== -->
              //
              // function deleteDoctor ( $nr ) {
              //
              //   $my_sql_text = "DELETE FROM Doctors
              //                           WHERE id='$nr'
              //                           LIMIT 1
              //                   ";
              //
              //   mysqli_query($getDBLogin() ,  $my_sql_text );
              // }
              // deleteDoctor( 3 );


              //

              // Function createDoctor ($name,$lname) {
              //   $my_sql_text = "INSERT INTO doctors
              //                   VALUES ('', '$Leninas', '$Kebabas');
              //   ";
              //   mysqli_query($getDBLogin() , $my_sql_text);
              // }
              //   createDoctor('Fuccu','Gates');






              function updateDoctor($nr,$name,$lname) {
                  $name_apdorotas = mysqli_real_escape_string(getDBLogin(), $name);
                  $lname_apdorotas = mysqli_real_escape_string(getDBLogin(), $lname);

                  $my_sql_text = "UPDATE doctors SET
                                         name='$name_apdorotas' ,
                                         lname='$lname_apdorotas'
                                          WHERE id='$nr'
                                          LIMIT 1;
                                          ";


              }


                updateDoctor(4,'Zita','Litaite');






                function getDoctors($kiekis=99999) {
                  $my_sql_text = "SELECT * FROM doctors
                                  LIMIT $kiekis
                                  ORDER BY name
                              ";
                  $results = mysqli_query(getDBLogin(), $my_sql_text);
                  if ($results) {
                  return $results ;
                } else {
                  return NULL;
                }
                }
                $doctors = getDoctors(5);
                $one_doctor = mysqli_fetch_assoc($gydytojai);

                while (true) {
                    echo "<h2>" . $one_doctor ['name']. $one_doctor ['lname'] . "</h2>";
                }













?>
