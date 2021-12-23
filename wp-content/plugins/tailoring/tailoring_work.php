<?php
function verification(){
	if(isset($_POST['Ok'])){
$post = (!empty($_POST)) ? true : false;
if($post) {
	$size = htmlspecialchars(trim($_POST['Size']));
	$color = htmlspecialchars(trim($_POST['Color']));
	$count = htmlspecialchars(trim($_POST["Cout"]));
	$material = htmlspecialchars(trim($_POST['Material']));
	$name = htmlspecialchars(trim($_POST['Name']));
	$surname = htmlspecialchars(trim($_POST['Surname']));
	$phone_num = htmlspecialchars(trim($_POST["Phone_num"]));
	$delivery = htmlspecialchars(trim($_POST['Delivery']));
	$city = htmlspecialchars(trim($_POST['City']));
	$address = htmlspecialchars(trim($_POST["Address"]));
	$department = htmlspecialchars(trim($_POST['Department']));

	$error = '';
	if(!$size) {$error .= 'Вкажіть розмір. ';}
	if(!$color) {$error .= 'Оберіть колір. ';}
	if(!$count) {$error .= 'Оберіть кількість. ';}
	if(!$material) {$error .= 'Оберіть матеріал ';}
	if(!$name) {$error .= 'Вкажіть ім`я. ';}
	if(!$surname) {$error .= 'Вкажіть прізвище. ';}
	if(!$phone_num) {$error .= 'Вкажіть контактний номер телефону. ';}
	if(!$delivery) {$error .= 'Оберіть метод доставки. ';}

	
	
	if(!$error) {
		
		$address = "mkapacila@gmail.com";
		$mes = "Розмір: ".$size."\n\nКолір: ".$color."\n\nКільскість: " .$count."\n\nМатеріал: ".$material."\n\nРозмір: ".$name.
		"\n\nКолір: ".$surname."\n\nКільскість: " .$phone_num."\n\nМатеріал: ".$delivery."\n\nКолір: ".$city."\n\nКільскість: " .$address."\n\nМатеріал: ".$department."";
		$send = mail ($address,$mes,"Content-type:text/plain; charset = UTF-8\r\nReply-To:$email\r\nFrom:$name <contact>");
		if($send) {echo 'OK';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
	}}
}
