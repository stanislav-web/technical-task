<?php
require_once __DIR__.'/vendor/autoload.php';

$di = new Zoo\DependencyContainer(
    new Zoo\Registry()
);

try {

    // Register using modules
    $di->register('Animal', new \Zoo\Modules\Animal\Module());

    var_dump($di); exit;
} catch (\Zoo\Exceptions\DependencyContainerException $e) {
    echo "Application error: " .$e;
} catch (\Throwable $e) {
    echo $e;
}