<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'src/Exception.php';
    require 'src/PHPMailer.php';
    require 'src/SMTP.php';
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
// send email
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Host = "mildespertar.com";
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@mildespertar.com';
    $mail->Password = 'Lastres3$';
    $mail->setFrom('info@mildespertar.com', 'Mil Despertar');
    $mail->addAddress('mildespertar@gmail.com', 'Mil Despertar');
    $mail->Subject = 'Mil Despertar Landing';
    $mail->msgHTML('<h2>Datos del suscriptor</h2>'."<br>".'Nombre: '.$name."<br>".'Email: '.$email."<br>".'Numero: '.$numero."<br>");
    $mail->AltBody = 'HTML mesaje no soportado';

    if(!$mail->send()){
        echo "Mailer Error: " . $mail->ErrorInfo;
    }else{
        echo "Message sent!";
    }
// ==========
}
?>