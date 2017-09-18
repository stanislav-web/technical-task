<?php
declare(strict_types=1);

namespace Zoo\Modules\Zoo\Animals;

use Zoo\Modules\Zoo\Animals\Aware\AbstractAnimalObject;
use Zoo\Modules\Zoo\Animals\Aware\Restricts\{
    MammalInterface, WalkingInterface
};

/**
 * Class Fish
 * @package Zoo\Modules\Zoo\Animals
 */
class Monkey extends AbstractAnimalObject
    implements WalkingInterface, MammalInterface {

    /**
     * @const KIND
     */
    const KIND = 'Monkey';

    /**
     * The birth of an animal
     *
     * @return string
     */
    public function birth(): string {
        $now = new \DateTime();
        $birthday = $now->format('D, d \of M H:i:s');
        return 'Hello, man! I\'am '.self::KIND.' and today is my birthday '.$birthday.PHP_EOL
            .'I am frendly for you';
    }

    /**
     * Eat action
     *
     * @return string
     */
    public function eat(): string {
        return 'I want to eat! And it\'s time to get some worms .. mmm';
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
     * Getting milk from mammal
     *
     * @return string
     */
    public function giveMilk(): string {
        return 'I can give milk to my children, because I am a mammal';
    }

    /**
     * Walking
     *
     * @return string
     */
    public function walk(): string {
        return 'I am monkey who doesn\'t fear walking on the ground!';
    }


}