<?php declare(strict_types=1);
require_once 'FileNotFoundException.php';

/**
 * Class JasonFileReader
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class JasonFileReader
{
    /**
     * @throws JsonException
     * @throws FileNotFoundException
     */
    public function readFileAsAssociativeArray(string $filename):array
    {
        if(!file_exists($filename)){
            throw new FileNotFoundException('File could not be found');
        }
        $content = file_get_contents($filename);
        $items = json_decode($content, true, JSON_THROW_ON_ERROR, JSON_THROW_ON_ERROR);

        return $items;
    }
}