<?php

class PassivoCadastrarView extends View 
{
	public function afterConstruct()
    {
        $this->loadTemplateComponent( 'header' );
        $this->loadTemplateComponent( 'left_menu' );
        $this->loadTemplateComponent( 'body' );
        $this->loadTemplateComponent( 'content_cadastro_passivo' );
        $this->loadTemplateComponent( 'footer' );
    }
}