<?php 

class DespesaEntity extends Entity
{
    private $id;
    private $nome;
    private $descricao;
    private $valorEstimado;
    private $fluxoDeCaixaId;
    private $usuarioId;
    private $status;
    private $data;

    function __construct( $id, $nome, $descricao, $valorEstimado, $fluxoDeCaixaId, $usuarioId, $status, $data )
    {
        $this->setId( $id );
        $this->setNome( $nome );
        $this->setDescricao( $descricao );
        $this->setValorEstimado( $valorEstimado );
        $this->setFluxoDeCaixaId( $fluxoDeCaixaId );
        $this->setUsuarioId( $usuarioId );
        $this->setStatus( $status );
        $this->setData( $data );
    }

    public function setId( $valor )
    {
        $this->id = $valor;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNome( $valor )
    {
        $this->nome = $valor;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setDescricao( $valor )
    {
        $this->descricao = $valor;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setValorEstimado( $valor )
    {
        $this->valorEstimado = $valor;
    }

    public function getValorEstimado()
    {
        return $this->valorEstimado;
    }

    public function setFluxoDeCaixaId( $valor )
    {
        $this->fluxoDeCaixaId = $valor;
    }

    public function getFluxoDeCaixaId()
    {
        return $this->fluxoDeCaixaId;
    }

    public function setUsuarioId( $valor )
    {
        $this->usuarioId = $valor;
    }

    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    public function setStatus( $valor )
    {
        $this->status = $valor;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setData( $valor )
    {
        $this->data = $valor;
    }

    public function getData()
    {
        return $this->data;
    }

}