<?php
$name = $_POST['name'];
$tel = $_POST['tel'];
$size = $_POST['size'];
$model = $_POST['model'];
$comment = $_POST['comment'];

$name = htmlspecialchars($name);
$tel = htmlspecialchars($tel);
$size = htmlspecialchars($size);
$model = htmlspecialchars($model);
$comment = htmlspecialchars($comment);

$name = urldecode($name);
$tel = urldecode($tel);
$size = urldecode($size);
$model = urldecode($model);
$comment = urldecode($comment);

$name = trim($name);
$tel = trim($tel);
$size = trim($size);
$model = trim($model);
$comment = trim($comment);


if (mail("3700010@gmail.com", "Заказ обуви", "ФИО:".$name.". TEL:".$tel.". Размер:".$size."Модель:".$model.". Адрес:".$comment.", From: 3700010@gmail.com \r\n"))
 {   header("Location: send.html");
} else {
    echo "При отправке сообщения возникли ошибки, повторите попытку еще раз вернувшись на предыдущую страницу";
}?>
