<?php
namespace HtLeagueOauthClientModule\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use HtLeagueOauthClientModule\Module;
use HtLeagueOauthClientModule\Oauth2ClientManager;
use Zend\ServiceManager\Config;

class Oauth2ClientManagerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new Oauth2ClientManager(new Config($serviceLocator->get('Config')[Module::CONFIG]['oauth2_client_manager']));
    }
}
