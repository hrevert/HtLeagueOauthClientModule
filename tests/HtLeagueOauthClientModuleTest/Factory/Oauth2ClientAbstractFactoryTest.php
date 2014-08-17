<?php
namespace HtLeagueOauthClientModuleTest\Factory;

use HtLeagueOauthClientModule\Factory\Oauth2ClientAbstractFactory;
use Zend\ServiceManager\ServiceLocatorInterface;
use HtLeagueOauthClientModule\Module;

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
        $serviceLocator = $this->getMock('Zend\ServiceManager\ServiceLocatorInterface');

        $this->assertFalse($this->abstractFactory->canCreateServiceWithName($serviceLocator, 'FooBar', 'FooBar'));
    }

    public function testCantCreateServiceWhenProviderConfigDoesNotExist()
    {
        $serviceLocator = $this->getMock('Zend\ServiceManager\ServiceLocatorInterface');
        $serviceLocator->expects($this->once())
            ->method('get')
            ->with('Config')
            ->will($this->returnValue([]));

        $this->assertFalse($this->abstractFactory->canCreateServiceWithName($serviceLocator, 'Facebook', 'Facebook'));
    }

    public function testCantCreateServiceWhenProviderConfigNotExists()
    {
        $serviceLocator = $this->getMock('Zend\ServiceManager\ServiceLocatorInterface');
        $serviceLocator->expects($this->once())
            ->method('get')
            ->with('Config')
            ->will($this->returnValue([Module::CONFIG => ['oauth2_clients' => ['facebook' =>  []]]]));

        $this->assertTrue($this->abstractFactory->canCreateServiceWithName($serviceLocator, 'Facebook', 'Facebook'));
    }

    public function testCreateService()
    {
        $serviceLocator = $this->getMock('Zend\ServiceManager\ServiceLocatorInterface');
    }
}
