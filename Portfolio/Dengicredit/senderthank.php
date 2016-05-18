<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
date_default_timezone_set("Europe/Helsinki");

//require_once(__DIR__.'/api/logger.class.php');
require_once(__DIR__.'/api/success/request.class.php');                ///   /success  //
require_once(__DIR__.'/api/success/module.class.php');                 ///   /success  //
require_once(__DIR__.'/api/success/mailer.class.php');                 ///   /success  //

$request = new Request();
$modules = array();
$idname  = array(
	// 'module_a' => 'alfabank',
	'module_f' => 'finline',
	);

foreach ($idname as $id => $name)
{
	if ($request->get($id) == 1) {
		require_once(__DIR__.'/api/success/'.$name.'.class.php');        ///   /success  //
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
    header("Location: /successcard.php");
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