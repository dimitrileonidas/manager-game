<?php
namespace be\dimi\test\serviceBuilder\user\model;

require_once (BE_PATH . 'edge/serviceBuilder/core/model/BaseModel.class.php');

class User extends \be\edge\serviceBuilder\core\model\BaseModel{

    public $user_id;
    public $first_name;
    public $last_name;
    public $email;
    public $password;

    public function __construct() {
        parent::__construct();
        $this->meta->propertyTypes = array('user_id'     => 'int',
                                           'first_name'           => 'string',
                                           'last_name'            => 'string',
                                           'email'    => 'string',
                                           'password'   =>'int');
    }
}

?>