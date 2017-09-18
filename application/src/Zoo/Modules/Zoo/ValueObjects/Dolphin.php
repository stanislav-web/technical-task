<?php
namespace Zoo\Modules\Zoo\ValueObjects;

use Zoo\Modules\Zoo\ValueObjects\Aware\{
    AbstractAnimalObject,
    AnimalInterface
};

/**
 * Class Dolphin
 * @package Zoo\Modules\Zoo\ValueObjects
 */
class Dolphin extends AbstractAnimalObject implements AnimalInterface {

    public function birth(): string
    {
        // TODO: Implement birth() method.
    }

    public function eat($food): string
    {
        // TODO: Implement eat() method.
    }

    public function purify(): string
    {
        // TODO: Implement purify() method.
    }
}