<?php
namespace Zoo\Modules\Zoo\Animals;

use Zoo\Modules\Zoo\Animals\Aware\AbstractAnimalObject;
use Zoo\Modules\Zoo\Animals\Aware\Restricts\{
    FlyingInterface,
    WalkingInterface
};

/**
 * Class Bird
 * @package Zoo\Modules\Zoo\Animals
 */
class Bird extends AbstractAnimalObject
    implements FlyingInterface, WalkingInterface {

    /**
     * @const KIND
     */
    const KIND = 'Bird';

    /**
     * The birth of an animal
     *
     * @return string
     */
    public function birth(): string {

        $now = new \DateTime();
        $birthday = $now->format('D, d \of M H:i:s');
        return 'Hello, man! I\'am '.self::KIND.' and today is my birthday '.$birthday;

    }

    /**
     * Eat action
     *
     * @return string
     */
    public function eat(): string {
        return 'I want to eat! And it\'s time to get some fishes .. mmm';
    }

    /**
     * Meet the need )
     *
     * @return string
     */
    public function purify(): string {
        return 'I already ate them and have to solve my problems )). Bye!';
    }

    /**
     * Flying
     *
     * @return string
     */
    public function fly() : string {
        return 'I can fly while others can not!';
    }

    /**
     * Walking
     *
     * @return string
     */
    public function walk() : string {
        return 'I am a bird who doesn\'t fear walking on the ground!';
    }
}