<?php

class InvalidUrlException extends PrimitiveException 
{	
	public function __construct()
	{
		$msg = 'Url inválida!';
		$this->message = $msg;
	}
		
}