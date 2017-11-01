<?php

class UsuarioDashboard extends View 
{
	public function afterConstruct()
    {
        $this->loadTemplateComponent( 'header' );
        $this->loadTemplateComponent( 'body' );
        $this->loadTemplateComponent( 'left_menu' );
        $this->loadTemplateComponent( 'content_dashboard' );
        $this->loadTemplateComponent( 'footer' );
    }
}