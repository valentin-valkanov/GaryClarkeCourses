<?php
declare(strict_types=1);

namespace App\NewStuff;
use App\OldStuff\FileWriter;

/**
 * Extend the old, inject the new
 */
class NewFileWriterAdapter extends FileWriter
{
    private NewFileWriterInterface $fileWriter;

    public function __construct(NewFileWriterInterface $fileWriter)
    {
        $this->fileWriter = $fileWriter;
    }

    public function writeToFile(array $data): bool
    {
        $this->fileWriter->write($data);

        return true;
    }
}