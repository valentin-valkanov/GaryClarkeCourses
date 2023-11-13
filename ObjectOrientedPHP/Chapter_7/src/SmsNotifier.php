<?php declare(strict_types=1);

namespace App;

/**
 * Class SmsNotifier
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class SmsNotifier
{
    public function send($to): void
    {
        echo 'Send SMS ' . $to . PHP_EOL;
    }
}