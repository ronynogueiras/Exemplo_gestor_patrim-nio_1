<?php

class DespesaExcluirView extends View 
{
	public function afterConstruct()
    {
        $this->loadTemplateComponent( 'header' );
        $this->loadTemplateComponent( 'left_menu' );
        $this->loadTemplateComponent( 'body' );
        $this->loadTemplateComponent( 'content_excluir_despesa' );
        $this->loadTemplateComponent( 'footer' );
    }
}