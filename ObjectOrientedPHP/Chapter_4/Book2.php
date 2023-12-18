<?php declare(strict_types=1);
require_once 'Model.php';

class Book2 extends Model
{
    public static function getGroup(): string
    {
        return 'streamable';
    }
}