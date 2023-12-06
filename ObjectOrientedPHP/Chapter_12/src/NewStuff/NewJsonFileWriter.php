<?php declare(strict_types=1);

namespace App\NewStuff;


class NewJsonFileWriter implements NewFileWriterInterface
{
    public function write($data): void
    {
        print PHP_EOL . 'Writing to JSON file... ' . PHP_EOL;

        sleep(1);
    }
}


