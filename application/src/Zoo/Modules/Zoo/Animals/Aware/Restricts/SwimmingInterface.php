<?php
declare(strict_types=1);

namespace Zoo\Modules\Zoo\Animals\Aware\Restricts;

/**
 * Interface SwimmingInterface
 * @package Zoo\Modules\Zoo\Animals\Aware\Restricts
 */
interface SwimmingInterface {

    /**
     * Swimming
     *
     * @return string
     */
    public function swim() : string;
}