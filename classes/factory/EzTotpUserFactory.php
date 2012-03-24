<?php
/**
 * EzTotp: Two-way authentication with Google Authenticator for eZPublish
 *
 * @package EzTotp
 * @version 0.1 unstable/development
 * @author Frank Neff <fneff89@gmail.com>
 * @license LGPL v3 - http://www.gnu.org/licenses/lgpl-3.0.en.html
 */

class EzTotpUserFactory extends EzTotpFactoryAbstract
{
    private $otpUser;

    protected function init()
    {

    }

    public function getUserById(int $id)
    {
        return EzTotpUser::fetch($id);
    }

    public function enableTotpAuthentication()
    {
        if(!$this->otpUser instanceof EzTotpUser)
        {
            throw new EzTotpFactoryException("No valid user! Please use " . __CLASS__ . "::setUserById first!");
        }
    }

}
