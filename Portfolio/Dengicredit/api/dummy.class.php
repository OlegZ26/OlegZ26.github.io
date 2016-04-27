<?php

class Module_Dummy extends Module
{
	public function name()
	{
		return 'Module_Dummy';
	}
	
	public function process($data)
	{
		$e = $this->id() === 'module_d1' ? 0 : 1;
		return array(
			'errors' => $e,
			'id'     => $this->id(),
			'name'   => $this->name(),
			'reply'  => 'Чтото не то в '.$this->id(),
			);
	}
}
