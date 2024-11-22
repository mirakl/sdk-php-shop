<?php

declare(strict_types=1);

namespace Mirakl\Core\Response\FilenameParser;

use Mirakl\Core\Response\FilenameParserInterface;

class Legacy implements FilenameParserInterface
{
    /**
     * @inheritdoc
     */
    public function parse(string $value): ?string
    {
        // Try to match legacy formats (quoted or unquoted)
        preg_match('/filename="(.+)"|filename=([^;]+)/i', $value, $matches);

        if (!empty($matches[1])) {
            return stripslashes($matches[1]); // Quoted
        } elseif (!empty($matches[2])) {
            return $matches[2]; // Unquoted
        }

        return null;
    }
}
