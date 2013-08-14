<?php

namespace core;

require_once 'lib/rb.php';

class Factory{
    
    protected $R;
    
    function __construct() {
        $this->R = new \R;
        $this->R->setup('mysql:host=localhost;dbname=dimi-test','root','');
    }
    
    protected function convertToBean($object, $bean){
        foreach($object as $property => $value) {
            $bean->$property = $value;
        }
        return $bean;
    }
    
    protected function convertToObject($bean, $object = null) {
        
        if(!$object) $object = new \stdClass ();
        
        foreach($bean as $property => $value){
            $object->$property = $value;
        }
        
        return $object;
    }
    
}
?>
