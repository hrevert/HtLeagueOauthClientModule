<?php
namespace HtLeagueOauthClientModule\Factory;

use Zend\ServiceManager\AbstractFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use HtLeagueOauthClientModule\Module;

abstract class AbstractOauthClientAbstractFactory implements AbstractFactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function canCreateServiceWithName(ServiceLocatorInterface $oauth2ClientManager, $name, $requestedName)
    {
        $serviceLocator = $oauth2ClientManager->getServiceLocator();

        $class = $this->getClass($name);

        if (!class_exists($class)) {
            return false;
        }

        $configKey = strtolower($requestedName);
        $config = $serviceLocator->get('Config');

        return isset($config[Module::CONFIG][$this->getConfigKey()][$configKey]);
    }

    /**
     * {@inheritDoc}
     */
    public function createServiceWithName(ServiceLocatorInterface $oauth2ClientManager, $name, $requestedName)
    {
        $serviceLocator = $oauth2ClientManager->getServiceLocator();

        $class = $this->getClass($name);

        $configKey = strtolower($requestedName);
        $config = $serviceLocator->get('Config');

        return new $class($config[Module::CONFIG][$this->getConfigKey()][$configKey]);
    }

    abstract protected function getConfigKey();

    abstract protected function getClass($serviceName); 
}
