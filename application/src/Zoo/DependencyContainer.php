<?php
declare(strict_types=1);

namespace Zoo;

use Zoo\Exceptions\DependencyContainerException;

/**
 * Class DependencyContainer
 * @package Zoo
 */
final class DependencyContainer implements DependencyContainerInterface {

    /**
     * @var \ArrayAccess $registry
     */
    private $registry;

    /**
     * Loader constructor.
     *
     * @param \ArrayAccess $registry
     */
    public function __construct(\ArrayAccess $registry) {
        $this->registry = $registry;
    }

    /**
     * Set module
     *
     * @param string                $moduleName
     * @param mixed                $moduleInstance
     *
     * @throws DependencyContainerException
     *
     * @return DependencyContainerInterface
     */
    public function register($moduleName, $moduleInstance) : DependencyContainerInterface {

        $isExist = $this->registry->offsetExists($moduleName);
        if(true === $isExist) {
            throw new DependencyContainerException('Zoo '.$moduleName.' already registered ');
        }
        $this->registry->offsetSet($moduleName, $moduleInstance);

        return $this;
    }

    /**
     * Get module
     *
     * @param string $moduleName
     *
     * @throws DependencyContainerException
     * @return mixed
     */
    public function get($moduleName) {
        $isExist = $this->registry->offsetExists($moduleName);

        if(false === $isExist) {
            throw new DependencyContainerException('Zoo '.$moduleName.' does not registered ');
        }

        return $this->registry->offsetGet($moduleName);
    }
}