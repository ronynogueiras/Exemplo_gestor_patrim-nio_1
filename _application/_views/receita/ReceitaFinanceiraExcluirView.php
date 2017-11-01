<?php

class ReceitaFinanceiraExcluirView extends View 
{
	public function afterConstruct()
    {
        $this->loadTemplateComponent( 'header' );
        $this->loadTemplateComponent( 'left_menu' );
        $this->loadTemplateComponent( 'body' );
        $this->loadTemplateComponent( 'content_excluir_receita' );
        $this->loadTemplateComponent( 'footer' );
    }
}