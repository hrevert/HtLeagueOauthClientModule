<?php
namespace HtLeagueOauthClientModuleTest\Factory;

use HtLeagueOauthClientModule\Factory\Oauth2ClientManagerFactory;
use Zend\ServiceManager\ServiceLocatorInterface;
use HtLeagueOauthClientModule\Module;

class Oauth2ClientManagerFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateService()
    {
        $serviceLocator = $this->getMock('Zend\ServiceManager\ServiceLocatorInterface');

        $serviceLocator->expects($this->once())
            ->method('get')
            ->with('config')
            ->will($this->returnValue([Module::CONFIG => ['oauth2_clients' => []]]));

        $factory = new Oauth2ClientManagerFactory;

        $this->assertInstanceOf('HtLeagueOauthClientModule\Oauth2ClientManager', $factory($serviceLocator));
    }
}
