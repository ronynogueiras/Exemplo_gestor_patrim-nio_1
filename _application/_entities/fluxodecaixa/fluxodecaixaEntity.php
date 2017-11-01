<?php 

class FluxoDeCaixaEntity extends Entity
{
    private $id;
    private $ano;
    private $mes;
    private $status;
    private $desempenho;
    private $usuarioId;
    private $total;

    function __construct( $id, $ano, $mes, $status, $desempenho, $usuarioId, $total )
    {
        $this->setId( $id );
        $this->setAno( $ano );
        $this->setMes( $mes );
        $this->setStatus( $status );
        $this->setDesempenho( $desempenho );
        $this->setUsuarioId( $usuarioId );
        $this->setTotal( $total );
    }

    public function setId( $valor )
    {
        $this->id = $valor;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setAno( $valor )
    {
        $this->ano = $valor;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function setMes( $valor )
    {
        $this->mes = $valor;
    }

    public function getMes()
    {
        return $this->mes;
    }

    public function setSatus( $valor )
    {
        $this->status = $valor;
    }

    public function getSatus()
    {
        return $this->status;
    }


    public function setDesempenho( $valor )
    {
        $this->desepenho = $valor;
    }

    public function getDesempenho()
    {
        return $this->desempenho;
    }

    public function setUsuarioId( $valor )
    {
        $this->usuarioId = $valor;
    }

    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    public function setTotal( $valor )
    {
        $this->total = $valor;
    }

    public function geTotal()
    {
        return $this->total;
    }

}