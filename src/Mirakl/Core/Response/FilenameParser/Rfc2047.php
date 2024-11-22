<?php

declare(strict_types=1);

namespace Mirakl\Core\Response\FilenameParser;

use Mirakl\Core\Response\FilenameParserInterface;

class Rfc2047 implements FilenameParserInterface
{
    /**
     * @inheritdoc
     */
    public function parse(string $value): ?string
    {
        // Try to match filename (RFC 2047, MIME format)
        preg_match('/filename="(=\?.+\?[QB]\?[^?]+\?=)"/', $value, $matches);

        if (!empty($matches[1])) {
            return iconv_mime_decode($matches[1]);
        }

        return null;
    }
}
