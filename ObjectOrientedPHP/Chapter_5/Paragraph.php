<?php declare(strict_types=1);
require_once 'Paragraph.php';
require_once 'HtmlBlock.php';

/**
 * Class Paragraph
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Paragraph extends HtmlBlock
{

    public static function getOpeningTag(): string
    {
        return '<p>';
    }

    public static function getClosingTag(): string
    {
        return '</p>';
    }
}