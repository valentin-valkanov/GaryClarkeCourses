<?php declare(strict_types=1);


/**
 * Class JsonProductWriter
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */

require_once 'ProductWriter.php';
class JsonProductWriter implements ProductWriter
{

    public function write(ProductChapter_5 $product): string
    {
        return json_encode(['name' => $product->getName()], JSON_THROW_ON_ERROR);
    }
}