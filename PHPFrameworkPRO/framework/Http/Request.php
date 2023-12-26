<?php declare(strict_types=1);

namespace GaryClarke\Framework\Http;

class Request
{
    public function __construct(
        //$_GET, $_POST, $_COOKIE, $_FILES, $_SERVER
        public readonly array $getParams,
        public readonly array $postParams,
        public readonly array $cookie,
        public readonly array $files,
        public readonly array $server
    )

    {
    }

    public static function createFromGlobals(): static
    {
        return new static($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);
    }
}