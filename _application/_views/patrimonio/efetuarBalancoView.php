<?php

class EfetuarBalancoView extends View 
{
	public function afterConstruct()
    {
        $this->loadTemplateComponent( 'header' );
        $this->loadTemplateComponent( 'body' );
        $this->loadTemplateComponent( 'left_menu' );
        $this->loadTemplateComponent( 'content_consulta_patrimonio' );
        $this->loadTemplateComponent( 'footer' );
    }
}