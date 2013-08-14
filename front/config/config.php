<?php

/** Configuration Variables **/

define ('DEVELOPMENT_ENVIRONMENT',true);

//database connection 
define('DB_NAME', 'framework');
define('DB_USER', 'ROOT_FRONT');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');


define('BASE_PATH',         'http://permissionmachine.fr/dev/php/be/edge/project/permission-machine/front/');
define('BASE_PATH_SPONSOR', BASE_PATH . 'public/img/sponsor/');
define('TMP_PATH',          BASE_PATH . 'public/tmp/'); // temp. folder for image uploads etc.
define('IMAGE_PATH',        BASE_PATH . 'public/images/transactions/');

define('PAGINATE_LIMIT', '5');

function siteErrorHandler($errno, $errstr, $errfile, $errline)
{
    
    if (!(error_reporting() & $errno)) {
        // This error code is not included in error_reporting
        return;
    }

    $title = '';
    
    switch ($errno) {
    case E_USER_ERROR:
        $type = "error";
        $title = "Fatal error on line $errline in file $errfile";
        mailError($type, $title, $errstr);
        echo "A fatal error has occurred. The developers have been notified...<br />\n";
        exit(1);
        break;

    case E_USER_WARNING:
    case E_WARNING:
        $type = "warning";
        $title = "Warning on line $errline in file $errfile";
        break;

    case E_USER_NOTICE:
    case E_NOTICE:
        $type = "notice";
        $title = "Notice on line $errline in file $errfile";
        break;

    default:
        $type = "unknown type";
        $title = "Error of type $errno on line $errline in file $errfile";
        break;
    }
    
    @mailError($type, $title, $errstr, array());

    /* Don't execute PHP internal error handler */
    return true;
}

function mailError($type, $title, $message = null, $stacktrace = array()){
    include_once(ROOT_FRONT . DS . 'application' . DS . 'includes' . DS . 'helpers'. DS . 'SwiftMailerHelper.php');
    $swiftMailHelper = new SwiftMailerHelper();
    $recipients = array('jan@edge.be');
    
    $cgi = array();
    $cgi['page'] = (isset($_GET['url'])) ? BASE_PATH . $_GET['url'] : 'unknown';
    $cgi['ip address'] = $_SERVER['REMOTE_ADDR'];
    
    $swiftMailHelper->sendMailNotice($recipients, $type, $title, $message, $stacktrace, $cgi);
}

//if(!DEVELOPMENT_ENVIRONMENT)
set_error_handler("siteErrorHandler");