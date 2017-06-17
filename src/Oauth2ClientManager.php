<?php
namespace HtLeagueOauthClientModule;

use Zend\ServiceManager\AbstractPluginManager;
use Zend\ServiceManager\Config;
use League\OAuth2\Client\Provider\AbstractProvider;

class Oauth2ClientManager extends AbstractPluginManager
{
    /**
     * Constructor
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->addAbstractFactory(new Factory\Oauth2ClientAbstractFactory($config));
    }

    /**
     * {@inheritDoc}
     */
    public function validatePlugin($plugin)
    {
        if ($plugin instanceof AbstractProvider) {
            return; // we're okay
        }

        throw new Exception\InvalidArgumentException(sprintf(
            'Plugin of type %s is invalid; must implement League\OAuth2\Client\Provider\IdentityProvider',
            (is_object($plugin) ? get_class($plugin) : gettype($plugin))
        ));
    }
}
