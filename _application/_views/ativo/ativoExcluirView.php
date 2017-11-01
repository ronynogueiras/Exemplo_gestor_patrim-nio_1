<?php

class AtivoExcluirView extends View 
{
	public function afterConstruct()
    {
        $this->loadTemplateComponent( 'header' );
        $this->loadTemplateComponent( 'left_menu' );
        $this->loadTemplateComponent( 'body' );
        $this->loadTemplateComponent( 'content_excluir_ativo' );
        $this->loadTemplateComponent( 'footer' );
    }
}