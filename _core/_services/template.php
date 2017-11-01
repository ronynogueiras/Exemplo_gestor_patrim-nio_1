<?php

class Template extends Service 
{
	
	public function css( $cssname )
	{
		echo '<link rel="stylesheet" type="text/css" href="' . FRONT . '_main/css/' . $cssname . '.css" />';
	}

	public function js( $jsname )
	{
		echo '<script type="text/javascript" src="' . FRONT . '_main/js/' . $jsname . '.js"></script>';
	}
	
	public function img( $imgname, $class = null )
	{
		if ( $class == null ) {
			echo '<img src="' . FRONT . '_main/img/' . $imgname . '"/>';
		}
		else {
			echo '<img class="' . $class . '" src="' . FRONT . '_main/img/' . $imgname . '"/>';
		}
	}
		
	public function font( $fontname )
	{
		echo '<link rel="stylesheet" type="text/css" href="' . FRONT . '_main/fonts/' . $fontname . '-font.css" />';
	}
		
	public function afterConstruct()
	{
		
	}

}