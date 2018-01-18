<?php
/**
 * Unit tests for the MyClass.php source file.
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
use PHPUnit\Framework\TestCase;
require_once realpath('.' . '/src/MyClass.php');

/**
 * Get full test coverage - but allow for mutation.  This is an example why 
 * just using 100% coverage as a metric of code quality isn't a great idea, 
 * and how mutation testing allows greater confidence in the quality of the 
 * code and the tests.
 *
 * @category Testing
 * @package  Infection
 * @author   Mike Hingley <mike.hingley@apc-overnight.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.en.html  GPL
 * @link     https://github.com/computamike/Infection
 */
class MyClassTest extends TestCase
{
    /**
     * Test that a test actually runs.
     * 
     * @return null
     */
    public function testCanBeUsedAsString()
    {
        $this->assertEquals(true, true);
    }
    
    /**
     * Test that a Unit can be created and tested.
     * 
     * @return null
     */
    public function testDoStuff()
    {
        //Arrange
        $system_under_test = new MyClass();
        //Act 
        $result = $system_under_test->doStuff(1, 2);
        //Assert 
        $this->assertNotNull($result);
    }
    
}
