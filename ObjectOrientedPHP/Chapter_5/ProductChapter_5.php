<?php declare(strict_types=1);

require_once 'RateableChapter_5.php';

/**
 * Class ProductChapter_5
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class ProductChapter_5
{
    use RateableChapter_5;

    public function __construct(private string $manufacturer,
                                private string $itemName,
                                private ProductWriter $productWriter)
    {
    }

    public function __call(string $methodName, array $arguments)
    {
        if(method_exists($this->productWriter, $methodName)){
           return $this->productWriter->$methodName($this);
        }
        return '';
    }

    public function getName():string
    {
        return $this->manufacturer . ' ' . $this->itemName;
    }


    public function __get(string $propertyName)
    {
        $methodName = "get$propertyName";

        if(method_exists($this, $methodName)){
            return $this->$methodName();
        }
    }

    public function __set(string $propertyName, $value): void
    {
        $methodName = 'set' . ucwords($propertyName);

            if(!method_exists($this, $methodName)){
                throw new BadMethodCallException($methodName . ' does not exist');
            }
            $this->$methodName($value);

    }
    public function __unset(string $propertyName): void
    {
        $this->__set($propertyName, null);
    }
}
