<?php declare(strict_types=1);

namespace App;

/**
 * Class Notifier
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
abstract class Notifier
{
    abstract public function send($to);
}