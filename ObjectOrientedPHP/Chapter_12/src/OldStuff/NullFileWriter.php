<?php
declare(strict_types=1);

namespace App\OldStuff;

class NullFileWriter extends FileWriter
{


    public function writeToFile(array $data): bool
    {
       //Do Nothing

        return true;
    }
}