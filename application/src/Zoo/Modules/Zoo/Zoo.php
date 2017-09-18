<?php
declare(strict_types=1);

namespace  Zoo\Modules\Zoo;

use Zoo\Modules\Zoo\Animals\Aware\Restricts\{
    FlyingInterface,
    MammalInterface,
    SwimmingInterface,
    WalkingInterface
};
use Zoo\Modules\Zoo\Exceptions\AnimalException;
use Zoo\Modules\Zoo\Animals\Aware\AnimalInterface;

/**
 * Class Zoo
 * @package Zoo\Modules\Zoo
 */
final class Zoo extends ZooFactory {

    /**
     * @const ANIMALS_SET
     */
    const ANIMALS_SET = '\Zoo\Modules\Zoo\Animals\\';

    /**
     * Create animal
     *
     * @param string $animal
     * @throws AnimalException
     *
     * @return AnimalInterface|FlyingInterface|MammalInterface|SwimmingInterface|WalkingInterface
     */
    public function conceiveAnimal(string $animal): AnimalInterface {

        $animal = ucfirst($animal);

        try {
            $reflection = new \ReflectionClass(self::ANIMALS_SET . $animal);
            return $reflection->newInstanceWithoutConstructor();

        } catch (\ReflectionException $e) {
            throw new AnimalException('Animal '.$animal.' wasn\'t born');
        }
    }


}