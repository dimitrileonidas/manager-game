<?php
namespace be\dimi\test\serviceBuilder\team\model;

require_once (BE_PATH . 'edge/serviceBuilder/core/model/BaseModel.class.php');

class Team extends \be\edge\serviceBuilder\core\model\BaseModel{

    public $team_id;
    public $name;
    public $FK_user_id;

    public function __construct() {
        parent::__construct();
        $this->meta->propertyTypes = array('team_id'     => 'int',
                                           'name'           => 'string',
                                           'FK_user_id'   => 'int');
    }
}

?>