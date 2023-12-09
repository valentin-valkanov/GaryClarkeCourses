<?php declare(strict_types=1);

namespace App\DTO;

use App\Validation\Rules\Email;
use App\Validation\Rules\Length;
use App\Validation\Rules\Required;


class UserRegistration
{
    public function __construct(
        #[Required, Length(5, 10)]
        readonly public string $username,
        #[Required, Email]
        readonly public string $email)
    {
    }
}