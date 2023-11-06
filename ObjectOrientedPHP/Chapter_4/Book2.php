<?php declare(strict_types=1);
require_once 'Model.php';

/**
 * Class Book2
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Book2 extends Model
{
    public static function getGroup(): string
    {
        return 'streamable';
    }
}