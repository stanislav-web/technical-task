<?php
declare(strict_types=1);

namespace Zoo\Modules\Zoo\Animals;

use Zoo\Modules\Zoo\Animals\Aware\AbstractAnimalObject;
use Zoo\Modules\Zoo\Animals\Aware\Restricts\{
    SwimmingInterface,
    WalkingInterface
};

/**
 * Class Penguin
 * @package Zoo\Modules\Zoo\Animals
 */
class Penguin extends AbstractAnimalObject
    implements SwimmingInterface, WalkingInterface {

    /**
     * @const KIND
     */
    const KIND = 'Penguin';

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
        return 'I already ate them and have to solve my problems )) . Bye!';
    }

    /**
     * Swimming
     *
     * @return string
     */
    public function swim() : string {
        return 'I swim, but poorly ... Sometimes it\'s enough to find some fishes';
    }


    /**
     * Walking
     *
     * @return string
     */
    public function walk() : string {
        return 'Unlike a Dolphin, I can walk on the ground';
    }

}