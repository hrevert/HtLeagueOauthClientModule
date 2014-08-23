<?php
    
use HtLeagueOauthClientModule\Module;

return [
    Module::CONFIG => [
        'oauth2_client_manager' => [],
        'oauth1_client_manager' => [],
    ],
    'service_manager' => [
        'factories' => [
            'HtLeagueOauthClientModule\Oauth2ClientManager' => 'HtLeagueOauthClientModule\Factory\Oauth2ClientManagerFactory',
            'HtLeagueOauthClientModule\Oauth1ClientManager' => 'HtLeagueOauthClientModule\Factory\Oauth1ClientManagerFactory',
        ],
    ],
];
