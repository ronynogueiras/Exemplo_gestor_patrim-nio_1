<?php

class Documento extends Controller 
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
			echo "Comando cadastrar do controller Documento";
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
			echo "Comando editar do controller Documento";
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
			echo "Comando index do controller Documento";
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
			echo "Comando consultar do controller Documento";
		}
	}

}