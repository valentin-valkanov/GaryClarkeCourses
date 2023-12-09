<?php declare(strict_types=1);

namespace App\Validation\Validators;

class EmailValidator implements ValidatorInterface
{
    public function validate($value): bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }

    public function getMessage(string $name):string
    {
       return $name . ' is not a valid email address';
    }
}