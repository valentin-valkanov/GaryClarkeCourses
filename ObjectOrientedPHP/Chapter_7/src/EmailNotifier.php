<?php declare(strict_types=1);

namespace App;

/**
 * Class EmailNotifier
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class EmailNotifier
{
    public function send($to)
    {
        echo 'Send email ' . $to . PHP_EOL;
    }
}