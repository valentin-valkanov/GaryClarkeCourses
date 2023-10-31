<?php declare(strict_types=1);

require_once 'Printable.php';
/**
 * Class Connection
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Connection
{
    use Printable;
    /**
     * @var int
     */
    private static int $count = 0;

    public function __construct()
    {
        self::$count++;
    }

    /**
     * @return int
     */
    public static function getCount(): int
    {
        return self::$count;
    }

    /**
     * @return string
     */


}