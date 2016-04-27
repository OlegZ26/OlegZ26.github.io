<?php

class Request
{
	private $params = null;

	public function __construct()
	{
		$this->params = array(
			'ip' => $_SERVER['REMOTE_ADDR'],
			'firstName'  => $this->getRequest('firstName'),
			'lastName'   => $this->getRequest('lastName'),
			'middleName' => $this->getRequest('middleName'),
			'inn' => $this->getRequest('inn'),
			'age' => $this->getRequest('age'),
			'phone' => $this->getRequest('phone'),
			///'e-mail' => $this->getRequest('e-mail'),
			'amount' => $this->getRequest('amount'),
			///'city' => $this->getRequest('city'),
			'employment' => $this->getRequest('employment'),
			'aim' => $this->getRequest('aim'),
			'date_time' => date('r'),
		);

		foreach ($_REQUEST as $key => $value) {
			if (strpos($key, 'module_') !== false) {
				$this->params[$key] = $value;
			}
		}
	}

	public function fullname()
	{
		return $this->get('lastName').' '.$this->get('firstName').' '.$this->get('middleName');
	}

	public function ip()
	{
		return $this->get('ip');
	}

	public function inn()
	{
		return $this->get('inn');
	}

	public function phone()
	{
		return $this->get('phone');
	}

	public function employment()
	{
		return $this->get('employment');
	}

	public function params()
	{
		return $this->params;
	}


	public function get($name)
	{
		return isset($this->params[$name]) ? $this->params[$name] : null;
	}

	public function getRequest($arg)
	{
		return (isset($_REQUEST[$arg])) ? trim($_REQUEST[$arg]) : '';
	}
}