<?php

error_reporting(E_ALL); ini_set('display_errors', '1');
require_once ('A:/_dev/php/' . 'initSettings.php');

require_once (PROJECT_PATH . 'serviceBuilder/team/service/teamService.php');
require_once(BE_PATH . 'edge/util/TestClass.class.php');
require_once(BE_PATH . 'edge/util/dBug.class.php');

$service	= new \be\dimi\test\serviceBuilder\team\service\TeamService();
$testClass	= new \be\edge\util\TestClass($service);


$team = new stdClass();
$team->team_id = 6;
$team->name = 'sjotterke';

var_dump($service->saveTeam($team));
$service->deleteTeamById($team->team_id);


$result		= $testClass->testByUrl();

if(is_string($result))
    print ($result);
else
    new \be\edge\util\dBug($result);

?>