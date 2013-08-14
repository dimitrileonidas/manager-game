<?php

namespace be\dimi\test\serviceBuilder\team\factory;

require_once BE_PATH . 'edge/serviceBuilder/core/factory/GenericFactory.class.php';
require_once PROJECT_PATH . 'serviceBuilder/team/model/team.class.php';
require_once PROJECT_PATH . 'serviceBuilder/team/dao/teamDao.class.php';

class TeamFactory extends \be\edge\serviceBuilder\core\factory\GenericFactory{
    
    private $dao;
    
    function __construct() {
        parent::__construct(new \be\dimi\test\serviceBuilder\team\model\Team());
        $this->dao = new \be\dimi\test\serviceBuilder\team\dao\TeamDao();
    }
    
    public function saveTeam($team) {
       if(empty($team->team_id)) {
           $this->dao->insertTeam($team);
       } else {
           $this->dao->updateTeam($team, $team->team_id);
       }
    }
    
    public function deleteTeamById($team_id) {
        return $this->dao->deleteTeamById($team_id);
    }
    
}

?>
