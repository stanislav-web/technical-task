<?php
namespace  Zoo\Modules\Zoo;

use Zoo\Modules\Zoo\Exceptions\AnimalException;
use Zoo\Modules\Zoo\ValueObjects\Aware\AnimalInterface;

/**
 * Class Zoo
 * @package Zoo\Modules\Zoo
 */
final class Zoo extends ZooFactory {

    /**
     * @const ANIMALS_SET
     */
    const ANIMALS_SET = '\Zoo\Modules\Zoo\ValueObjects\\';

    /**
     * Create animal
     *
     * @param string $animal
     * @throws AnimalException
     *
     * @return AnimalInterface
     */
    public function conceiveAnimal(string $animal): AnimalInterface {

        $animal = ucfirst($animal);

        try {
            $reflection = new \ReflectionClass(self::ANIMALS_SET . $animal);
            return $reflection->newInstance();

        } catch (\ReflectionException $e) {
            throw new AnimalException('The `'.$animal.'` wasn\'t born');
        }
    }


}