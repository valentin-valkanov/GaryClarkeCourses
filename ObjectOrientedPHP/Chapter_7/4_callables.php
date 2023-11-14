<?php
require_once 'vendor/autoload.php';

//$listener = static function (\App\Order $order): void
//{
//    echo 'Sending confirmation to ' . $order->getOrderer() . PHP_EOL;
//};

$listener = static fn($order) => print 'Sending confirmation to ' . $order->getOrderer() . PHP_EOL;

$order = new \App\Order();

$orderPlacedEvent = new \App\Event\OrderPlaced();

$orderPlacedEvent->registerListener([new App\Listener\OrderNotificationMailer(), 'send']);
$orderPlacedEvent->registerListener($listener);
$orderPlacedEvent->registerListener(new \App\Listener\OrderLogger());
$orderPlacedEvent->trigger($order);


