<?php
namespace HtLeagueOauthClientModule\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\AbstractFactoryInterface;

abstract class AbstractOauthClientAbstractFactory implements AbstractFactoryInterface
{
    /**
     * @var array
     */
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * {@inheritDoc}
     */
    public function canCreate(ContainerInterface $container, $requestedName)
    {
        $class = $this->getClass($requestedName);

        if (!class_exists($class)) {
            return false;
        }

        $configKey = strtolower($requestedName);

        return isset($this->config[$configKey]);
    }

    /**
     * {@inheritDoc}
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $class = $this->getClass($requestedName);

        $configKey = strtolower($requestedName);

        return new $class($this->config[$configKey]);
    }

    abstract protected function getClass($serviceName); 
}
