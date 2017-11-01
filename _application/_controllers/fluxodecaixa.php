<?php

class FluxoDeCaixa extends Controller 
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
				'tituloTela' => 'Cadastrar Fluxo de Caixa',
			);
			$usuarioView = $this->loadView( 'fluxoDeCaixaCadastrarView', $data );
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
				'tituloTela' => 'Editar Fluxo de Caixa',
			);
			$usuarioView = $this->loadView( 'fluxoDeCaixaEditarView', $data );
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
				'tituloTela' => 'Excluir Fluxo de Caixa',
			);
			$usuarioView = $this->loadView( 'fluxoDeCaixaExcluirView', $data );
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
				'tituloTela' => 'Consultar Fluxo de Caixa',
			);
			$usuarioView = $this->loadView( 'fluxoDeCaixaConsultarView', $data );
		}
	}

	public function exercicioCorrente( array $data = null ) 
	{
		$this->loadService( "sessions" );
		$session = $this->sessionsService;
		$accessLevel = $session->get( "accessLevel" );
		if ( $accessLevel != 'admin') {
			echo "Acesso restrito"; 
		}
		else {
			$data = array(
				'tituloTela' => 'Último Exercício Financeiro',
			);
			$fluxocaixaView = $this->loadView( "fluxoDeCaixaCorrente", $data );
		}
	}

	public function exerciciosAnteriores( array $data = null ) 
	{
		$this->loadService( "sessions" );
		$session = $this->sessionsService;
		$accessLevel = $session->get( "accessLevel" );
		if ( $accessLevel != 'admin') {
			echo "Acesso restrito"; 
		}
		else {
			$data = array(
				'tituloTela' => 'Exercícios Financeiros Anteriores',
			);
			$fluxocaixaView = $this->loadView( "FluxoDeCaixaAnterior", $data );
		}
	}
}