<?php
$name = $_POST['name'];
$tel = $_POST['tel'];
$name = htmlspecialchars($name);
$tel = htmlspecialchars($tel);
$name = urldecode($name);
$tel = urldecode($tel);
$name = trim($name);
$tel = trim($tel);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("info@nuramm.kz", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$tel ,"From: botsite@mm-group.kz \r\n"))
 {    header('Location: https://elite.mm-group.kz/elite.pdf',true, 301);
} else {
    echo "при отправке сообщения возникли ошибки";
}?>