<?php

class AccessUnauthorizedException extends PrimitiveException
{
	public function __construct()
	{
		$msg = 'you have no clearance. Invalid Access.';
		$this->message = $msg;
	}

}