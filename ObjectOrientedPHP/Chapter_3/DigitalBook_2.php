<?php declare(strict_types=1);


/**
 * Class DigitalBook_2
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class DigitalBook_2 extends Book
{

    /**
     * @param string $title
     * @param int $fileSize
     * @throws Exception
     */
    public function __construct(string $title, int $fileSize = 0)
    {
        parent::__construct($title);
        $this->fileSize = $fileSize;
    }

    /**
     * @return int
     */
    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    public function write(): string
    {
        return "Title: {$this->getTitle()}, file size: {$this->fileSize}";
    }


}