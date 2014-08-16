<?php
namespace HtLeagueOauthClientModule\Factory;

use Zend\ServiceManager\AbstractFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use HtLeagueOauthClientModule\Module;

class Oauth2ClientAbstractFactory implements AbstractFactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function canCreateServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        $class = $this->getClass($name);

        if (!class_exists($class)) {
            return false;
        }

        $configKey = strtolower($requestedName);
        $config = $serviceLocator->get('Config');

        return isset($config[Module::CONFIG]['oauth2_clients'][$configKey]);
    }

    /**
     * {@inheritDoc}
     */
    public function createServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        $class = $this->getClass($name);

        $configKey = strtolower($requestedName);
        $config = $serviceLocator->get('Config');

        return new $class($config[Module::CONFIG]['oauth2_clients'][$configKey]);
    }

    protected function getClass($serviceName)
    {
        return 'League\OAuth2\Client\Provider\\' . ucfirst(strtolower($serviceName));
    }
}
