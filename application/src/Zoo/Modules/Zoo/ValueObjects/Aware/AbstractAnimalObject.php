<?php
namespace Zoo\Modules\Zoo\ValueObjects\Aware;

/**
 * Class AbstractAnimalObject
 * @package Zoo\Modules\Zoo\Aware\ValueObjects
 */
abstract class AbstractAnimalObject {

    /**
     * @var string
     */
    protected $food = 'meet';

    /**
     * @param string $property
     *
     * @throws \InvalidArgumentException
     */
    public function __get($property) : void {
        throw new \InvalidArgumentException('I do not know what you want from me');
    }

    /**
     * @param string $property
     *
     * @throws \InvalidArgumentException
     */
    public function __isset($property) : void {
        throw new \InvalidArgumentException('I do not know what you want from me');
    }

    /**
     * @param string $property
     * @param mixed  $value
     *
     * @throws \InvalidArgumentException
     */
    public function __set($property, $value) : void {
        throw new \InvalidArgumentException('I do not want to take this');
    }

    /**
     * Override default behaviour to prevent errors
     *
     * @param string $name
     * @param array $arguments
     * @return $this
     */
    public function __call($name, $arguments) {
        exit('dsd');
        return $this;
    }
}