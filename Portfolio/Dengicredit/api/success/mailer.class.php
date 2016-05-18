<?php

class Mailer
{
	public static function send($params, $result)
	{
		$br = "<br>\r\n";
		$message =
			'firstName: '.$params['firstName'].$br.
			'lastName: '.$params['lastName'].$br.
			'middleName: '.$params['middleName'].$br.
			//'age: '.$params['age'].$br.
			'phone: '.$params['phone'].$br.
			//'E-mail: '.$params['e-mail'].$br.
			'amount: '.$params['amount'].$br.
			'Город: '.$params['city'].$br.
			'employment: '.$params['employment'].$br.
			'aim: '.$params['aim'].$br.
			'date_time: '.$params['date_time'].$br.
			$br;

		foreach ($result as $r) {
			$message .= 'Модуль: '.$r['name'].$br;
			$err = ($r['errors'] == 0) ? 'Нет' : 'Да';
			$message .= 'Ошибка: '.$err.$br;
			$message .= 'Сообщение: '.$r['reply'].$br.$br;
		}

		$mailto  = "olegzigu@gmail.com";
		$charset = "utf-8";
		$subject = "Заявка ДеньгиКредит";
		$content = "text/html";

		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: ".$content." charset=".$charset."\r\n";
		$headers .= "From: \"".'DengiKredit'."\" <".'OTP'.">\r\n";
		$headers .= "Bcc: vashe_milo2@yaya.ru\r\n";
		$headers .= "X-Mailer: E-mail from my site \r\n";

		mail($mailto,$subject,$message,$headers);
	}
}