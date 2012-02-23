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
    . APPROOT . '/phpunit'
    . APPROOT . '/phpunit/PHPUnit'
);
require_once 'PHPUnit/AutoLoad.php';
