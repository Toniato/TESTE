<?php

//include phpmailer
require_once('class.phpmailer.php');

//SMTP Settings
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth   = true;
$mail->SMTPSecure = "tls";
$mail->SMTP_PORT = "587";
$mail->Host       = "email-smtp.us-west-2.amazonaws.com";
//$mail->Username   = "AKIAIVRU5UPFG4C7PLEA";
$mail->Username   = "AKIAISMKV7CI4DTFFIEA";
//$mail->Password   = "Ak9z/YRs28TKJC3x1ITBe39ViJpZ+MuL4xxdRdSx5a0k";
$mail->Password   = "Aonn6xdnTmXWP3+Yzwzfw8jgd+LR4x1StBVVFlQT0L+5";
//

$mail->SetFrom('marcostoniato@globo.com', 'Sender Name'); //from (verified email address)
$mail->Subject = "Email Subject"; //subject

//message
$body = "E-mail de teste, utilizando o SES AWS. **** developed by Marcos Toniato";
$body = preg_replace("[]",'',$body);
$mail->MsgHTML($body);
//

//recipient
$mail->AddAddress("marcostoniato@biorio.org.br", "Test Recipient");

//Success
if ($mail->Send()) {
    echo "Message sent!"; die;
}




$mail->SetFrom('marcostoniato@globo.com', 'Sender Name'); //from (verified email address)
$mail->Subject = "Email Subject"; //subject

//message
$body = "E-mail de teste, utilizando o SES AWS. **** developed by Marcos Toniato";
$body = preg_replace("[]",'',$body);
$mail->MsgHTML($body);
//

//recipient
$mail->AddAddress("tania@biorio.org.br", "Test Recipient");

//Success
if ($mail->Send()) {
    echo "Message sent!"; die;
}




$mail->SetFrom('marcostoniato@globo.com', 'Sender Name'); //from (verified email address)
$mail->Subject = "Email Subject"; //subject

//message
$body = "E-mail de teste, utilizando o SES AWS. **** developed by Marcos Toniato";
$body = preg_replace("[]",'',$body);
$mail->MsgHTML($body);
//

//recipient
$mail->AddAddress("sergio@biorio.org.br", "Test Recipient");

//Success
if ($mail->Send()) {
    echo "Message sent!"; die;
}

?>
