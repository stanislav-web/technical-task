<?php
declare(strict_types=1);

namespace Zoo\Modules\Zoo\Animals\Aware\Restricts;

/**
 * Interface MammalInterface
 * @package Zoo\Modules\Zoo\Animals\Aware\Restricts
 */
interface MammalInterface {

    /**
     * Getting milk from mammal
     *
     * @return string
     */
    public function giveMilk() : string;
}