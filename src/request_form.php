<?php

date_default_timezone_set('Europe/Moscow');
error_reporting(0);

// Рабочие переменные:
$warning_messages = array();

// NAME
if (isset($_POST['name']) and !empty($_POST['name']))
{
	$name = urldecode($_POST['name']);
	$name = trim($name);
	$name = strip_tags($name);
	
	if (mb_strlen($name) < 3 or mb_strlen($name) > 100)
	{
		$warning_messages['name'] = 'Недопустимая длинна';
	}
}
else
{
	$warning_messages['name'] = 'Не указано Имя отправителя';
}

// PHONE	
if (isset($_POST['phone']) and !empty($_POST['phone']))
{
	$phone = urldecode($_POST['phone']);		
	$phone = trim($phone);
	$phone = strip_tags($phone);
	$phone = str_replace(" ", "", $phone);
	$phone = str_replace("(", "", $phone);
	$phone = str_replace(")", "", $phone);
	$phone = str_replace("-", "", $phone);
	
	if (!preg_match("/^(\+)?\d{11}$/ui", $phone))
	{
		$warning_messages['phone'] = 'Укажите телефон в международном формате (пример: +7 (495) 123-45-67)'.$phone;
	}
}
else
{
	$warning_messages['phone'] = 'Не указан Телефон';
}	
	
// E-MAIL
if (isset($_POST['email']) and !empty($_POST['email']))
{
	$email = urldecode($_POST['email']);
	$email = trim($email);
	$email = strip_tags($email);

	// Проверка e-mail на валидность.
	if (!preg_match("/^[_a-z0-9а-яё-]+(\.[_a-z0-9а-яё-]+)*@[a-z0-9а-яё-]+(\.[a-z0-9а-яё-]+)*(\.[a-zа-яё]{1,6})$/ui", $email))
	{
		$warning_messages['email'] = 'Неверный формат E-mail';
	}
}
else
{
	$email = 'Адрес не указан.';
}

// TIME
if (isset($_POST['time']) and !empty($_POST['time']))
{
	$time = urldecode($_POST['time']);
	$time = trim($time);
	$time = strip_tags($time);
}
else
{
	$warning_messages['time'] = 'Не указано Имя отправителя';
}

// Если обнаружены ошибки в форме:
if (!empty($warning_messages))
{
	echo json_encode([ 'result' => false, 'warnings' => $warning_messages ]);
	exit();
}

// Успешное завершение задачи:
echo json_encode([ 'result' => true ]);
exit();

?>