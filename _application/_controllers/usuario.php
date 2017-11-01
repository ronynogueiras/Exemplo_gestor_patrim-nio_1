<?php

class Usuario extends Controller 
{	
	public function index( array $data = null ) 
	{
		$this->loadService( "sessions" );
		$session = $this->sessionsService;
		$accessLevel = $session->get( "accessLevel" );
		if ( $accessLevel != 'admin') {
			$this->redirect(); 
		}
		else {
			$data = array(
				'tituloTela' => 'Painel de Controle',
			);
			$usuarioView = $this->loadView( 'usuarioDashboard', $data );
		}
	}

	public function logout( array $data = null )
	{
		$this->loadService( "sessions" );
		if ( $this->sessionsService->end() ) {
			$this->redirect();
		}
	}
	
	public function excluirConta( array $data = null ) 
	{
		$this->loadService( "sessions" );
		$session = $this->sessionsService;
		$accessLevel = $session->get( "accessLevel" );
		if ( $accessLevel != 'admin') {
			$this->redirect(); 
		}
		else {
			$data = array(
				'tituloTela' => 'Excluir Conta',
			);
			$usuarioView = $this->loadView( 'usuarioExcluirConta', $data );
		}
	}

	public function editaConta( array $data = null ) 
	{
		$this->loadService( "sessions" );
		$session = $this->sessionsService;
		$accessLevel = $session->get( "accessLevel" );
		if ( $accessLevel != 'admin') {
			$this->redirect(); 
		}
		else {
			$data = array(
				'tituloTela' => 'Editar Conta',
			);
			$usuarioView = $this->loadView( 'usuarioEditaConta', $data );
		}
	}

}