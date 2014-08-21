HtLeagueOauthClientModule
==========================
[![Build Status](https://travis-ci.org/hrevert/HtLeagueOauthClientModule.svg)](https://travis-ci.org/hrevert/HtLeagueOauthClientModule)
[![Latest Stable Version](https://poser.pugx.org/hrevert/ht-league-oauth-client-module/version.svg)](https://packagist.org/packages/hrevert/ht-league-oauth-client-module)

A Zend Framework 2 module to integrate [oauth2-client](https://github.com/thephpleague/oauth2-client) and [oauth1-client](https://github.com/thephpleague/oauth1-client) library from the [thephpleague](https://github.com/thephpleague).


Note: Integration for [oauth1-client](https://github.com/thephpleague/oauth1-client) library is not complete.

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
