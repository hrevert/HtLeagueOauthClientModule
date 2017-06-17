<?php
namespace HtLeagueOauthClientModule;

use Zend\ServiceManager\AbstractPluginManager;
use Zend\ServiceManager\Config;
use League\OAuth1\Client\Server\Server;

class Oauth1ClientManager extends AbstractPluginManager
{
    /**
     * Constructor
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->creationContext = $this;
        $this->addAbstractFactory(new Factory\Oauth1ClientAbstractFactory($config));
    }

    /**
     * {@inheritDoc}
     */
    public function validate($plugin)
    {
        if ($plugin instanceof Server) {
            return; // we're okay
        }

        throw new Exception\InvalidArgumentException(sprintf(
            'Plugin of type %s is invalid; must implement League\OAuth1\Client\Server\Server',
            (is_object($plugin) ? get_class($plugin) : gettype($plugin))
        ));
    }
}
