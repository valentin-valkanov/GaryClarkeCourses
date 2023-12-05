<?php
declare(strict_types=1);

namespace App\OldStuff;
use App\OldStuff\FileWriter;
use App\Service;

class ExampleProcessor implements Service

{
    private FileWriter $fileWriter;

    public function __construct(FileWriter $fileWriter)
    {
        $this->fileWriter = $fileWriter;
    }

    public function process(array $data): bool
    {
        $result = $this->fileWriter->writeToFile($data);

        if (!$result) {
            throw new \Exception('Error writing to file');
        }

        // Continue processing
        print 'Continue processing...' . PHP_EOL;

        return true;
    }
}