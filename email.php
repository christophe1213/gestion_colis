<?php
$destinataire = 'christophejaosoa78@gmail.com';
$sujet = 'Sujet de l\'email';
$message = 'Contenu de l\'email';

use PHPMailer\PHPMailer\DSNConfigurator;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';


function email($from_name,$from_email,$subject,$message){
    $mail= new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug=0;
    $mail->SMTPSecure='ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='christophe1213.com@gmail.com';
    $mail->Passwrod='edmhrqwyydrwanar';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port= 465;

    $mail->setFrom($from_name,$from_email);
    $mail->addAddress('christophe1213.com@gmail.com');
    $mail->isHTML(true);
    $mail->Subject=$subject;
    $mail->Body=$message;
    
    if($mail->send()){
        echo'Message envoyer';
    }
    else{
        echo'Error';
    }


}
email('Christophe','christophe1213.com@gmail.com','Kiass','Aiza');

// ?>