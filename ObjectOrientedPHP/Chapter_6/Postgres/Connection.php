<?php declare(strict_types=1);

namespace Postgres;
/**
 * Class Connection
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */

class Connection
{
    private string $dsn = 'postgresql:dsn';

    public function connect(): string
    {
        return 'Connecting to ' . $this->dsn;
    }
}
