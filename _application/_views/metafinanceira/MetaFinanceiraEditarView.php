<?php

class MetaFinanceiraEditarView extends View 
{
	public function afterConstruct()
    {
        $this->loadTemplateComponent( 'header' );
        $this->loadTemplateComponent( 'left_menu' );
        $this->loadTemplateComponent( 'body' );
        $this->loadTemplateComponent( 'content_editar_meta_financeira' );
        $this->loadTemplateComponent( 'footer' );
    }
}