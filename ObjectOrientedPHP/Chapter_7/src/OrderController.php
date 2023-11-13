<?php declare(strict_types=1);

namespace App;

/**
 * Class OrderController
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class OrderController
{
    public function create(Order $order, SmsNotifier $notifier ): void
    {
        echo 'Saving order to the database...';

        $costumer = $order->getOrderer();

        $notifier->send($costumer);
    }
}

