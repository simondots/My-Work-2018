
<!-- // uzduotis2: atspausdinti daktara i <p> </p>, kurio id yra 7
// uzduotis3: visus daktarus "ul li" , kaip list item
// uzduotis4: patobulinti uzduotis3,
    kad paspaudus ant daktaro vardo/pavardes   atidarytu doctor.php faila
// uzduotis5: patobulinti uzduotis4,
    kad   doctor.php faile isvestu info apie - paspausta gydytoja
    HINT: a linke, prideti ?kintamasis=...   ir docotr.php su $_GET pasiimti kintamaji -->

    <?php
        require_once('doctors_functions.php') ;
     ?>


          <p>
             Gydytojo vardas pavarde :
         </p>


         <h3> lalalandia </h3>

         <ul>
           <li>
                     <?php

                         $myDoctor = getDoctor (1) ; //grizo $array
                         print_r( $myDoctor );
                         echo "$myDoctor";

                      ?></li>
           <li>   <?php

                  $myDoctor = getDoctor (2) ; //grizo $array
                  print_r( $myDoctor );
                  echo "$myDoctor";

               ?></li></li>
           <li>   <?php

                  $myDoctor = getDoctor (3) ; //grizo $array
                  print_r( $myDoctor );
                  echo "$myDoctor";

               ?></li></li>
           <li>   <?php

                  $myDoctor = getDoctor (4) ; //grizo $array
                  print_r( $myDoctor );
                  echo "$myDoctor";

               ?></li></li>
           <li>   <?php

                  $myDoctor = getDoctor (5) ; //grizo $array
                  print_r( $myDoctor );
                  echo "$myDoctor";

               ?></li></li>
           <li>   <?php

                  $myDoctor = getDoctor (6) ; //grizo $array
                  print_r( $myDoctor );
                  echo "$myDoctor";
                  ?></li></li>
                   </ul>


<!-- // arba su for ciklu===================================================== -->


                                <h3>For ciklu same stuff</h3>



                                <ul>

                                  <?php
                                   for ($i=1; $i<5; $i++) : //";" - vietoj "{"
                                     include('./doctor.php');
                                  endfor;






















                                  ?>

                                </ul>
