<?php declare(strict_types=1);

namespace GaryClarke\Framework\Console\Command;

class MigrateDatabase implements CommandInterface
{
    public string $name = 'database:migrations:migrate';

    public function execute(array $params = []): int
    {
        echo 'Executing MigrateDatabase command' . PHP_EOL;

        return 0;
    }
}