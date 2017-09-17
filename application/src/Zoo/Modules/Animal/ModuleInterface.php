<?php
namespace  Zoo\Modules\Animal;

use Zoo\Modules\Animal\Exceptions\AnimalException;

/**
 * Interface ModuleInterface
 * @package DataCollector\Modules\Data
 */
interface ModuleInterface {

    /**
     * Get "lazy" module
     *
     * @throws AnimalException
     *
     * @return void
     */
    public function getAnimals();
}