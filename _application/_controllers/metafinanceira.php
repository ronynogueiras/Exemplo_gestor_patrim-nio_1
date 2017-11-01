<?php

class MetaFinanceira extends Controller 
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
				'tituloTela' => 'Cadastrar Meta Financeira',
			);
			$usuarioView = $this->loadView( 'metaFinanceiraCadastrarView', $data );
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
				'tituloTela' => 'Editar Meta Financeira',
			);
			$usuarioView = $this->loadView( 'metaFinanceiraEditarView', $data );
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
				'tituloTela' => 'Excluir Meta Financeira',
			);
			$usuarioView = $this->loadView( 'metaFinanceiraExcluirView', $data );
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
				'tituloTela' => 'Consultar Meta Financeira',
			);
			$usuarioView = $this->loadView( 'metaFinanceiraConsultarView', $data );
		}
	}

}