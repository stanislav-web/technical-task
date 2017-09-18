<?php
declare(strict_types=1);

namespace Zoo\Modules\Zoo\Animals\Aware;

/**
 * Interface AnimalInterface
 * @package Zoo\Modules\Zoo\Animals\Aware
 */
interface AnimalInterface {

    /**
     * The birth of an animal
     *
     * @return string
     */
    public function birth() : string;

    /**
     * Animal's nutrition
     *
     * @return string
     */
    public function eat() : string;

    /**
     * Meet the need )
     *
     * @return string
     */
    public function purify() : string;
}