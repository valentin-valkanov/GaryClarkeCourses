<?php declare(strict_types=1);

namespace App;

use App\OldStuff\CsvFileWriter;
use App\OldStuff\FileWriter;

class CsvFileProcessor extends FileProcessor
{

    public function createFileWriter(): FileWriter
    {
        return new CsvFileWriter();
    }
}