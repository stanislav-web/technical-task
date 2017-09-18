<?php
namespace Zoo\Modules\Logger;

/**
 * Class Logger
 * @package Zoo\Modules\Logger
 */
final class Logger extends AbstractLogger {

    /**
     * Info message
     *
     * @param string  $message
     *
     * @return void
     */
    public function info($message) {
        $this->logger->info($message);
    }

    /**
     * Error message
     *
     * @param string $message
     *
     * @return void
     */
    public function error($message) {
        $this->logger->error($message);
    }
}