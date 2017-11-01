<?php

class Controller 
{
	private $name;
	private $jsCode;
	private $App;
	
	private function __construct( $controllerName, &$parentApp )
	{
		global $autoload;
		global $config;
		
		$this->name = $controllerName;
		$this->App = &$parentApp;
		
		// load default services
		for ( $i = 0; $i < sizeOf( $autoload['services'] ); $i++) {
			$this->loadService( $autoload['services'][$i] );
		}
		
		// load default models
		for ( $i = 0; $i < sizeOf( $autoload['models'] ); $i++) {
			$this->loadModel( $autoload['models'][$i], $this->App );
		}

		if ( $config['template'] != false ) {	
			define( 'TEMPLATE', TEMPLATES . $config['template'] . '/templates/' );
		}
		
		$this->afterConstruct();
	}
	
	public function __destruct()
	{
		global $config;
	
		$this->afterDestruct();
	}

	public static function create( $controllerName, $parentApp ) 
	{
		return new static( $controllerName, $parentApp );
	}

	public function loadDependeces( array $dependeces  )
	{
		if ( sizeof( $dependeces[ 'models' ] ) > 0 ) {
			for ( $i = 0; $i < sizeOf( $dependeces[ 'models' ] ); $i++) {
				$this->loadModel( $dependeces[ 'models' ][$i] );
			}
		}

		if ( sizeof( $dependeces[ 'facades' ] ) > 0 ) {
			for ( $i = 0; $i < sizeOf( $dependeces[ 'facades' ] ); $i++) {
				$this->loadFacade( $dependeces[ 'facades' ][$i] );
			}
		}

		if ( sizeof( $dependeces[ 'services' ] ) > 0 ) {
			for ( $i = 0; $i < sizeOf( $dependeces[ 'services' ] ); $i++) {
				$this->loadService( $dependeces[ 'services' ][$i] );
			}
		}
	}
	
	public function greet()
	{
		echo "Controller <b>" . $this->name . "</b> invocado <br/>";
	}
	
	public function loadView( $viewName, $data = null ) 
	{
		$viewClassName = ucfirst( $viewName );
		$fileForInclusion =  VIEWS . $this->name . '/' . $viewName . '.php' ;

		if ( file_exists( $fileForInclusion ) ) {
			include_once( $fileForInclusion );
			return $viewClassName::create( $viewName, $this->App, $data );
		}
		else {
			$this->App->exceptionsService->raise( 'viewNotFound' );
		}

	}
	
	private function loadModel( $modelName )
	{
		$modelClassName = ucfirst( $modelName );
	
		$fileForInclusion = MODELS . '' . $modelName . '.php' ;
		if ( file_exists( $fileForInclusion ) ) {
			include_once( $fileForInclusion );
			$this->{$modelName.'Model'} = $modelClassName::create( $modelName , $this->App );
		}
		else {
			$this->App->exceptionsService->raise( 'modelNotFound' );
		}
	}

	public function loadFacade( $facadeName, array $dependeces = null ) 
	{
		$facadeClassName = ucfirst( $facadeName );
		$fileForInclusion = ENTITIES . '/' . $facadeName . 'Facade.php';

		if ( file_exists( $fileForInclusion ) ) {
			include_once( $fileForInclusion );
			$this->{$facadeName.'Facade'} = $facadeClassName::create( $facadeName.'Facade', $this->App );
			$this->{$facadeName.'Facade'}->loadDependeces( $dependeces );
		}
		else {
			$this->App->exceptionsService->raise( 'facadeNotFound' );
		}
	}
	
	public function loadService( $serviceName )
	{
		$serviceClassName = ucfirst( $serviceName );
		$fileForInclusion = SERVICES . '' . $serviceName . '.php';
		
		if ( file_exists( $fileForInclusion ) ) {
			include_once( $fileForInclusion );
			$this->{$serviceName.'Service'} = $serviceClassName::create( $serviceName, $this->App );
		}
		else {
			$this->App->exceptionsService->raise( 'serviceNotFound' );
		}
		
	}
	
	public function stackJavaScript( $javaScriptCode ) 
	{
		$this->jsCode = $this->jsCode.$javaScriptCode;
	}
	
	public function dumpJavaScript()
	{
		echo $this->jsCode;
	}

	protected function afterConstruct(  )
	{
		
	}
	
	protected function afterDestruct()
	{
		
	}

	protected function getAppName()
	{
		return $this->App->getName();
	}

	protected function redirect( $local = null )
	{
		if ( $local !== null ) {
			header( "Location:" . DOMAIN . $local );
		}
		else {
			header( "Location:" . DOMAIN );
		}
	}	
}