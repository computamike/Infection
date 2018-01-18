<?php
/**
 * Example class to test using Mutation testing.
 *
 * PHP version 5
 * 
 * @category Testing_Proof_Of_Concept
 * @package  Infection_Test_Class
 * @author   Mike Hingley <mike.hingley@apc-overnight.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.en.html  GPL
 * @version  GIT: <git_id>
 * @link     https://github.com/computamike/Infection
 */
 
 /**
  * [MyClass description]
  *
  * @category Testing
  * @package  Infection
  * @author   Mike Hingley <mike.hingley@apc-overnight.com>
  * @license  https://www.gnu.org/licenses/gpl-3.0.en.html  GPL
  * @link     https://github.com/computamike/Infection
  */
class MyClass
{
    /**
     * Perform a simple process.
     * 
     * @param [type] $a [description]
     * @param [type] $b [description]
     * 
     * @return string combining the addition and concatenation of the parameters.
     */
    public function doStuff($a, $b)
    {
        return strval($a + $b) . strval($a) . strval($b);
    }

}
