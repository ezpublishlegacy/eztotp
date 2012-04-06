<?php

/**
 * Test class for EzTotpAuthentication.
 * Generated by PHPUnit on 2012-04-05 at 13:21:00.
 */
class EzTotpAuthenticationTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var EzTotpAuthentication
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $config = new EzTotpConfiguration();
        $config->loadConfiguration();
        $this->object = new EzTotpAuthentication($config);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers EzTotpAuthentication::setInitialisationSeed
     * @todo Implement testSetInitialisationSeed().
     *
    public function testSetInitialisationSeed()
    {
        $this->object->setInitialisationSeed("SHNDJGTHNOTHGNDGETOGADRHGOPTHB");
        $key = $this->object->getKey();
        $this->assertFalse(empty($key));
    }*/

    /**
     * @covers EzTotpAuthentication::getKey
     * @todo Implement testGetKey().
     */
    public function testGetKey()
    {
        // Remove the following lines when you implement this test.

    }

    /**
     * @covers EzTotpAuthentication::verify
     * @todo Implement testVerify().
     */
    public function testVerify()
    {

    }
}
?>
