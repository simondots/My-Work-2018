<?php


// var_dump( $_POST );
// echo $_POST['']

$elPastas = $_POST['pastas'];
$klientoAntraste = $_POST['antraste'];
$klientoKlausimas = $_POST['klausimas'];



// echo $elPastas . $klientoAntraste . $klientoKlausimas;


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require 'libs/PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );
    $mail->Host = 'tls://smtp.gmail.com:587';
    $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                      // TCP port to connect to

    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP

    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'uremail@gmail.com';                 // SMTP username
    $mail->Password = 'emailPW';                 // SMTP username

    //Recipients
    $mail->setFrom('hugoheaven2@gmail.com', 'Puslapio masteriui');
    $mail->addAddress('hugoheaven2@gmail.com', 'Puslapio Kurejui');     // Add a recipient
    $mail->addReplyTo( $elPastas, 'Kliento vardas');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachmentss
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $klientoAntraste;
    $mail->Body    = $klientoKlausimas;
    $mail->AltBody = $klientoKlausimas;

    $mail->send();
    $zinute = "Congrats,jusu laikas issiustas";
    $_SESSION['zinutes'] = $zinute;
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


?>
