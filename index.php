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

require 'core/tool.php';
require 'core/thin.php';

config('debug') === true ? error_reporting(E_ALL) : error_reporting(0);

spl_autoload_register('\core\thin::autoload');

thin::run();
