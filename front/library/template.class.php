<?php
class Template {
	
	protected $variables = array();
	protected $_controller;
	protected $_action;
	
	function __construct($controller,$action) {
		$this->_controller = $controller;
		$this->_action = $action;
	}

	/** Set Variables **/

	function set($name,$value) {
		$this->variables[$name] = $value;
	}

	/** Display Template **/
	
    function render($doNotRenderHeader = 0, $template = null) {
                
                if(empty($template))
                    $template = $this->_controller . DS . $this->_action;
		
		$html = new HTML;
		extract($this->variables, EXTR_REFS|EXTR_OVERWRITE);
		
		if ($doNotRenderHeader == 0) {
			
			if (file_exists(ROOT_FRONT . DS . 'application' . DS . 'views' . DS . $this->_controller . DS . 'header.php')) {
				include (ROOT_FRONT . DS . 'application' . DS . 'views' . DS . $this->_controller . DS . 'header.php');
			} else {
				include (ROOT_FRONT . DS . 'application' . DS . 'views' . DS . 'header.php');
			}
		}
                
		if (file_exists(ROOT_FRONT . DS . 'application' . DS . 'views' . DS . $template . '.php')) {
			include (ROOT_FRONT . DS . 'application' . DS . 'views' . DS . $template . '.php');		 
		}
			
		if ($doNotRenderHeader == 0) {
			if (file_exists(ROOT_FRONT . DS . 'application' . DS . 'views' . DS . $this->_controller . DS . 'footer.php')) {
				include (ROOT_FRONT . DS . 'application' . DS . 'views' . DS . $this->_controller . DS . 'footer.php');
			} else {
				include (ROOT_FRONT . DS . 'application' . DS . 'views' . DS . 'footer.php');
			}
		}
    }

}