<?php
/**
 * This is the config file for HtLeagueOauthClientModule. Just drop this file into your config/autoload folder,
 * and configure it as you want
 */

use HtLeagueOauthClientModule\Module;

return [
    Module::CONFIG => [
        'oauth2_clients' => [
            'facebook' => [
                'clientId'      =>  'XXXXXXXX',
                'clientSecret'  =>  'XXXXXXXX',
                'redirectUri'   =>  'https://your-registered-redirect-uri/',
            ],
            'google' => [
                'clientId'      =>  'XXXXXXXX',
                'clientSecret'  =>  'XXXXXXXX',
                'redirectUri'   =>  'https://your-registered-redirect-uri/',
            ],
            'github' => [
                'clientId'      =>  'XXXXXXXX',
                'clientSecret'  =>  'XXXXXXXX',
                'redirectUri'   =>  'https://your-registered-redirect-uri/',
            ],
            'eventbrite' => [
                'clientId'      =>  'XXXXXXXX',
                'clientSecret'  =>  'XXXXXXXX',
                'redirectUri'   =>  'https://your-registered-redirect-uri/',
            ],
            'instagram' => [
                'clientId'      =>  'XXXXXXXX',
                'clientSecret'  =>  'XXXXXXXX',
                'redirectUri'   =>  'https://your-registered-redirect-uri/',
            ],
            'microsoft' => [
                'clientId'      =>  'XXXXXXXX',
                'clientSecret'  =>  'XXXXXXXX',
                'redirectUri'   =>  'https://your-registered-redirect-uri/',
            ],
            'linkedIn' => [
                'clientId'      =>  'XXXXXXXX',
                'clientSecret'  =>  'XXXXXXXX',
                'redirectUri'   =>  'https://your-registered-redirect-uri/',
            ],
        ],
        'oauth1_clients' => [
            'twitter' => [
                'identifier' => 'your-identifier',
                'secret' => 'your-secret',
                'callback_uri' => 'http://your-callback-uri/',
            ],
            'bitbucket' => [
                'identifier' => 'your-identifier',
                'secret' => 'your-secret',
                'callback_uri' => 'http://your-callback-uri/',
            ],
            'tumblr' => [
                'identifier' => 'your-identifier',
                'secret' => 'your-secret',
                'callback_uri' => 'http://your-callback-uri/',
            ],
        ],
    ],
];

