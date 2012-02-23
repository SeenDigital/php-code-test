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

    /**
     *  BONUS QUESTION
     *
     *  Write a function that accepts a query string as input, performs a repo search
     *  on the github api using the query string, and prints the name, url, and
     *  language of the repository.
     *
     *
     *  TIPS:
     *
     *  GitHub API info is located at  http://develop.github.com/p/repo.html
     *  Use the search endpoint: https://github.com/api/v2/json/repos/search/<search_term>
     *  
     *
     *  EXAMPLE OUTPUT:
     *
     *  testrocket
     *  https://github.com/peterc/testrocket
     *  Ruby
     *
     *  sublime-text-2-ruby-tests
     *  https://github.com/maltize/sublime-text-2-ruby-tests
     *  Python
     *
     *  ruby-plsql
     *  https://github.com/rsim/ruby-plsql
     *  Ruby
     *
     *  --
     *
     */
    public function listGithubSearchResults( $query ) {

    }


    const GHETTYSBURG_ADDRESS = 'Four score and seven years ago our fathers
        brought forth on this continent, a new nation, conceived in Liberty, and
        dedicated to the proposition that all men are created equal.';

    const LETTER = 'Dear X X,  You\'re an awesome coder for someone named X.';

}
