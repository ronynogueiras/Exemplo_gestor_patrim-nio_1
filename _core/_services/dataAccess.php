<?php

class DataAccess extends Service
{

	private $table;
	private $order = 'ASC';
	private $lastInsert;

	public function afterConstruct()
	{
		$this->loadService( 'mysql' );
	}

	public function setDbTable( $table )
	{
  		$this->table = $table;
	}

	public function getDbTable( $table )
	{
  		return $this->table;
	}

}