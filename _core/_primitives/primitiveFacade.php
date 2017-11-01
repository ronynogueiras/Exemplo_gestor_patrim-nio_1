<?php

class Facade 
{
	private $facadeName;
	private $entitiesArray;
	private $daoArray;
	private $App;
	
	private function __construct( $facadeName, &$parentApp )
	{
		$this->facadeName = $facadeName;
		$this->App = &$parentApp;

		$this->afterConstruct();
	}

	public static function create( $facadeName, $parentApp ) 
	{
		return new static( $facadeName, $parentApp );
	}

	public function loadDependeces( array $dependeces = null  )
	{
		if ( sizeof( $dependeces[ 'entities' ] ) > 0 ) {
			$this->entitiesArray = $dependeces[ 'entities' ];
		}

		if ( sizeof( $dependeces[ 'daos' ] ) > 0 ) {
			$this->daoArray = $dependeces[ 'daos' ];
		}
		
		for ( $i = 0; $i < sizeOf( $this->entitiesArray ); $i++) {
			$this->loadEntity( $this->entitiesArray[$i] );
		}
		
		for ( $i = 0; $i < sizeOf( $this->daoArray ); $i++) {
			$this->loadDao( $this->daoArray[$i] );
		}
	}

	private function loadEntity( $entityName ) 
	{
		$entityClassName = ucfirst( $entityName );
		$fileForInclusion = ENTITIES . '/' . $entityName . '/' . $entityName . 'Entity.php';

		if ( file_exists( $fileForInclusion ) ) {
			require_once( $fileForInclusion );
			$this->{$entityName.'Entity'} = $entityClassName::create( $entityName . 'Entity' );	
		}
		else {
			$this->App->exceptionsService->raise( 'entityNotFound' );
		}
	}
	
	private function loadDao( $entityName ) 
	{
		$entityClassName = ucfirst( $entityName );
		$fileForInclusion = ENTITIES . '/' . $entityName . '/' . $entityName . 'Dao.php';

		if ( file_exists( $fileForInclusion ) ) {
			require_once( $fileForInclusion );
			$this->{$entityName.'Dao'} = $entityClassName::create( $entityName . 'Dao', $this->App );
		}
		else {
			$this->App->exceptionsService->raise( 'daoNotFound' );
		}
	}
	
	public function afterConstruct( )
	{

	}
	
	public function afterDestruct()
	{
		
	}
	
}