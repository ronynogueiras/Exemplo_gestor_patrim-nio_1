<?php

class DespesaConsultarView extends View 
{
	public function afterConstruct()
    {
        $this->loadTemplateComponent( 'header' );
        $this->loadTemplateComponent( 'left_menu' );
        $this->loadTemplateComponent( 'body' );
        $this->loadTemplateComponent( 'content_consulta_despesa' );
        $this->loadTemplateComponent( 'footer' );
    }
}