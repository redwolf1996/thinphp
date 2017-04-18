<?php
/**
 * thin is less, less is more
 *
 * @author syx9527@gmail.com
 * @since 2017-04-18
 * @version 1.0.0
 */

use \core\routes;

define('BASEPATH', realpath('./'));
define('CORE', BASEPATH.'/core/');

define('DEBUG', true);
if(DEBUG){
    ini_set('display_errors', 'On');
}else{
    ini_set('display_errors', 'Off');
}

require CORE.'init.php';
require CORE.'tool.php';


spl_autoload_register('\core\init::autoload');
new routes();
