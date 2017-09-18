<?php
namespace Zoo\Modules\Zoo;

use Zoo\Modules\Zoo\Exceptions\AnimalException;
use Zoo\Modules\Zoo\ValueObjects\Aware\AnimalInterface;

/**
 * Class ZooFactory
 * @package Zoo\Modules\Zoo
 */
abstract class ZooFactory {

    /**
     * Create animal
     *
     * @param string $animal
     * @throws AnimalException
     *
     * @return AnimalInterface
     */
    abstract public function conceiveAnimal(string $content): AnimalInterface;
}