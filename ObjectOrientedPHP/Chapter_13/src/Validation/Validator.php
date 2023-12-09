<?php declare(strict_types=1);
namespace App\Validation;


use App\Validation\Rules\ValidationRuleInterface;
use ReflectionAttribute;
use ReflectionClass;

class Validator
{
    private array $errors = [];

    public function validate(object $object): void
    {
        // Instantiate a $reflector using new ReflectionClass($object);
        $reflector = new ReflectionClass($object);

        // Loop over the reflector properties
        foreach ($reflector->getProperties() as $property) {

            // Get the Attributes using $property->getAttributes(); (only if ValidationRuleInterface)
            $attributes = $property->getAttributes(
                ValidationRuleInterface::class,
                ReflectionAttribute::IS_INSTANCEOF
            );

            // Loop over the Attributes
            foreach ($attributes as $attribute){

            // Instantiate a PropertyValidator instance using $attribute->getValidator();
                $validator = $attribute->newInstance()->getValidator();  //It creates an object of the class Required (attribute)
                                                                         //and calling its method getValidator. Variable $validator
                                                                         // holds a validator which we don't know what is it (yet).
                                                                         // Another name for the variable should be better idea,
            // Ask IF the property does not validate
                if(!$validator->validate($property->getValue($object))){
                    $this->errors[$property->getName()][] = $validator->getMessage($property->getName());
                }
            }
        }
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}