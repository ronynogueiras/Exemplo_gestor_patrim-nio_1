<?php

class MedidaConsultarView extends View 
{
	public function afterConstruct()
    {
        $this->loadTemplateComponent( 'header' );
        $this->loadTemplateComponent( 'left_menu' );
        $this->loadTemplateComponent( 'body' );
        $this->loadTemplateComponent( 'content_consulta_medida' );
        $this->loadTemplateComponent( 'footer' );
    }
}