<?php
namespace HtLeagueOauthClientModule;

use Zend\ServiceManager\AbstractPluginManager;
use Zend\ServiceManager\ConfigInterface;
use League\OAuth1\Client\Server\Server;

class Oauth1ClientManager extends AbstractPluginManager
{
    /**
     * Constructor
     *
     * @param ConfigInterface|null $config
     */
    public function __construct(ConfigInterface $config = null)
    {
        parent::__construct($config);
        $this->addAbstractFactory(new Factory\Oauth1ClientAbstractFactory);
    }

    /**
     * {@inheritDoc}
     */
    public function validatePlugin($plugin)
    {
        if ($plugin instanceof Server) {
            return; // we're okay
        }

        throw new Exception\InvalidArgumentException(sprintf(
            'Plugin of type %s is invalid; must implement League\OAuth1\Client\Server\Server',
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
