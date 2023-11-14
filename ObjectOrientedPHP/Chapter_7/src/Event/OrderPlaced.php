<?php declare(strict_types=1);
namespace App\Event;

use App\Order;


/**
 * Class OrderPlaced
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class OrderPlaced
{
    private array $listeners = [];

   public function registerListener(callable $listener): void
   {
        $this->listeners [] = $listener;
   }

   public function trigger(Order $order): void
   {
       foreach($this->listeners as $listener){
           $listener($order);
       }
   }
}