<?php
/**
 * thin is less, less is more
 *
 * @author syx9527@gmail.com
 * @since 2017-04-18
 * @version 1.0.0
 */

use \core\thin;

define('BASEPATH', realpath('./'));
ini_set('display_errors', 'On');

require BASEPATH.'/core/tool.php';
require BASEPATH.'/core/thin.php';

spl_autoload_register('\core\thin::autoload');

thin::run();
