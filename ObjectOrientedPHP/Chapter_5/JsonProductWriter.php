<?php declare(strict_types=1);


require_once 'ProductWriter.php';
class JsonProductWriter implements ProductWriter
{

    public function write(ProductChapter_5 $product): string
    {
        return json_encode(['name' => $product->getName()], JSON_THROW_ON_ERROR);
    }
}