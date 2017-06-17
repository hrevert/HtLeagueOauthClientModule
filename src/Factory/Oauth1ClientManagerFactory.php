<?php
namespace HtLeagueOauthClientModule\Factory;

use Psr\Container\ContainerInterface;
use HtLeagueOauthClientModule\ConfigProvider;
use HtLeagueOauthClientModule\Oauth1ClientManager;

class Oauth1ClientManagerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new Oauth1ClientManager($container->get('config')[ConfigProvider::CONFIG]['oauth1_clients']);
    }
}
