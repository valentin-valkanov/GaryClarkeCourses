<?php declare(strict_types=1);

namespace App\MySQL;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\ORMSetup;

/**
 * Class Connection
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Connection
{
    private static ?self $instance = null;
    private EntityManager $entityManager;


    /**
     * @throws ORMException
     */
    private function __construct()
    {
        $config = ORMSetup::createAttributeMetadataConfiguration(
            paths: [\dirname(__DIR__)],
            isDevMode: true
        );

        $connection = [
            'url' => 'mysql://root:Vav_4155_valkanov@localhost:3306/doctrine-demo?charset=utf8mb4',
        ];

        $this->entityManager = EntityManager::create($connection, $config);
    }

    /**
     * @return Connection
     */
    public static function getInstance(): self
    {
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @return EntityManager
     */
    public function getEntityManager(): EntityManager
    {
        return $this->entityManager;
    }


}