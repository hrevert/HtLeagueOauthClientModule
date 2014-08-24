HtLeagueOauthClientModule
==========================
[![Build Status](https://travis-ci.org/hrevert/HtLeagueOauthClientModule.svg)](https://travis-ci.org/hrevert/HtLeagueOauthClientModule)
[![Latest Stable Version](https://poser.pugx.org/hrevert/ht-league-oauth-client-module/version.svg)](https://packagist.org/packages/hrevert/ht-league-oauth-client-module)

A Zend Framework 2 module to integrate [oauth2-client](https://github.com/thephpleague/oauth2-client) and [oauth1-client](https://github.com/thephpleague/oauth1-client) library from the [thephpleague](https://github.com/thephpleague).

## Usage

### For Oauth2
```php
// in config/module.config.php

use HtLeagueOauthClientModule\Module;

return [
    Module::CONFIG => [
        'oauth2_clients' => [
            'facebook' => [
                'clientId'      =>  'XXXXXXXX',
                'clientSecret'  =>  'XXXXXXXX',
                'redirectUri'   =>  'https://your-registered-redirect-uri/',          
            ],
        ],
    ],
];

```

```php
$facebookProvider = $serviceLocator->get('HtLeagueOauthClientModule\Oauth2ClientManager')->get('facebook');
```

##### Creating custom oauth2 providers
* Create a class implementing `League\OAuth2\Client\Provider\ProviderInterface`.

```php
class MyProvider implements League\OAuth2\Client\Provider\ProviderInterface
{
    // .....
}
```

* Inform Oauth2 client manager about the new provider
```php
// in config/module.config.php

use HtLeagueOauthClientModule\Module;

return [
    Module::CONFIG => [
        'oauth2_client_manager' => [
            'factories' => [
                'my_provider' => 'MyProviderFactory',
            ], 
        ],
    ],
];
```

* Use the provider
```php
$myProvider = $serviceLocator->get('HtLeagueOauthClientModule\Oauth2ClientManager')->get('my_provider');
```

### For Oauth1
```php
// in config/module.config.php

use HtLeagueOauthClientModule\Module;

return [
    Module::CONFIG => [
        'oauth1_clients' => [
            'twitter' => [
                'identifier' => 'your-identifier',
                'secret' => 'your-secret',
                'callback_uri' => 'http://your-callback-uri/',        
            ],
        ],
    ],
];

```

```php
$twitterProvider = $serviceLocator->get('HtLeagueOauthClientModule\Oauth1ClientManager')->get('twitter');
```

##### Creating custom oauth2 providers
* Create a class extending `League\OAuth1\Client\Server\Server`.

```php
class MyProvider extends League\OAuth1\Client\Server\Server
{
    // .....
}
```

* Inform Oauth1 client manager about the new provider
```php
// in config/module.config.php

use HtLeagueOauthClientModule\Module;

return [
    Module::CONFIG => [
        'oauth1_client_manager' => [
            'factories' => [
                'my_provider' => 'MyProviderFactory',
            ], 
        ],
    ],
];
```

* Use the provider
```php
$myProvider = $serviceLocator->get('HtLeagueOauthClientModule\Oauth1ClientManager')->get('my_provider');
```
