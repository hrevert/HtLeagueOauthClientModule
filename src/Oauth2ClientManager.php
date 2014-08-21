<?php
namespace HtLeagueOauthClientModule;

use Zend\ServiceManager\AbstractPluginManager;
use Zend\ServiceManager\ConfigInterface;
use League\OAuth2\Client\Provider\IdentityProvider;

class Oauth2ClientManager extends AbstractPluginManager
{
    /**
     * Constructor
     *
     * @param ConfigInterface|null $config
     */
    public function __construct(ConfigInterface $config = null)
    {
        parent::__construct($config);
        $this->addAbstractFactory(new Factory\Oauth2ClientAbstractFactory);
    }

    /**
     * {@inheritDoc}
     */
    public function validatePlugin($plugin)
    {
        if ($plugin instanceof IdentityProvider) {
            return; // we're okay
        }

        throw new Exception\InvalidArgumentException(sprintf(
            'Plugin of type %s is invalid; must implement League\OAuth2\Client\Provider\IdentityProvider',
            (is_object($plugin) ? get_class($plugin) : gettype($plugin))
        ));
    }

    /**
     * {@inheritDoc}
     */
    protected function canonicalizeName($name)
    {
        return $name;
    }
}
