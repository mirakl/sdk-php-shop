<?php

declare(strict_types=1);

namespace Mirakl\Core\Response\FilenameParser;

use Mirakl\Core\Response\FilenameParserInterface;

class Rfc5987 implements FilenameParserInterface
{
    /**
     * @inheritdoc
     */
    public function parse(string $value): ?string
    {
        // Try to match filename* (RFC 5987)
        preg_match('/filename\*=(.+)\'[a-z]*\'(.+)/', $value, $matches);

        if (!empty($matches[2])) {
            return mb_convert_encoding(urldecode($matches[2]), 'UTF-8', $matches[1] ?? null);
        }

        return null;
    }
}
