<?php
namespace Zoo\Modules\Zoo\ValueObjects\Aware;

/**
 * Interface AnimalInterface
 * @package Zoo\Modules\Zoo\ValueObjects\Aware
 */
interface AnimalInterface
{
    /**
     * The birth of an animal
     * @return string
     */
    public function birth() : string;

    /**
     * Animal's nutrition
     *
     * @return string
     */
    public function eat($food) : string;

    /**
     * Meet the need )
     *
     * @return string
     */
    public function purify() : string;
}