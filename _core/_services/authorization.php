<?php

class Authorization extends Service
{

	function __construct()
	{
		$this->afterConstruct();
	}
	
	private function afterConstruct() 
	{
		$this->loadService( 'sessions' );
	}

    public function setUserCredentials( $userid, $class ) 
	{
        $this->sessionsObject->set( 'session_user', $userid );
        $this->sessionsObject->set( 'session_class', $class );
    }

    public function unsetUserCredentials() 
	{
        $this->sessionsObject->remove( 'session_user' );
        $this->sessionsObject->remove( 'session_class' );
    }

    public function getUserClass()
	{
        return $this->sessionsService->get( 'session_class' );
    }

    public function getUserId()
	{
        return $this->sessionsService->get( 'session_user' );
    }

    public function isUserAuthenticated()
	{
        return isset( $_SESSION['session_class'] ); 
    }

    public function isUserAuthorized( $controller, $action )
	{
    	global $authorization;

     	$userClass = $this->getUserClass();

     	$setting1 = isset( $authorization['any'][$controller][$action] );
		$setting2 = isset( $authorization[$userClass][$controller][$action] );
		
		if ( $setting1 || $setting2	 ) {
			return true;
		}
     
		return false;   	
    }
}