<?php declare(strict_types=1);

namespace MySql;

/**
 * Class Connection
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Connection
{
    private string $dsn = 'mysql:dsn';

    public function connect(): string
    {
        return 'Connecting to ' . $this->dsn;
    }
}