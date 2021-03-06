<?php
/**
 * EzTotp: Two-factor authentication with Google Authenticator for eZPublish
 *
 * @package EzTotp
 * @version 0.3
 * @author Frank Neff <frankneff.ch>
 * @license LGPL v3 - http://www.gnu.org/licenses/lgpl-3.0.en.html
 */

/**
 * Test class for EzTotpUserOperator.
 * Generated by PHPUnit on 2012-04-06 at 23:06:30.
 */
class EzTotpUserOperatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var EzTotpUserOperator
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new EzTotpUserOperator;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers EzTotpUserOperator::operatorList
     */
    public function testOperatorList()
    {
        $operatorList = $this->object->operatorList();
        $this->assertTrue(is_array($operatorList));
        $this->assertTrue($operatorList[0] == "eztotp_user_state");
        $this->assertTrue($operatorList[1] == "eztotp_user_groups");
    }

    /**
     * @covers EzTotpUserOperator::namedParameterPerOperator
     */
    public function testNamedParameterPerOperator()
    {
        $this->assertTrue(is_bool($this->object->namedParameterPerOperator()));
    }

    /**
     * @covers EzTotpUserOperator::namedParameterList
     */
    public function testNamedParameterList()
    {
        $this->assertTrue(is_array($this->object->namedParameterList()));
    }

    /**
     * @covers EzTotpUserOperator::modify
     * @covers EzTotpUserOperator::getUserState
     */
    public function testModify()
    {
        $value = array(0, 1, 2, 99);

        $this->object->modify(null, "eztotp_user_state", null, null, null, $value[0], null);
        $this->assertSame($value[0], "<span class=\"label label-warning\">inactive</span>");

        $this->object->modify(null, "eztotp_user_state", null, null, null, $value[1], null);
        $this->assertSame($value[1], '<span class="label label-success">active</span>');

        $this->object->modify(null, "eztotp_user_state", null, null, null, $value[2], null);
        $this->assertSame($value[2], '<span class="label label-important">blocked</span>');

        $this->object->modify(null, "eztotp_user_state", null, null, null, $value[3], null);
        $this->assertSame($value[3], '<span class="label label-warning">no state</span>');

        try{
            $this->object->modify(null, "", null, null, null, $value[0], null);
            $result = false;
        }
        catch(Exception $e)
        {
            $result = true;
        }

    }
}

?>
