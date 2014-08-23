<?php
namespace HtLeagueOauthClientModule\Factory;

class Oauth1ClientAbstractFactory extends AbstractOauthClientAbstractFactory
{
    protected function getConfigKey()
    {
        return 'oauth1_clients';
    }

    protected function getClass($serviceName)
    {
        return 'League\OAuth1\Client\Server\\' . ucfirst(strtolower($serviceName));
    }
}
