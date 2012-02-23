<?php
/**
 * FlyMuch, Inc.
 *
 * @copyright Copyright (c) 2011, FlyMuch, Inc.
 * @license http://www.flymuch.com/license.txt
 * @author A.J. Brown <aj@flymuch.com>
 */

class Questions
{

    /**
     * Write a function which takes any string as input, and returns it's
     * reverse.
     *
     * For example, 
     *
     */
    public function reverseString( $string ) {

    }


    /**
     * Write a function which returns the longest word in the first paragraph of
     * the Ghettysburg Address (provided in Questions::GHETTYSBURG_ADDRESS
     * below.
     */
    public function findLongestWord() {

    }

    /**
     * Write a function that inserts a first and last name into a template and
     * returns the result.  Use the Questions::LETTER constant as the template,
     * replacing the X's with the first and last name.  X #1 should be the first
     * name, X #2 the last name, and X #3 the first name again.
     *
     * You must use the Questions::LETTER constant as the template
     * programmatically.  Do not use string litterals in your code to rebuild
     * the string. For example, do not simply do this:
     * 
     * return "Dear {$firstName} {$lastName}," ...
     *
     * You may, however, copy the value of Questions::LETTER into
     * your own variable.
     *
     * Example:  insertName( 'A.J.', 'Brown' ) should return "Dear A.J. Brown,
     * You\'re an awesome coder for someone named A.J."
     *
     */
    public function insertName( $firstName, $lastName ) {

    }


    const GHETTYSBURG_ADDRESS = 'Four score and seven years ago our fathers
        brought forth on this continent, a new nation, conceived in Liberty, and
        dedicated to the proposition that all men are created equal.';

    const LETTER = 'Dear X X,  You\'re an awesome coder for someone named X.';

}
