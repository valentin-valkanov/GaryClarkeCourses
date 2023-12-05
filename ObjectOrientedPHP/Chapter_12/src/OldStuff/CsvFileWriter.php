<?php declare(strict_types=1);

namespace App\OldStuff;

class CsvFileWriter extends FileWriter
{

    public function writeToFile(array $data): bool
    {
        print PHP_EOL . 'Writing to CSV file...' . PHP_EOL;

        sleep(1);

        return true;
    }
}