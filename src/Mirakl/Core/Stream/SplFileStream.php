<?php
namespace Mirakl\Core\Stream;

use Psr\Http\Message\StreamInterface;

class SplFileStream implements StreamInterface
{
    /**
     * @var \SplFileObject
     */
    private $file;

    /**
     * @param \SplFileObject $file
     */
    public function __construct(\SplFileObject $file)
    {
        $this->file = $file;
    }

    /**
     * @inheritdoc
     */
    public function read($length)
    {
        return $this->file->fread($length);
    }

    /**
     * @inheritdoc
     */
    public function __toString()
    {
        return $this->getContents();
    }

    /**
     * @inheritdoc
     */
    public function close()
    {
        $this->detach();
    }

    /**
     * @inheritdoc
     */
    public function detach()
    {
        $this->file = null;

        return null;
    }

    /**
     * @return \SplFileObject
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @inheritdoc
     */
    public function getSize()
    {
        return $this->file->fstat()['size'];
    }

    /**
     * @inheritdoc
     */
    public function tell()
    {
        return $this->file->ftell();
    }

    /**
     * @inheritdoc
     */
    public function eof()
    {
        return $this->file->eof();
    }

    /**
     * @inheritdoc
     */
    public function isSeekable()
    {
        return $this->file !== null;
    }

    /**
     * @inheritdoc
     */
    public function seek($offset, $whence = SEEK_SET)
    {
        $this->file->fseek($offset, $whence);
    }

    /**
     * @inheritdoc
     */
    public function rewind()
    {
        $this->file->rewind();
    }

    /**
     * @inheritdoc
     */
    public function isWritable()
    {
        return $this->file->isWritable();
    }

    /**
     * @inheritdoc
     */
    public function write($string)
    {
        return $this->file->fwrite($string);
    }

    /**
     * @inheritdoc
     */
    public function isReadable()
    {
        return $this->file->isReadable();
    }

    /**
     * @inheritdoc
     */
    public function getContents()
    {
        $result = '';
        $this->rewind();
        while (!$this->eof()) {
            $result .= $this->read(1024 * 1024);
        }

        return $result;
    }

    /**
     * @inheritdoc
     */
    public function getMetadata($key = null)
    {
        $meta = $this->file->fstat();

        return null === $key
            ? $meta
            : ($meta[$key] ?? null);
    }
}