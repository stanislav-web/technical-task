<?php
namespace Zoo\Modules\Zoo;

use Zoo\Modules\Zoo\Animals\Aware\Restricts\{
    FlyingInterface,
    MammalInterface,
    SwimmingInterface,
    WalkingInterface
};
use Zoo\Modules\Zoo\Exceptions\AnimalException;
use Zoo\Modules\Zoo\Animals\Aware\AnimalInterface;

/**
 * Class ZooFactory
 * @package Zoo\Modules\Zoo
 */
abstract class ZooFactory {

    /**
     * Create animal
     *
     * @param string $content
     * @throws AnimalException
     *
     * @return AnimalInterface|FlyingInterface|MammalInterface|SwimmingInterface|WalkingInterface
     */
    abstract public function conceiveAnimal(string $content): AnimalInterface;
}