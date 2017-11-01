<?php

class Patrimonio extends Controller 
{	
	public function cadastrar( array $data = null ) 
	{
		$this->loadService( "sessions" );
		$session = $this->sessionsService;
		$accessLevel = $session->get( "accessLevel" );
		if ( $accessLevel != 'admin') {
			echo "Acesso restrito"; 
		}
		else {
			echo "Comando cadastrar do controller Patrimonio";
		}
	}
	
	public function editar( array $data = null ) 
	{
		$this->loadService( "sessions" );
		$session = $this->sessionsService;
		$accessLevel = $session->get( "accessLevel" );
		if ( $accessLevel != 'admin') {
			echo "Acesso restrito"; 
		}
		else {
			echo "Comando editar do controller Patrimonio";
		}
	}

	public function excluir( array $data = null ) 
	{
		$this->loadService( "sessions" );
		$session = $this->sessionsService;
		$accessLevel = $session->get( "accessLevel" );
		if ( $accessLevel != 'admin') {
			echo "Acesso restrito"; 
		}
		else {
			echo "Comando index do controller Patrimonio";
		}
	}

	public function consultar( array $data = null ) 
	{
		$this->loadService( "sessions" );
		$session = $this->sessionsService;
		$accessLevel = $session->get( "accessLevel" );
		if ( $accessLevel != 'admin') {
			echo "Acesso restrito"; 
		}
		else {
			echo "Comando consultar do controller Patrimonio";
		}
	}

	public function efetuarBalanco( array $data = null ) 
	{
		$this->loadService( "sessions" );
		$session = $this->sessionsService;
		$accessLevel = $session->get( "accessLevel" );
		if ( $accessLevel != 'admin') {
			echo "Acesso restrito"; 
		}
		else {
			$data = array(
				'tituloTela' => 'Balanço Patrimonial',
			);
			$usuarioView = $this->loadView( 'EfetuarBalancoView', $data );
		}
	}

}