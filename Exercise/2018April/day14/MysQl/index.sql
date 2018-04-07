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
        CREATE DATABASE `hospital9`;

        show databases;  //

        // ` -  db/tables  pavadinimams
        // '  - tekstui/reikmems/values
        // "" - tekstui/reikmems/values



        CREATE DATABASE hospital10;
        use hospital10; // nurodome darbine duomenu base (DB)



         use hospital10;

          CREATE TABLE doctors (
             id INT(6) AUTO_INCREMENT PRIMARY KEY,
             name varchar(25),
             lname varchar(30)
             );

          show tables;

            INSERT INTO doctors VALUES ('', 'Tim', 'Logan');
            INSERT INTO doctors VALUES ('', 'Paul', 'Elo');
            INSERT INTO doctors VALUES ('', 'Ona', 'Onutaite');

          SELECT * FROM doctors;


          CREATE TABLE patients (
             id INT(6) AUTO_INCREMENT PRIMARY KEY,
             name varchar(25),
             lname varchar(30),
             doctor_id INT(6)
             );

             INSERT INTO patients  VALUES  ('', 'Mark', 'Jonon' , '2' );
         	INSERT INTO patients  VALUES  ('', 'Tom', 'Taros' , '2' );
         	INSERT INTO patients  VALUES  ('', 'Co', 'Neno' , '0' );

              SELECT * FROM patients;

              UPDATE patients
                  SET doctor_id = 1
                  WHERE id=3 Limit 1;

             UPDATE patients
                      SET name = 'Paul', lname = 'Paulauskas', doctor_id = 3
                      WHERE id=5;

         // kaip istrinti 4 pacienta?
         DELETE FROM patients where id = 4;

          // kaip istrinti 2 daktara?
          DELETE FROM doctors WHERE id=2;



          Create TABLE `patients` ( id INT(6) AUTO_INCREMENT PRIMARY KEY, name VARCHAR(25), lname VARCHAR(35) );
           INSERT INTO patients  VALUES  ('', 'Ari', 'Amon');

           // !!!
           RENAME TABLE paccients TO patients;

             // pervadins lentele
           ALTER TABLE `doctors` CHANGE `pacient_id` `patient_id` int(6); // pervadins stulpeli
           ALTER TABLE `patients` CHANGE `patient_id` `doctor_id` int(6);
           ALTER TABLE doctors DROP COLUMN patient_id;   // istrins stulpeli
           ALTER TABLE patients ADD  patient_id INT(6);  // sukurs stulpeli

           Create TABLE `img` ( id INT(6) AUTO_INCREMENT PRIMARY KEY, name VARCHAR(55), client_id int(6) );

            UPDATE img SET name = 'logo2.jpg' WHERE client_id=4;
        	 select * FROM  img;
        	 // ` -  db/tables
        	 // '  - tekstui/reikmems/values


          //-------------DOCTORS----------
        INSERT INTO doctors  VALUES  ('', 'Tom', 'Opsa');
        INSERT INTO doctors  VALUES  ('', 'Paul', 'Tor');;
        INSERT INTO doctors  VALUES  ('', 'Jo', 'Oto');
        INSERT INTO doctors  VALUES  ('', 'Lili', 'Lekso');
        INSERT INTO doctors  VALUES  ('', 'Timy', 'So');
        //-------------patients---------------
        	INSERT INTO patients  VALUES  ('', 'Ari', 'Amon' , '2' );
        	INSERT INTO patients  VALUES  ('', 'Tim', 'Taros' , '1' );
        	INSERT INTO patients  VALUES  ('', 'Ana', 'Tomson' , '1' );
        	INSERT INTO patients  VALUES  ('', 'Tom', 'Alis' , '3' );
        	INSERT INTO patients  VALUES  ('', 'Karis', 'Katis' , '2' );
        	INSERT INTO patients  VALUES  ('', 'Jo', 'Oporas' , '2' );
        //-------------IMG---------------
        INSERT INTO img  VALUES  ('', 'pic-46.jpg', '5');
        INSERT INTO img  VALUES  ('', 'pic-46.PNG', '1');
        INSERT INTO img  VALUES  ('', 'pic-456.jpg', '3');
        INSERT INTO img  VALUES  ('', 'pic-4234234.GIF', '2');
        INSERT INTO img  VALUES  ('', 'pic-4622.GIF', '4');



        <!-- bootstrap4 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- !!! jQuery "slim" yra nepilna versija ir jQuery kai kurios komandos neveikia, reiktu isisdeti kita jQuery  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas visada zemiausias -->
        <script type="text/javascript" src="main.js"> </script>
    </body>
</html>
