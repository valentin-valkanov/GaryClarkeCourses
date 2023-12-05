<?php declare(strict_types=1);

namespace App;

class RemoveDisallowedHtmlElementsStrategy implements ContentFilterStrategyInterface
{
    public function filter(string $content): string
    {
        return strip_tags($content, ['<p>', '<a>']);
    }
}