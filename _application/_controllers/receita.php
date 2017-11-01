<?php

class Receita extends Controller 
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
				'tituloTela' => 'Cadastrar Receita',
			);
			$usuarioView = $this->loadView( 'receitaCadastrarView', $data );
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
				'tituloTela' => 'Editar Receita',
			);
			$usuarioView = $this->loadView( 'receitaFinanceiraEditarView', $data );
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
				'tituloTela' => 'Excluir Receita Financeira',
			);
			$usuarioView = $this->loadView( 'receitaFinanceiraExcluirView', $data );
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
				'tituloTela' => 'Consultar Recita',
			);
			$usuarioView = $this->loadView( 'receitaFinanceiraConsultarView', $data );
		}
	}

}