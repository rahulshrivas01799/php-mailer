<?php  

require 'PHPMailerAutoload.php';
$mail =new PHPMailer;
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Port=587;

// $mail->SMTPDebug = 1; 

$mail->Username='no-reply@digimonk.in';
$mail->Password='digi@123';

$mail->setFrom('no-reply@digimonk.in', 'Digimonk');
$mail->addAddress('rahulshrivas31121998@gmail.com', 'rahul');     // Add a recipient
#$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('rahulshrivas31121998@gmail.com', 'rahul');
/* $mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name */
$mail->isHTML(true);                                  // Set email format to HTML 

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.'; }
    #echo 'Mailer Error: ' . $mail->ErrorInfo;
 else {
    echo 'Message has been sent';
}

?>