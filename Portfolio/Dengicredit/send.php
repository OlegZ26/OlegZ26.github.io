<?php
require_once 'logger.class.php';

#error_reporting(E_ALL);
#ini_set('display_errors', 1);
date_default_timezone_set("Europe/Helsinki");


function get_request($arg) {
	return (isset( $_REQUEST[$arg])) ? $_REQUEST[$arg] : '';
}

$params = array(
    'partner' => '2678',
    'ip' => $_SERVER['REMOTE_ADDR'],
    'firstName'  => get_request('firstName'),
    'lastName'   => get_request('lastName'),
    'middleName' => get_request('middleName'),
    'age' => get_request('age'),
    'phone' => '+38'.get_request('phone'),
    'e-mail' => get_request('e-mail'),
    'amount' => get_request('amount'),
    'city' => get_request('city'),
    'employment' => get_request('employment'),
    'aim' => get_request('aim'),
	'date_time' => date ('r'),
);

/* mail */
$message =
		'Имя: '.$params['firstName'].'<br>'.
		'Фамилия: '.$params['lastName'].'<br>'.
		'Отчество: '.$params['middleName'].'<br>'.
		'Возраст‚: '.$params['age'].'<br>'.
		'Телефон: '.$params['phone'].'<br>'.
		'E-mail: '.$params['e-mail'].'<br>'.
		'Сумма: '.$params['amount'].'<br>'.
		'Город: '.$params['city'].'<br>'.
		'Трудоустройство: '.$params['employment'].'<br>'.
		'Цель: '.$params['aim'].'<br>'.
		'Дата и Время: '.$params['date_time'].'<br>'.
			'<br>'.'Строка для вставки: '.'<br>'.$params['firstName'].';'.$params['lastName'].';'.$params['middleName'].
			';'.$params['amount'].';'.$params['phone'].';'.$params['ip'].'<br>'
	;

	$mailto = "olegzigu@gmail.com";
	$charset = "utf-8";
	$subject = "Имя письма";
	$content = "text/html";
	$status="<br>";

	$headers  = "MIME-Version: 1.0\r\n";
   $headers .= "Content-Type: ".$content." charset=".$charset."\r\n";
   $headers .= "From: \"".'DengiKredit'."\" <".'OTP'.">\r\n";
   $headers .= "Bcc: vashe_milo2@yaya.ru\r\n";
   $headers .= "X-Mailer: E-mail from my site \r\n";

	mail($mailto,$subject,$message,$headers);
/* mail */

/* DB */
	function db_connect ( $host, $user, $password, $name )
	{
		$db = mysql_connect ( $host, $user,$password )
			or die("Connection error: ".mysql_error() );
				mysql_select_db ( $name,$db )
			or die ("Wrong database name: ".mysql_error() );
		return $db;
	}

	$db_name = 'chinaf00_credit';
	$db_user = 'chinaf00_credit';
	$db_pass = 'Ujdbylf88';
	$db_host = "chinaf00.mysql.ukraine.com.ua";

	db_connect ($db_host, $db_user, $db_pass, $db_name);

		$request = "INSERT INTO `chinaf00_credit`.`dengi_kredit` (`id`, `first_name`, `last_name`,
		`middle_name`, `age`, `phone`, `email`, `amount`, `city`, `employment`, `aim`, `ip`, `date_time`)
		VALUES (null, ".'\''.$params['firstName'].'\''.", ".'\''.$params['lastName'].'\''.", ".'\''.$params['middleName'].'\''.",
		".'\''.$params['age'].'\''.", ".'\''.$params['phone'].'\''.", ".'\''.$params['e-mail'].'\''.", ".'\''.$params['amount'].'\''.",
		".'\''.$params['city'].'\''.", ".'\''.$params['employment'].'\''.", ".'\''.$params['aim'].'\''.", ".'\''.$params['ip'].'\''.", ".'\''.$params['date_time'].'\''.")";
mysql_query("SET NAMES utf8")	;
$result = mysql_query ($request);
	if (!$result) {
		echo $message  = 'Неверный запрос: ' . mysql_error() . "\n";
	}
/* DB */

$logname = date('md_His').'_'.get_request('phone');
$log = new Logger("logs/".$logname.".log");
$log->dump('_SERVER:', $_SERVER);
$log->dump('_REQUEST:', $_REQUEST);

$query = http_build_query ($params);
$contextData = array (
    'method' => 'POST',
    'header' => "Connection: close\r\n".
                "Content-Length: ".strlen($query)."\r\n",
    'content'=> $query );

$context = stream_context_create (array ( 'http' => $contextData ));

$log->dump('HTTP request: ', $contextData);


// Read page rendered as result of your POST request
$reply = file_get_contents('http://partner.finline.ua/api/applyWeb/', false, $context);

$log->log('HTTP reply: '.$reply);

$json = json_decode($reply, true);
if ($json['result'] == true)
{
    header("HTTP/1.0 301 Moved Permanently");
    header("Location: /success.php");
    exit(1);
}
else
{
    $iterator = new RecursiveIteratorIterator(
        new RecursiveArrayIterator($json), RecursiveIteratorIterator::SELF_FIRST);

    $msg = 'Возникла какая-то ошибка при отправке данных.';
    foreach ($iterator as $key => $val) {
        if ($key === 'msg')
            $msg = $val;
    }

    $log->log('Result: '.$msg);

    if ($msg === 'входящий дубль \'phone\'')
    {
        header("HTTP/1.0 301 Moved Permanently");
        header("Location: /success.php");
        exit(1);
    }

    extract($params);
    ob_start();
    include_once 'form.php';
    $html = ob_get_contents();
    ob_end_clean();
    echo $html;
}
