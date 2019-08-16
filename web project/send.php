<?php
$name = $_POST['name'];
$num = $_POST['num'];
$text = $_POST['text'];
$name = htmlspecialchars($name);
$num = htmlspecialchars($num);
$name = urldecode($name);
$num = urldecode($num);
$name = trim($name);
$enum = trim($num);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("darkhanmyrzabek02@gmail.com", "Заявка с сайта", "Имя: ".$name." .Номер: ".$num." .Дополнительная информация: ".$text,"From: Myrzabek.Darkhan@jastyk.kz \r\n"))
	{  $_SESSION["send"] = 'Сообщение отправлено!'; 
exit('<meta http-equiv="refresh" content="0; url=index.html" />');
} ?>