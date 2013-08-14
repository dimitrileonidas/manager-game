<?php
namespace be\dimi\test\serviceBuilder\team\service;

require_once PROJECT_PATH . 'serviceBuilder/team/factory/teamFactory.php';

class TeamService{
    
    private $TeamFactory;
    
    function __construct(){
        $this->TeamFactory = new \be\dimi\test\serviceBuilder\team\factory\TeamFactory();
    }
    
    public function saveTeam($team){
        $this->TeamFactory->saveTeam($team);
    }
    
    public function deleteTeamById($team_id){
        return $this->TeamFactory->deleteTeamById($team_id);
    }
    
    public function getTeamByUid($uid) {
        return $this->TeamFactory->getTeamByUid($uid);
    }
    
}

?>