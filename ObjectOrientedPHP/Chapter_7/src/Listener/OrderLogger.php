<?php declare(strict_types=1);

namespace App\Listener;

use App\Order;

/**
 * Class OrderLogger
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class OrderLogger
{
    public function __invoke(Order $order)
    {
        print 'Order being logged... ';
    }
}