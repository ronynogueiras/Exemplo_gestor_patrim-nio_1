<?php

class FluxoDeCaixaEditarView extends View 
{
	public function afterConstruct()
    {
        $this->loadTemplateComponent( 'header' );
        $this->loadTemplateComponent( 'left_menu' );
        $this->loadTemplateComponent( 'body' );
        $this->loadTemplateComponent( 'content_edita_ativo' );
        $this->loadTemplateComponent( 'footer' );
    }
}