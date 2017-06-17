<?php
namespace HtLeagueOauthClientModule\Factory;

class Oauth1ClientAbstractFactory extends AbstractOauthClientAbstractFactory
{
    protected function getClass($serviceName)
    {
        return 'League\OAuth1\Client\Server\\' . ucfirst(strtolower($serviceName));
    }
}
