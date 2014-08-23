<?php
namespace HtLeagueOauthClientModule\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use HtLeagueOauthClientModule\Module;
use HtLeagueOauthClientModule\Oauth1ClientManager;
use Zend\ServiceManager\Config;

class Oauth1ClientManagerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new Oauth1ClientManager(new Config($serviceLocator->get('Config')[Module::CONFIG]['oauth1_client_manager']));
    }
}
