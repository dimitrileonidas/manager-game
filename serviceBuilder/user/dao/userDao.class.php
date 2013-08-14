<?php
namespace be\dimi\test\serviceBuilder\user\dao;

require_once (BE_PATH . 'edge/serviceBuilder/core/dao/GenericDAO.class.php');

class UserDao extends \be\edge\serviceBuilder\core\dao\GenericDAO {
    
        public function __construct() {
            global $pdo;
            parent::init('user', $pdo);
        }
        
        
        public function insertUser($user){
            return parent::insertRecord($user);
        }
        
        public function updateUser($user, $user_id){
            return parent::updateRecordById($user, $user_id);
        }
        
        public function getUserById($user_id){
            return parent::getById($user_id);
        }
        
        public function deleteUserById($user_id) {
            return parent::deleteById($user_id);
        }
}


?>