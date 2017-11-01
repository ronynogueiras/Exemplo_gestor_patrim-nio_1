<?php

class UsuarioExcluirConta extends View 
{
	public function afterConstruct()
    {
        $this->loadTemplateComponent( 'header' );
        $this->loadTemplateComponent( 'body' );
        $this->loadTemplateComponent( 'left_menu' );
        $this->loadTemplateComponent( 'content_excluir_usuario_conta' );
        $this->loadTemplateComponent( 'footer' );
    }
}