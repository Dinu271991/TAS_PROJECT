<?php
/**
@author vetripandi
@copyright http:www.vetbossel.in
 */

require_once 'messages.php';

//site specific configuration declartion
define( 'BASE_PATH', 'http://localhost/php-quiz/');
define( 'DB_HOST', 'localhost' );
define( 'DB_USERNAME', 'root');
define( 'DB_PASSWORD', '');
define( 'DB_NAME', 'login');

function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}
