<?php declare(strict_types=1);

namespace App;

/**
 * Class SmsNotifier
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class SmsNotifier implements NotifierInterface
{
    public function send($to): void
    {
        echo 'Sending SMS to ' . $to . PHP_EOL;
    }
}