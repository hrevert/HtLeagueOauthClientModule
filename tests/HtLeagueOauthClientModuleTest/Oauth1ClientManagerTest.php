<?php
namespace HtLeagueOauthClientModuleTest;

use HtLeagueOauthClientModule\Oauth1ClientManager;

class Oauth1ClientManagerTest extends \PHPUnit_Framework_TestCase
{
    public function testValidatePlugin()
    {
        $oauth2ClientManager = new Oauth1ClientManager([]);

        $plugin = $this->getMockBuilder('League\OAuth1\Client\Server\Server')
            ->disableOriginalConstructor()
            ->getMock();
        $this->assertNull($oauth2ClientManager->validatePlugin($plugin));

        $this->setExpectedException('HtLeagueOauthClientModule\Exception\InvalidArgumentException');
        $oauth2ClientManager->validatePlugin(new \ArrayObject);
    }
}
