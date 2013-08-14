<?php
namespace be\dimi\test\serviceBuilder\user\service;

require_once PROJECT_PATH . 'serviceBuilder/user/factory/userFactory.php';

class UserService{
    
    private $UserFactory;
    
    function __construct(){
        $this->UserFactory = new \be\dimi\test\serviceBuilder\user\factory\UserFactory();
    }
    
    /* Save new or existing user to database */
    public function saveUser($user){
        $this->UserFactory->saveUser($user);
    }
    
    /* Delete user by User id */
    public function deleteUserById($user_id){
        $this->UserFactory->deleteUserById($user_id);
    }
    
    /* Get user by User id */
    public function getUserById($user_id){
        return $this->UserFactory->getUserById($user_id);
    }
    
}

?>
