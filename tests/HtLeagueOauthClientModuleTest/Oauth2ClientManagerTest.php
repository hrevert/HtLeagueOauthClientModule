<?php
namespace HtLeagueOauthClientModuleTest;

use HtLeagueOauthClientModule\Oauth2ClientManager;

class Oauth2ClientManagerTest extends \PHPUnit_Framework_TestCase
{
    public function testValidatePlugin()
    {
        $oauth2ClientManager = new Oauth2ClientManager;

        $plugin = $this->getMock('League\OAuth2\Client\Provider\ProviderInterface');
        $this->assertNull($oauth2ClientManager->validatePlugin($plugin));

        $this->setExpectedException('HtLeagueOauthClientModule\Exception\InvalidArgumentException');
        $oauth2ClientManager->validatePlugin(new \ArrayObject);
    }
}
