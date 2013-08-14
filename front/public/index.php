<?php	
define('DS', DIRECTORY_SEPARATOR);
define('ROOT_FRONT', dirname(dirname(__FILE__)));

require_once ($_SERVER['DOCUMENT_ROOT'] . '/initSettings.php');
session_start();
//check if url is set 
$url = isset($_GET['url']) ? $_GET['url'] : NULL;   

require_once (ROOT_FRONT . DS . 'library' . DS . 'bootstrap.php');