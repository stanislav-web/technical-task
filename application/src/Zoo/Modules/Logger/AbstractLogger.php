<?php
namespace Zoo\Modules\Logger;

use Psr\Log\LoggerInterface;


/**
 * Class AbstractLogger
 * @package Zoo\Modules\Logger
 */
abstract class AbstractLogger {

    /**
     * @var LoggerInterface $logger
     */
    protected $logger;

    /**
     * AbstractLogger constructor.
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    /**
     * Info message
     *
     * @param  string   $message
     *
     * @return void
     */
    abstract public function info($message);

    /**
     * Error message
     *
     * @param string $message
     *
     * @return void
     */
    abstract public function error($message);

}