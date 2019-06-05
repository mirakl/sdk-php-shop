<?php
namespace Mirakl\Core\Domain;

trait DownloadableTrait
{
    use FileTrait;

    /**
     * @return  void
     * @throws  \InvalidArgumentException
     */
    public function download()
    {
        if (!$this->file) {
            throw new \InvalidArgumentException('File is not set.');
        }

        header('Content-Type: ' . $this->contentType, true);
        $fileName = $this->fileName ?: uniqid('file_');
        if ($this->fileExtension) {
            $fileName .= '.' . $this->fileExtension;
        }
        header('Content-Disposition: attachment; filename="'. $fileName .'"', true);
        header('Pragma: public', true);
        header('Content-Length: ' . $this->file->fstat()['size'], true);
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0', true);

        ob_clean();
        $this->file->rewind();
        $this->file->fpassthru();
        exit;
    }
}