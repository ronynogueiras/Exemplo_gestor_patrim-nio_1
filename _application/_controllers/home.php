<?php

class Home extends Controller 
{
	
	public function index( array $data = null ) 
    {
		$this->loadService( "sessions" );
		$session = $this->sessionsService;
		$status = $session->get( "status" );
		$accessLevel = $session->get( "accessLevel" );

		if ( $status == 'logado' ) {
			$session->set( 'accessLevel', 'admin' );
			$this->redirect( 'usuario/' );
		}
		else {
			$viewIndex =  $this->loadView( "index" );
			$viewIndex->loadTemplateComponent( "home_page" );
		}
	}
	
	public function login( array $data = null ) 
    {
		$this->loadService( "sessions" );
		$session = $this->sessionsService;
		if ( $session->set( 'status', 'logado' ) ) {
			$session->set( 'accessLevel', 'admin' );
			$loginView =  $this->loadView( "signIn" );
		}
		else {
			$loginView =  $this->loadView( "loginView" );
		}
		
	}

	public function logout( array $data = null )
	{
		$this->loadService( "sessions" );
		if ( $this->sessionsService->end() ) {
			echo 'comando logout do controller home: você foi deslogado';
		}
	}

	public function criarConta( array $data = null )
	{
		$this->loadService( "sessions" );
		$session = $this->sessionsService;
		$status = $session->get( "status" );
		
		if ( $status == 'logado' ) {
			$this->redirect( 'usuario/' );
		}
		else {
			echo "Para criar uma conta vc precisa estar logado";
		}
	}
	
}