<?php
declare(strict_types=1);

namespace Zoo\Modules\Zoo\Animals\Aware\Restricts;

/**
 * Interface FlyingInterface
 * @package Zoo\Modules\Zoo\Animals\Aware\Restricts
 */
interface FlyingInterface {

    /**
     * Flying
     *
     * @return string
     */
    public function fly() : string;
}