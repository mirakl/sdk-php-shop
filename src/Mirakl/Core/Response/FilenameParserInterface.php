<?php

declare(strict_types=1);

namespace Mirakl\Core\Response;

interface FilenameParserInterface
{
    /**
     * @param string $value
     * @return string|null
     */
    public function parse(string $value): ?string;
}
