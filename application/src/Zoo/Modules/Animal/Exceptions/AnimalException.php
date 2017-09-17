<?php
namespace Zoo\Modules\Animal\Exceptions;

/**
 * Class AnimalException
 * @package Zoo\Modules\Animal\Exceptions
 */
class AnimalException extends \Exception {

    /**
     * @const CODE
     */
    const CODE = 200;

    /**
     * AnimalException constructor.
     *
     * @param string          $message
     * @param int             $code
     * @param \Throwable|null $previous
     */
    public function __construct($message, $code = self::CODE, \Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
    /**
     * @return string
     */
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}