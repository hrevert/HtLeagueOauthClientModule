<?php
namespace HtLeagueOauthClientModuleTest\Factory;

use HtLeagueOauthClientModule\Factory\Oauth1ClientManagerFactory;
use Zend\ServiceManager\ServiceLocatorInterface;
use HtLeagueOauthClientModule\Module;

class Oauth1ClientManagerFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateService()
    {
        $serviceLocator = $this->getMock('Zend\ServiceManager\ServiceLocatorInterface');

        $serviceLocator->expects($this->once())
            ->method('get')
            ->with('Config')
            ->will($this->returnValue([Module::CONFIG => ['oauth1_client_manager' => []]]));

        $factory = new Oauth1ClientManagerFactory;

        $this->assertInstanceOf('HtLeagueOauthClientModule\Oauth1ClientManager', $factory->createService($serviceLocator));
    }
}
