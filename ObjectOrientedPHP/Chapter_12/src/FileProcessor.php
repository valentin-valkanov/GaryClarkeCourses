<?php declare(strict_types=1);

namespace App;

use App\OldStuff\FileWriter;

abstract class FileProcessor
{
    abstract public function createFileWriter(): FileWriter;

    public function process($data = [])
    {
         //obtain a file writer
        $fileWriter = $this->createFileWriter();

        print 'Doing some processing now... ' . PHP_EOL;

        //Now, use the product.
        return $fileWriter->writeToFile($data);
        }

}