<?php
	define ('BE_PATH','A:\_dev\php/be/');
	define ('PROJECT_PATH',BE_PATH . 'dimi/test/');
	define('IMAGE_FOLDER', PROJECT_PATH . 'front/public/images/');
	define('TMP_FOLDER', PROJECT_PATH . 'front/public/tmp/');
    
	global $pdo;
	try {
		$pdo = new \PDO ('mysql:dbname=dimi-test;host=localhost;charset=UTF8', 'root', '',
						 array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
	}catch (PDOException $e) {
		echo "PDO initialization failed: " . $e->getMessage() . "\n";
	}
	
	date_default_timezone_set('Europe/Brussels');
?>