<?php

class View 
{	
	private $name;
	private $data;	
	private $contents;
	private $App;
	
	private function __construct( $viewName, &$parentApp, $data = null )
	{
		$this->name = $viewName;
		$this->data = $data;
		$this->App = &$parentApp;
		$this->afterConstruct();
	}
	
	public function __destruct() 
	{	
		$this->afterDestruct();
	}

	public static function create( $viewName, $appReference, $data = null)
	{
		return new static( $viewName, $appReference, $data );
	}
	
	public function loadTemplateComponent( $templateSection ) 
	{
		global $config;
		$data = $this->data;
		if ( $config['template'] != false ) {
			$fileForInclusion = VIEWS . '_templates/' . $templateSection . '.php' ;
			if ( file_exists( $fileForInclusion ) )	{
				require( $fileForInclusion );
			} else 	{
				$this->App->exceptionsService->raise( 'templateComponentNotFound' );
			}
		} else 	{
				$this->App->exceptionsService->raise( 'templateComponentInvalid' );
		}
	}

	public function loadCss( $cssname )
	{
		global $config;
		echo '<link rel="stylesheet" type="text/css" href="' . FRONT . $config['template'] . '/css/' . $cssname . '.css" />';
	}

	public function loadJs( $jsname )
	{
		global $config;
		echo '<script type="text/javascript" src="' . FRONT . $config['template'] . '/js/' . $jsname . '.js"></script>';
	}
	
	public function loadImg( $imgname, $class = null, $style = null )
	{
		global $config;
		$instyle = $style;
		
		if ( $class == null ) {
			echo '<img src="' . FRONT . $config['template'] . '/img/' . $imgname . '" style="' . $instyle . '"/>';
		}
		else {
			echo '<img class="' . $class . '" src="' . FRONT . $config['template'] . '/img/' . $imgname . '" style="' . $instyle . '" />';
		}
	}
		
	public function loadFont( $fontname )
	{
		global $config;
		echo '<link rel="stylesheet" type="text/css" href="' . FRONT . $config['template'] . '/fonts/' . $fontname . '-font.css" />';
	}

	public function loadWidget( $widgetName )
	{
		global $config;
		include( WIDGETS . '/' . $widgetName . '.wid' );
	}

	public function afterConstruct()
	{
		
	}
	
	public function afterDestruct()
	{
		
	}
	
	public function render()
	{
	
	}

}