<?php
require_once __DIR__.'/vendor/autoload.php';

$di = new Zoo\DependencyContainer(
    new Zoo\Registry()
);

$logHandler = new \Monolog\Handler\StreamHandler('php://stdout', \Monolog\Logger::API);
$logHandler->setFormatter(new \Monolog\Formatter\LineFormatter(
    '%level_name% > %message%'.PHP_EOL, null, true
));
$logger = new Monolog\Logger('Zoo', [$logHandler]);

try {

    if ('cli' !== PHP_SAPI) {
        throw new \RuntimeException('Run from CLI: php index.php');
    }

    $option = getopt("a:", ['required:']);
    $param = reset($option);
    if(false === $param) {
        throw new \RuntimeException('Coose an animal from the Zoo:'.PHP_EOL.
            'Type > php index.php -a {Animal}'.PHP_EOL);
    }

    // Register using modules (
    // It can be superfluous for such an application,
    // but it shows how to logically divide the whole architecture

    $di->register('Zoo', new \Zoo\Modules\Zoo\Zoo());
    $di->register('Logger', new \Zoo\Modules\Logger\Logger($logger));

    // Call modules

    /** @var \Zoo\Modules\Zoo\ZooFactory $zoo */
    /** @var \Zoo\Modules\Logger\AbstractLogger $logger */
    $zoo = $di->get('Zoo');
    $logger = $di->get('Logger');

    $animal = $zoo->conceiveAnimal($param);

    // Show you animal's capabilities  ))
    $logger->info($animal->birth());
    sleep(2);
    $logger->info($animal->fly());
    sleep(2);
    $logger->info($animal->walk());
    sleep(2);
    $logger->info($animal->swim());
    sleep(2);
    $logger->info($animal->giveMilk());
    sleep(2);
    $logger->info($animal->eat());
    sleep(2);
    $logger->info($animal->purify());

} catch (\Zoo\Exceptions\DependencyContainerException $e) {
    echo $e;
} catch (\RuntimeException $e) {
    echo $e->getMessage();
} catch (\Throwable $e) {
    $logger->error($e);
}