<?php declare(strict_types=1);

use JetBrains\PhpStorm\Pure;


/**
 * Class Model
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
abstract class Model
{
    private string $group;

    #[Pure]
    public function __construct()
    {
        $this->group = static::getGroup();
    }

    /**
     * @return Model
     */
    #[Pure]
    public static function create():Model
    {
        return new static();
    }

    public static function getGroup(): string
    {
        return 'default';
    }
}