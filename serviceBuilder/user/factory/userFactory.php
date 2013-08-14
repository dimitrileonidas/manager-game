<?php
namespace be\dimi\test\serviceBuilder\user\factory;
use be\dimi\test\serviceBuilder\user as user;

require_once (BE_PATH . 'edge/serviceBuilder/core/factory/GenericFactory.class.php');
require_once (PROJECT_PATH . 'serviceBuilder/user/model/user.class.php');
require_once (PROJECT_PATH . 'serviceBuilder/user/dao/userDao.class.php');

class UserFactory extends \be\edge\serviceBuilder\core\factory\GenericFactory{
    
    private $dao;
    
    function __construct() {
        parent::__construct(new user\model\User());
        $this->dao = new user\dao\UserDao();
    }
    
    //function to store User
    public function saveUser($user) {
      if(empty($user->user_id)){
            $this->dao->insertUser($user);
      } else {
            $this->dao->updateUser($user, $user->user_id);  
      }
    }
    
    //function to get User
    public function getUserById($user_id) {
        return $this->toObject($this->dao->getUserByid($user_id));
    }
    
    //function to delete user
    public function deleteUserById($user_id){
       $this->dao->deleteUserByid($user_id);
    }
    
    
}
?>
