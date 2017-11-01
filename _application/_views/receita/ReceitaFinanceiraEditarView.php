<?php

class ReceitaFinanceiraEditarView extends View 
{
	public function afterConstruct()
    {
        $this->loadTemplateComponent( 'header' );
        $this->loadTemplateComponent( 'left_menu' );
        $this->loadTemplateComponent( 'body' );
        $this->loadTemplateComponent( 'content_edita_receita' );
        $this->loadTemplateComponent( 'footer' );
    }
}