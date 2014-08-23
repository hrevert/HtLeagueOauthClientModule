<?php
namespace HtLeagueOauthClientModule\Factory;

class Oauth2ClientAbstractFactory extends AbstractOauthClientAbstractFactory
{
    protected function getConfigKey()
    {
        return 'oauth2_clients';
    }

    protected function getClass($serviceName)
    {
        return 'League\OAuth2\Client\Provider\\' . ucfirst(strtolower($serviceName));
    }
}
