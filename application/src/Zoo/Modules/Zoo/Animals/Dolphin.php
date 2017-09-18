<?php
namespace Zoo\Modules\Zoo\Animals;

use Zoo\Modules\Zoo\Animals\Aware\AbstractAnimalObject;
use Zoo\Modules\Zoo\Animals\Aware\Restricts\{
    MammalInterface,
    SwimmingInterface
};

/**
 * Class Dolphin
 * @package Zoo\Modules\Zoo\Animals
 */
class Dolphin extends AbstractAnimalObject
    implements MammalInterface, SwimmingInterface {

    /**
     * @const KIND
     */
    const KIND = 'Dolphin';

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
     * Getting milk from mammal
     *
     * @return string
     */
    public function giveMilk() : string {
        return 'I can give milk to my children, because I am a mammal';
    }

    /**
     * Swimming
     *
     * @return string
     */
    public function swim() : string {
        return 'I swimming faster than any fish in Zoo';
    }

}