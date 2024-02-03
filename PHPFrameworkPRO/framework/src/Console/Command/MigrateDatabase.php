<?php declare(strict_types=1);

namespace GaryClarke\Framework\Console\Command;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;

class MigrateDatabase implements CommandInterface
{
    private string $name = 'database:migrations:migrate';

    public function __construct(private Connection $connection)
    {
    }

    public function execute(array $params = []): int
    {
        // Create a migrations table SQL if table not already in existence
        $this->createMigrationsTable();

        // Get $appliedMigrations which are already in the database.migrations table

        // Get the $migrationFiles from the migrations folder

        // Get the migrations to apply. i.e. they are in $migrationFiles but not in $appliedMigrations

        // Create SQL for any migrations which have not been run .i.e. which are not in the database

        // Add migration to database

        // Execute the SQL query

        return 0;
    }

    private function createMigrationsTable(): void
    {
        $schemaManager = $this->connection->createSchemaManager();

        if(!$schemaManager->tablesExist('migrations')){
            $schema = new Schema();
            $table = $schema->createTable('migrations');
            $table->addColumn('id', Types::INTEGER, ['unsigned' => true, 'autoincrement' => true]);
            $table->addColumn('migration', Types::STRING);
            $table->addColumn('created_at', Types::DATETIME_IMMUTABLE, ['default' => 'CURRENT_TIMESTAMP']);
            $table->setPrimaryKey(['id']);

            $sqlArray = $schema->toSql($this->connection->getDatabasePlatform());
            $this->connection->executeQuery($sqlArray[0]);

            echo 'migrations table created' . PHP_EOL;
        }
    }
}