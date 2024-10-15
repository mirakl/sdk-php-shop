<?php

declare(strict_types=1);

namespace Mirakl\Core\Response\Decorator;

use Mirakl\Core\Response\ResponseDecoratorInterface;
use Psr\Http\Message\ResponseInterface;

use function Mirakl\array_format;

class CsvArray implements ResponseDecoratorInterface
{
    /**
     * @inheritdoc
     */
    public function decorate(ResponseInterface $response)
    {
        $data = [];

        /** @var \Mirakl\Core\Domain\FileWrapper $csvFile */
        if ($csvFile = (new File('csv'))->decorate($response)) {
            $file = $csvFile->getFile();
            $cols = $file->fgetcsv(); // First line contains columns

            while (!$file->eof()) {
                // Maps columns with values
                $data[] = array_combine($cols, array_format($file->fgetcsv()));
            }
        }

        return $data;
    }
}
