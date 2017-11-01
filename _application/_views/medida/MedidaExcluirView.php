<?php

class MedidaExcluirView extends View 
{
	public function afterConstruct()
    {
        $this->loadTemplateComponent( 'header' );
        $this->loadTemplateComponent( 'left_menu' );
        $this->loadTemplateComponent( 'body' );
        $this->loadTemplateComponent( 'content_excluir_medida' );
        $this->loadTemplateComponent( 'footer' );
    }
}