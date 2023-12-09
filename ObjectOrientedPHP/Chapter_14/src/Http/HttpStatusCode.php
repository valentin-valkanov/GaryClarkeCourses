<?php
namespace App\Http;

enum HttpStatusCode: int
{
    case Ok = 200;
    case Created = 201;
    case BadRequest = 400;
    case LargeHeaders = 431;
    case Forbidden = 403;
    case InternalServerError = 500;

    public function message(): string
    {
        return match ($this){
            self::Ok => 'Success',
            self::Created => 'Resource Created',
            self::BadRequest => 'Bad Request',
            self::LargeHeaders => 'Request Header Fields Too Large',
            self::Forbidden => 'Forbidden Request',
            self::InternalServerError => 'Internal Server Error',
        };
    }
}