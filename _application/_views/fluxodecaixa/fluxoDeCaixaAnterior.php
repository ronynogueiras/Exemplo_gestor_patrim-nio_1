<?php

class FluxoDeCaixaAnterior extends View 
{
	public function afterConstruct()
    {
        $this->loadTemplateComponent( 'header' );
        $this->loadTemplateComponent( 'body' );
        $this->loadTemplateComponent( 'left_menu' );
        $this->loadTemplateComponent( 'content_consulta_fluxodecaixa_anterior' );
        $this->loadTemplateComponent( 'footer' );
    }
}