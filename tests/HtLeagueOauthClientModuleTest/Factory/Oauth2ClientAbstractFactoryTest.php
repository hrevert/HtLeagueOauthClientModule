<?php
namespace HtLeagueOauthClientModuleTest\Factory;

use HtLeagueOauthClientModule\Factory\Oauth2ClientAbstractFactory;
use Zend\ServiceManager\ServiceLocatorInterface;
use HtLeagueOauthClientModule\Module;
use HtLeagueOauthClientModule\Oauth2ClientManager;

class Oauth2ClientAbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Oauth2ClientAbstractFactory
     */
    protected $abstractFactory;

    public function setUp()
    {
        $this->abstractFactory = new Oauth2ClientAbstractFactory;
    }

    public function testCantCreateServiceWhenClassDoesNotExist()
    {
        $pluginManager = $this->getMock('HtLeagueOauthClientModule\Oauth2ClientManager');

        $this->assertFalse($this->abstractFactory->canCreateServiceWithName($pluginManager, 'FooBar', 'FooBar'));
    }

    public function testCantCreateServiceWhenProviderConfigDoesNotExist()
    {
        $serviceLocator = $this->getMock('Zend\ServiceManager\ServiceLocatorInterface');
        $serviceLocator->expects($this->once())
            ->method('get')
            ->with('Config')
            ->will($this->returnValue([]));

        $pluginManager = new Oauth2ClientManager;
        $pluginManager->setServiceLocator($serviceLocator);

        $this->assertFalse($this->abstractFactory->canCreateServiceWithName($pluginManager, 'Facebook', 'Facebook'));
    }

    public function testCantCreateServiceWhenProviderConfigNotExists()
    {
        $serviceLocator = $this->getMock('Zend\ServiceManager\ServiceLocatorInterface');
        $serviceLocator->expects($this->once())
            ->method('get')
            ->with('Config')
            ->will($this->returnValue([Module::CONFIG => ['oauth2_clients' => ['facebook' =>  []]]]));

        $pluginManager = new Oauth2ClientManager;
        $pluginManager->setServiceLocator($serviceLocator);

        $this->assertTrue($this->abstractFactory->canCreateServiceWithName($pluginManager, 'Facebook', 'Facebook'));
    }

    public function testCreateService()
    {
        $serviceLocator = $this->getMock('Zend\ServiceManager\ServiceLocatorInterface');
    }
}
