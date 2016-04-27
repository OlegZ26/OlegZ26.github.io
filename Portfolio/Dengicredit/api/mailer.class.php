<?php

class Mailer
{
	public static function send($params, $result)
	{
		$br = "<br>\r\n";
		$message =
			'Имя: '.$params['firstName'].$br.
			'Фамилия: '.$params['lastName'].$br.
			'Отчество: '.$params['middleName'].$br.
			'Возраст‚: '.$params['age'].$br.
			'Телефон: '.$params['phone'].$br.
			//'E-mail: '.$params['e-mail'].$br.
			'Сумма: '.$params['amount'].$br.
			//'Город: '.$params['city'].$br.
			'Трудоустройство: '.$params['employment'].$br.
			'Цель: '.$params['aim'].$br.
			'Дата и Время: '.$params['date_time'].$br.
			$br.
			'Строка для вставки: '.$br.$params['firstName'].';'.$params['lastName'].';'.$params['middleName'].';'.$params['amount'].';+38'.$params['phone'].';'.$params['ip'].
			$br.
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