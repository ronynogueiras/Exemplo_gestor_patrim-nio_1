<?php

$authorization['systemForcedRedirect'] = 'home/login';
$authorization['any'] = array( 'home' => array( 'index' => true, 'login' => true ) );
$authorization['user'] = array( 'home'=> array( 'index2' => true ) );
$authorization['superuser'] = array();
$authorization['admin'] = array();