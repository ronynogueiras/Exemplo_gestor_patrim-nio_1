<?php

class SignIn extends View 
{
	public function afterConstruct()
	{ 
		$this->loadTemplateComponent( "sign_in" );
	}
}