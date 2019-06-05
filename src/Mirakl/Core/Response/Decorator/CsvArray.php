<?php
namespace Mirakl\Core\Response\Decorator;

use Mirakl\Core\Response\ResponseDecoratorInterface;
use Psr\Http\Message\ResponseInterface;

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
                $data[] = array_combine($cols, \Mirakl\array_format($file->fgetcsv()));
            }
        }

        return $data;
    }
}