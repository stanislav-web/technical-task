<?php
require_once __DIR__.'/vendor/autoload.php';

$di = new Zoo\DependencyContainer(
    new Zoo\Registry()
);

$logger = new Monolog\Logger('Zoo', [
    new \Monolog\Handler\StreamHandler('php://stdout', Monolog\Logger::INFO)
]);

try {


    // Register using modules
    $di->register('Zoo', new \Zoo\Modules\Zoo\Zoo());
    $di->register('Logger', new \Zoo\Modules\Logger\Logger($logger));

    // Call modules

    /** @var \Zoo\Modules\Zoo\ZooFactory $zoo */
    /** @var \Zoo\Modules\Logger\AbstractLogger $logger */
    $zoo = $di->get('Zoo');
    $logger = $di->get('Logger');

} catch (\Zoo\Exceptions\DependencyContainerException $e) {
    echo "Application error: " .$e;
} catch (\Throwable $e) {
    $logger->addError($e);
}