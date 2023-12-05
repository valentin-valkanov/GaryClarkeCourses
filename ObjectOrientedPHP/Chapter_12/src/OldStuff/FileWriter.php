<?php
declare(strict_types=1);

namespace App\OldStuff;

use App\Service;

abstract class FileWriter implements Service
{
    abstract public function writeToFile(array $data): bool;
}