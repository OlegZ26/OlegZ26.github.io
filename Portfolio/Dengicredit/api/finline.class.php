<?php

class Module_finline extends Module
{
	public function name()
	{
		return 'финлайн';
	}

	public function process($data)
	{
		$params = array(
			'partner' => '2678',
			'ip' => $data->get('ip'),
			'firstName'  => $data->get('firstName'),
			'lastName'   => $data->get('lastName'),
			'middleName' => $data->get('middleName'),
			'age' => $data->get('age'),
			'phone' => '+38'.$data->get('phone'),
			'e-mail' => $data->get('e-mail'),
			'amount' => $data->get('amount'),
			'city' => $data->get('city'),
			'employment' => $data->get('employment'),
			'aim' => $data->get('aim'),
			'date_time' => date('r'),
      'identCode' => $data->inn(),
		);

		$query = http_build_query($params);
		$contextData = array (
			'method' => 'POST',
			'header' => "Content-Type: application/x-www-form-urlencoded\r\n".
						"Connection: close\r\n".
						"User-Agent:Mozilla/1.0\r\n".
						"Content-Length: ".strlen($query)."\r\n",
			'content'=> $query );
		$context = stream_context_create (array ( 'http' => $contextData ));
		$reply = file_get_contents('http://partner.finline.ua/api/applyWeb/', false, $context);

		///header("Content-Type: text/html;charset=utf-8");
		///echo $reply.'<br>';

		$json = json_decode($reply, true);

		$errors = ($json['result'] == true) ? 0 : 1;
		$reply = '';

		if ($errors)
		{
			$iterator = new RecursiveIteratorIterator(
				new RecursiveArrayIterator($json), RecursiveIteratorIterator::SELF_FIRST);

			$reply = 'Возникла какая-то ошибка при отправке данных.';
			foreach ($iterator as $key => $val)
			{
				if ($key === 'msg') {
					$reply = $val;
					if ($reply !== 'входящий дубль \'phone\'')
						break;
				}
			}

			if ($reply === 'входящий дубль \'phone\'') {
				$errors = 0;
				$reply = '';
			}
		}

		return array(
			'errors' => $errors,
			'id'     => $this->id(),
			'name'   => $this->name(),
			'reply'  => $reply,
			);
	}
}
