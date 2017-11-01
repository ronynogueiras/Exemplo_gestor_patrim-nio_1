<?php

class LoginView extends View 
{
	public function afterConstruct()
	{ 
		$loginView->loadTemplateComponent( "login_page" );
	}
}