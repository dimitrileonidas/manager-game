<?php
namespace be\dimi\test\serviceBuilder\team\dao;

require_once (BE_PATH . 'edge/serviceBuilder/core/dao/GenericDAO.class.php');

class TeamDao extends \be\edge\serviceBuilder\core\dao\GenericDAO {
    
        public function __construct() {
            global $pdo;
            parent::init('team', $pdo);
        }
        
        
        public function insertTeam($team) {
            return parent::insertRecord($team);
        }
        
        public function updateTeam($team, $team_id) {
            return parent::updateRecordById($team, $team_id);
        }
        
        public function deleteTeamById($team_id) {
            return parent::deleteById($team_id);
        }
}


?>