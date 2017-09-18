<?php
namespace Zoo\Modules\Zoo\Animals;

use Zoo\Modules\Zoo\Animals\Aware\AbstractAnimalObject;
use Zoo\Modules\Zoo\Animals\Aware\Restricts\{
    SwimmingInterface
};

/**
 * Class Fish
 * @package Zoo\Modules\Zoo\Animals
 */
class Fish extends AbstractAnimalObject
    implements SwimmingInterface {

    /**
     * @const KIND
     */
    const KIND = 'Fish';

    /**
     * The birth of an animal
     *
     * @return string
     */
    public function birth(): string {
        $now = new \DateTime();
        $birthday = $now->format('D, d \of M H:i:s');
        return 'Hello, man! I\'am '.self::KIND.' and today is my birthday '.$birthday.PHP_EOL
            .'Basicaly, i am food for other animals (';
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
     * Swimming
     *
     * @return string
     */
    public function swim() : string {
        return 'I\'m a fish and therefore I feel better in the water than everyone else';
    }

}