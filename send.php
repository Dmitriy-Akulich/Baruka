<?php
$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$textTitle = $_POST['textTitle'];
$comment = $_POST['comment'];

$name = htmlspecialchars($name);
$tel = htmlspecialchars($tel);
$email = htmlspecialchars($email);
$textTitle = htmlspecialchars($textTitle);
$comment = htmlspecialchars($comment);

$name = urldecode($name);
$tel = urldecode($tel);
$email = urldecode($email);
$textTitle = urldecode($textTitle);
$comment = urldecode($comment);

$name = trim($name);
$tel = trim($tel);
$email = trim($email);
$textTitle = trim($text);
$comment = trim($comment);


if (mail("3700010@gmail.com", "Письмо с сайта", "ФИО:".$name.". TEL:".$tel.". E-mail:".$email."ТЕМА:".$textTitle.". ТЕКСТ:".$comment.", From: 3700010@gmail.com \r\n"))
 {   header("Location: message.html");
} else {
    echo "При отправке сообщения возникли ошибки, повторите попытку еще раз вернувшись на предыдущую страницу";
}?>
