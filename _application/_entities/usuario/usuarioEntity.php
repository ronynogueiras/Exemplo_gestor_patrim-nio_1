<?php 

class UsuarioEntity extends Entity
{

    private $id;
    private $nome;
    private $descricao;
    private $valorEstimado;
    private $usuarioId;

    function __construct( $id, $nome, $descricao, $valorEstimado, $usuarioId )
    {
        $this->setId( $id );
        $this->setNome( $nome );
        $this->setDescricao( $descricao );
        $this->setValorEstimado( $valorEstimado );
        $this->setUsuarioId( $usuarioId );
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

    public function setUsuarioId( $valor )
    {
        $this->usuarioId = $valor;
    }

    public function getUsuarioId()
    {
        return $this->usuarioId;
    }
}