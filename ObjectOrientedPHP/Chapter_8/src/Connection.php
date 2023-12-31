<?php
declare(strict_types=1);
namespace App;
use PDO;
use PDOException;

class Connection
{
    private static ?Connection $instance = null;
    private PDO $pdo;
    private string $host = 'localhost';
    private string $dbname = 'chapter_8';
    private string $charset = 'utf8mb4';
    private const OPTIONS = [
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    private function __construct()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}";
        try{
            $this->pdo = new PDO($dsn, 'root', 'Vav_4155_valkanov', self::OPTIONS);

        }catch (PDOException $exception){
            throw new PDOException($exception->getMessage(), (int) $exception->getCode());
        }
    }

    public static function getInstance(): self
    {
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getPdo(): ?PDO
    {
        return $this->pdo;
    }
}