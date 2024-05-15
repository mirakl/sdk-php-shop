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

        if (ob_get_length()) {
            ob_clean();
        }

        // Remove flags used to read CSV files because they can cause corruption with other file types (e.g. Excel)
        // when they are retrieved from Mirakl with a content type `text/csv`
        $this->file->setFlags(0);

        $this->file->rewind();
        $this->file->fpassthru();
        exit;
    }
}