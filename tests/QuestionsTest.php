<?php
/**
 * FlyMuch, Inc.
 *
 * @copyright Copyright (c) 2011, FlyMuch, Inc.
 * @license http://www.flymuch.com/license.txt
 * @author A.J. Brown <aj@flymuch.com>
 */

require_once 'PHPUnit/AutoLoad.php';
require_once 'Questions.php';

class QuestionsTest extends PHPUnit_Framework_TestCase
{

    private $questions;
    
    public function setUp() {
        $this->questions = new Questions();
    }

    /**
     * @dataProvider reverseStrings
     */
    public function testReverseString( $test, $expected ) {
        $actual = $this->questions->reverseString( $test );
        $this->assertEquals( $expected, $actual, 'String was not properly reversed!' );   
    }

    public function testFindLongestWord() {
        $expected = 'proposition';
        $actual   = $this->questions->findLongestWord( Questions::GHETTYSBURG_ADDRESS );
        $this->assertEquals( $expected, $actual, 'Longest word was incorrect' );
    }

    /**
     * @dataProvider nameTemplates
     */
    public function testInsertName( $firstName, $lastName, $expected ) {
        $actual   = $this->questions->insertName( $firstName, $lastName );
        $this->assertEquals( $expected, $actual, 'Name wasn\'t replaced correctly.' );
    }

    public function reverseStrings() {
        return array( 
            array( 'abcd12345',  '54321dcba' ),
            array( 'Reverse This String!', '!gnirtS sihT esreveR' ),
            array( 'ab12^&02_+$$', '$$+_20&^21ba'),
            array( '     ', '     ' ),
            array( '1234567890', '0987654321' ),
            array( 'a', 'a' )
        );
    }

    public function nameTemplates() {

        return array(
            array( 'A.J.', 'Brown', 'Dear A.J. Brown,  You\'re an awesome coder for someone named A.J..'),
            array( 'Xavier', 'Max', 'Dear Xavier Max,  You\'re an awesome coder for someone named Xavier.'),
            array( 'Bruce', 'De Paul', 'Dear Bruce De Paul,  You\'re an awesome coder for someone named Bruce.')
        );
    }
}
