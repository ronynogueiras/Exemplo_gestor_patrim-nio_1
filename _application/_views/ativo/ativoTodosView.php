<?php

class AtivoTodosView extends View
{
	public function afterConstruct()
    {
        $this->loadTemplateComponent( 'header' );
        $this->loadTemplateComponent( 'left_menu' );
        $this->loadTemplateComponent( 'body' );
        $this->loadTemplateComponent( 'content_todos_ativo' );
        $this->loadTemplateComponent( 'footer' );
    }
}
