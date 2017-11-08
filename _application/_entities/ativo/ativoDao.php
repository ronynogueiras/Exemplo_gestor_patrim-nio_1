<?php

class AtivoDao extends Dao
{
  public function afterConstruct()
  {
    $this->setDbTable( 'ativo' );
    $this->mysqlService->connect();
  }

  public function todos()
  {
    return $this->find();
  }
}
