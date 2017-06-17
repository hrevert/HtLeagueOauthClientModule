<?php
    
use HtLeagueOauthClientModule\ConfigProvider;

$factories = [
    HtLeagueOauthClientModule\Oauth2ClientManager::class => HtLeagueOauthClientModule\Factory\Oauth2ClientManagerFactory::class,
    HtLeagueOauthClientModule\Oauth1ClientManager::class => HtLeagueOauthClientModule\Factory\Oauth1ClientManagerFactory::class,
];

return [
    ConfigProvider::CONFIG => [
        'oauth2_client_manager' => [],
        'oauth1_client_manager' => [],
    ],
    'service_manager' => [
        'factories' => $factories,
    ],
    'dependencies' => [
        'factories' => $factories,
    ],
];
