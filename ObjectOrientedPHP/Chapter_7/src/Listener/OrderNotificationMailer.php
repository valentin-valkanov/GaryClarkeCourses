<?php declare(strict_types=1);
namespace App\Listener;
use App\Order;

/**
 * Class OrderNotificationMailer
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class OrderNotificationMailer
{
    public function send(Order $order): void
    {
        echo 'Order notification sent to ' . $order->getOrderer() . PHP_EOL;
    }
}