<?php

error_reporting(E_ALL); ini_set('display_errors', '1');
require_once ('A:/_dev/php/' . 'initSettings.php');

require_once (PROJECT_PATH . 'serviceBuilder/user/service/userService.php');
require_once(BE_PATH . 'edge/util/TestClass.class.php');
require_once(BE_PATH . 'edge/util/dBug.class.php');

$service	= new \be\dimi\test\serviceBuilder\user\service\UserService();
$testClass	= new \be\edge\util\TestClass($service);


$user = new stdClass();
$user->user_id = 5;
$user->first_name = 'dimitri';
$user->last_name = 'leonidas';
$user->email = 'dimi@edger.be';

var_dump($service->getUserById($user->user_id));
var_dump($service->deleteUserById($user->user_id));


$result		= $testClass->testByUrl();

if(is_string($result))
    print ($result);
else
    new \be\edge\util\dBug($result);

?>