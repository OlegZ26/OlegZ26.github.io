<?php

abstract class Module
{
	private $id = null;
	
	
	public function __construct($id)
	{
		$this->id = $id;
	}
	
	public function id()
	{
		return $this->id;
	}

	abstract public function name();
	abstract public function process($params);
}
