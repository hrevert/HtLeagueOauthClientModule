<?php
namespace HtLeagueOauthClientModule\Factory;

class Oauth2ClientAbstractFactory extends AbstractOauthClientAbstractFactory
{
    protected function getClass($serviceName)
    {
        return 'League\OAuth2\Client\Provider\\' . ucfirst(strtolower($serviceName));
    }
}
