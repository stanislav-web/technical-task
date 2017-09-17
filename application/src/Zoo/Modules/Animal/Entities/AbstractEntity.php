<?php
namespace Zoo\Modules\Animal\Entities;

/**
 * Class AbstractEntity
 * @package Zoo\Modules\Animal\Entities
 */
abstract class AbstractEntity {

    /**
     * @param string $property
     *
     * @throws \InvalidArgumentException
     */
    public function __get($property) {
        throw new \InvalidArgumentException($property.' it can not do');
    }

    /**
     * @param string $property
     *
     * @throws \InvalidArgumentException
     */
    public function __isset($property) {
        throw new \InvalidArgumentException($property.' does not exist');
    }

    /**
     * @param string $property
     * @param mixed  $value
     *
     * @throws \InvalidArgumentException
     */
    public function __set($property, $value) {
        throw new \InvalidArgumentException($property.' it can not do');
    }

    /**
     * Fill object property from array
     *
     * @param array $data
     *
     * @return AbstractEntity
     */
    public function setFromArray(array $data): AbstractEntity {

        foreach ($data as $property => $value) {
            $this->$property = (true === is_numeric($value)) ? (int)$value : $value;
        }
        return $this;
    }
}