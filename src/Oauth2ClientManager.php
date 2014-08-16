<?php
namespace HtLeagueOauthClientModule;

use Zend\ServiceManager\AbstractPluginManager;
use Zend\ServiceManager\ConfigInterface;

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
        $this->addAbstractFactory('HtLeagueOauthClientModule\Factory\Oauth2ClientAbstractFactory');
    }

    /**
     * {@inheritDoc}
     */
    protected function canonicalizeName($name)
    {
        return $name;
    }
}
