<?php

class Ativo extends Controller 
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
			$data = array(
				'tituloTela' => 'Cadastrar Ativo',
			);
			$usuarioView = $this->loadView( 'ativoCadastrarView', $data );
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
			$data = array(
				'tituloTela' => 'Editar Ativo',
			);
			$usuarioView = $this->loadView( 'ativoEditarView', $data );
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
			$data = array(
				'tituloTela' => 'Excluir Ativo',
			);
			$usuarioView = $this->loadView( 'ativoExcluirView', $data );
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
			$data = array(
				'tituloTela' => 'Consultar Ativo',
			);
			$usuarioView = $this->loadView( 'ativoConsultarView', $data );
		}
	}

}