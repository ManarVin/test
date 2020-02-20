<?php
$email = $_POST['email'];
$email = htmlspecialchars($email);
$email = urldecode($email);
$email = trim($email);

if (mail("andrew.ptogram02@gmail.com", "Заявка с сайта"," E-mail: ".$email ,"From: andrew.ptogram02@gmail.com \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>


ini_set('display_errors','On');
error_reporting('E_ALL');