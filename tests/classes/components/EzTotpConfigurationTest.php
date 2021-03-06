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
 * Test class for EzTotpConfiguration.
 * Generated by PHPUnit on 2012-04-03 at 19:48:42.
 */
class EzTotpConfigurationTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var EzTotpConfiguration
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new EzTotpConfiguration;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }


    public function testConstants()
    {
        $staticClassName = get_class($this->object);
        $this->assertTrue(is_int($staticClassName::USER_STATE_OTP));
        $this->assertTrue(is_int($staticClassName::USER_STATE_NOOTP));
        $this->assertTrue(is_int($staticClassName::USER_STATE_BLOCKED));
    }

    /**
     * @covers EzTotpConfiguration::loadConfiguration
     * @covers EzTotpPropertyOverloadAbstract::__set
     */
    public function testLoadConfiguration()
    {
        $ini = new eZINI("eztotp.ini", 'extension/eztotp/settings', null, null, true);
        $ini->resetOverrideDirs();
        $ini->resetGlobalOverrideDirs();
        $ini->load(true);

        $this->object->loadConfiguration($ini);
    }

    /**
     * @covers EzTotpPropertyOverloadAbstract::getData
     */
    public function testConfigurationArray()
    {
        $ini = new eZINI("eztotp.ini", 'extension/eztotp/settings', null, null, true);
        $ini->resetOverrideDirs();
        $ini->resetGlobalOverrideDirs();
        $ini->load(true);

        $this->object->loadConfiguration($ini);
        $config = $this->object->getData();
        $this->assertTrue(is_array($config));
        $this->assertTrue(count($config) > 0);
    }
}

?>
