<?php
declare(strict_types=1);

namespace Zoo\Modules\Zoo\Animals\Aware\Restricts;

/**
 * Interface WalkingInterface
 * @package Zoo\Modules\Zoo\Animals\Aware\Restricts
 */
interface WalkingInterface {

    /**
     * Walking
     *
     * @return string
     */
    public function walk() : string;
}