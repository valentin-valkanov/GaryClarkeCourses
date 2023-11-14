<?php declare(strict_types=1);

namespace App;

/**
 * Class EmailNotifier
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class EmailNotifier implements NotifierInterface
{
    public function send($to): void
    {
        echo 'Send email ' . $to . PHP_EOL;
    }
}