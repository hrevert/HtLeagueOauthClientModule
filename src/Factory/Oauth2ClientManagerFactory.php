<?php
namespace HtLeagueOauthClientModule\Factory;

use Psr\Container\ContainerInterface;
use HtLeagueOauthClientModule\ConfigProvider;
use HtLeagueOauthClientModule\Oauth2ClientManager;

class Oauth2ClientManagerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new Oauth2ClientManager($container->get('config')[ConfigProvider::CONFIG]['oauth2_clients']);
    }
}
