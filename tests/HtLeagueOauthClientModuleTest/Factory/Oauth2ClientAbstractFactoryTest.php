<?php
namespace HtLeagueOauthClientModuleTest\Factory;

use HtLeagueOauthClientModule\Factory\Oauth2ClientAbstractFactory;
use Interop\Container\ContainerInterface;

class Oauth2ClientAbstractFactoryTest extends \PHPUnit_Framework_TestCase
{

    public function testCantCreateServiceWhenClassDoesNotExist()
    {
        $pluginManager = $this->getMock(ContainerInterface::class);
        $abstractFactory = new Oauth2ClientAbstractFactory([]);

        $this->assertFalse($abstractFactory->canCreate($pluginManager, 'FooBar'));
    }

    public function testCantCreateServiceWhenProviderConfigDoesNotExist()
    {
        $pluginManager = $this->getMock(ContainerInterface::class);
        $abstractFactory = new Oauth2ClientAbstractFactory([]);

        $this->assertFalse($abstractFactory->canCreate($pluginManager, 'Facebook'));
    }

    public function testCantCreateServiceWhenProviderConfigExists()
    {
        $pluginManager = $this->getMock(ContainerInterface::class);

        $abstractFactory = new Oauth2ClientAbstractFactory(['facebook' =>  []]);

        $this->assertTrue($abstractFactory->canCreate($pluginManager, 'Facebook'));
    }
}
