<?php

declare(strict_types=1);

namespace Mirakl\Core\Response;

class FilenameParser implements FilenameParserInterface
{
    /**
     * @var array
     */
    private array $parsers;

    /**
     * @param FilenameParserInterface[]|null $parsers
     */
    public function __construct(?array $parsers = null)
    {
        $this->parsers = $parsers ?? [
            new FilenameParser\Rfc5987(),
            new FilenameParser\Rfc2047(),
            new FilenameParser\Legacy(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function parse(string $value): ?string
    {
        foreach ($this->parsers as $parser) {
            if ($filename = $parser->parse($value)) {
                return $filename;
            }
        }

        return null;
    }
}
