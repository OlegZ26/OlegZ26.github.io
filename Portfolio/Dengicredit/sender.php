<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
date_default_timezone_set("Europe/Helsinki");

//require_once(__DIR__.'/api/logger.class.php');
require_once(__DIR__.'/api/request.class.php');
require_once(__DIR__.'/api/module.class.php');
require_once(__DIR__.'/api/mailer.class.php');

$request = new Request();
$modules = array();
$idname  = array(
	// 'module_a' => 'alfabank',
	'module_f' => 'finline',
	//'module_d1' => 'dummy',
	//'module_d2' => 'dummy',
	);

foreach ($idname as $id => $name)
{
	if ($request->get($id) == 1) {
		require_once(__DIR__.'/api/'.$name.'.class.php');
		$classname = 'Module_'.$name;
		$modules[] = new $classname($id);
	}
}


$message  = '';
$success  = count($modules) > 0;
$result   = array();
$partners = array();

foreach ($modules as $module)
{
	$ret = $module->process($request);
	$result[] = $ret;
	if ($ret['errors'] != 0 && $success == true) {
		$success = false;
		$message = $ret['reply'];
		$partners[] = $ret['id'];
	}
}

Mailer::send($request->params(), $result);

if ($success)
{
    header("HTTP/1.0 301 Moved Permanently");
    header("Location: /success.html");
}
else
{
	$params = $request->params();
    ob_start();
    include_once 'error.php';
    $html = ob_get_contents();
    ob_end_clean();
    echo $html;
}

?>