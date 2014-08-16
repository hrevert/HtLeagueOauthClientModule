<?php
namespace HtLeagueOauthClientModule\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use HtLeagueOauthClientModule\Module;

abstract class AbstractOauth2ProviderFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $class = static::PROVIDER_CLASS;
        $configKey = static::PROVIDER_CONFIG_KEY;

        $config = $serviceLocator->get('Config');

        return new $class($config[Module::CONFIG]['oauth2_clients'][$configKey]);
    }
}
