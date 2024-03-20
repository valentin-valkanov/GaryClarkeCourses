<?php
$providers = [
    \App\Provider\EventServiceProvider::class
];

foreach ($providers as $providerClass) {
    if (isset($container)) {
        $provider = $container->get($providerClass);
    }
    $provider->register();
}