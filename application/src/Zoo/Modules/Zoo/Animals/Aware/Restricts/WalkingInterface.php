<?php
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