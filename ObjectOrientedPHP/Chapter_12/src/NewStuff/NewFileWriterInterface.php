<?php
declare(strict_types=1);
namespace App\NewStuff;

interface NewFileWriterInterface
{
    public function write($data): void;
}