<?php
/**
 * FlyMuch, Inc.
 *
 * @copyright Copyright (c) 2011, FlyMuch, Inc.
 * @license http://www.flymuch.com/license.txt
 * @author A.J. Brown <aj@flymuch.com>
 */

define( 'APPROOT', dirname( dirname(__FILE__) ) );

set_include_path( 
    '.' . PATH_SEPARATOR 
    . APPROOT . PATH_SEPARATOR
    . APPROOT . '/tests' . PATH_SEPARATOR
    . get_include_path()
);
require_once 'PHPUnit/Autoload.php';
