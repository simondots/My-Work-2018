<?php


$elPastas = $_POST['email'];
$klientoKlausimas = $_POST['message'];
$klientoVardas = $_POST['name'];

// echo $elPastas. $klientoAntraste.$klientoKlausimas ;   //test


//Load Composer's autoloader
require 'libs/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing true enables exceptions
try {
//Server settings
$mail->SMTPDebug = 2;

$mail->SMTPOptions = array(
  'ssl' => array(
  'verify_peer' => false,
  'verify_peer_name' => false,
  'allow_self_signed' => true
  )
);
$mail->Host = 'tls://smtp.gmail.com:587';
$mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, ssl also accepted
$mail->Port = 465;                                      // TCP port to connect to

//Server settings
$mail->SMTPDebug = 0;                                 // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP

$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ziogas2000@gmail.com';
$mail->Password = 'kodas' ;  // SMTP username

//Recipients
$mail->setFrom('ziogas2000@gmail.com', 'Nojaus Laivas');
$mail->addAddress('ziogas2000@gmail.com', 'Nojaus Laivas');
$mail->addReplyTo( $elPastas, 'Kliento vardas');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

//Attachments
// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Body    = $klientoVardas . $elPastas . $klientoKlausimas;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
$zinute = "Jūsų užklausa išsiūsta sėkmingai";
$_SESSION['pranesimai'] = $zinute;

echo 'Užklausa išsiųsta';
} catch (Exception $e) {
echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}



// require_once('contact.php');
//
// $elPastas = ['email'];
// $klientoKlausimas =['message'];
// $klientoVardas = ['name'];
//
//
// $message = "Sveikinu, jusu laiskas issiustas";
// $_SESSION['message'] = $message;
//
// echo 'Message has been sent';







        //
        // $name=$_GET['vardas'];
        // $email=$_GET['pastas'];
        // $phone=$_GET['telefonas'];
        //
        //
        // $error="";
        // $success="";
        //
        // if (strlen($name) < 3) {
        //   $error.="<div class='alert alert-danger'>Insert Legit Name </div>";
        // }
        //
        // if (strlen($phone) < 6) {
        //   $error.="<div class='alert alert-danger'>Phone number must contain atleast 9 numbers</div>";
        // }
        // if (strlen($email) < 6) {
        //   $error.="<div class='alert alert-danger'>Please insert Legit email adress</div>";
        // }
        //
        // if (empty($error)) {
        //   $message="Vartotojas $name, telefono numeris: $phone,El paštu: $email atsiuntė Jums užklausą";
        //   mail("ziogas2000@gmail.com", "Užklausa", $message);
        //   $success.="<div class='alert alert-success'>Jūsų užklausa gauta. Atsakysime netrukus.</div>";
        //   echo $success;
        //   die;
        // } else {
        //   echo $error;
        //   die;
        // }

        // echo $vardas;
        // echo $telefonas;


        // var_dump( $_POST );
        // echo $_POST['']


  ?>
