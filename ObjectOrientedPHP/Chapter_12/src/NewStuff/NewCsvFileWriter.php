<?php
declare(strict_types=1);

namespace App\NewStuff;

class NewCsvFileWriter implements NewFileWriterInterface
{

    public function write($data): void
    {
        print PHP_EOL . 'Writing to CSV file... ' .PHP_EOL;

        sleep(1);
    }
}