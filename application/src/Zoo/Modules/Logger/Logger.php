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
     * @param       $message
     * @param array $context
     *
     * @return void
     */
    public function info($message, array $context = []) {
        $this->logger->addInfo($message, $context);
    }

    /**
     * Error message
     *
     * @param       $message
     * @param array $context
     *
     * @return void
     */
    public function error($message, array $context = []) {
        $this->logger->info($message, $context);
    }
}