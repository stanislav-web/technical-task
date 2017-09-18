<?php
declare(strict_types=1);

namespace Zoo;

use Zoo\Exceptions\DependencyContainerException;

/**
 * Interface DependencyContainerInterface
 * @package Zoo
 */
interface DependencyContainerInterface {

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
    public function register($moduleName, $moduleInstance) : DependencyContainerInterface;

    /**
     * Get module
     *
     * @param string $moduleName
     *
     * @throws DependencyContainerException
     * @return mixed
     */
    public function get($moduleName);
}