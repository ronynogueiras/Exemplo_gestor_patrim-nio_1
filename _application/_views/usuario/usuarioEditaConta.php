<?php

class UsuarioEditaConta extends View 
{
	public function afterConstruct()
    {
        $this->loadTemplateComponent( 'header' );
        $this->loadTemplateComponent( 'body' );
        $this->loadTemplateComponent( 'left_menu' );
        $this->loadTemplateComponent( 'content_edita_conta_usuario' );
        $this->loadTemplateComponent( 'footer' );
    }
}