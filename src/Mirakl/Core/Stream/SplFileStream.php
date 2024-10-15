<?php

declare(strict_types=1);

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
    public function read($length): string
    {
        return $this->file->fread($length);
    }

    /**
     * @inheritdoc
     */
    public function __toString(): string
    {
        return $this->getContents();
    }

    /**
     * @inheritdoc
     */
    public function close(): void
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
    public function getFile(): \SplFileObject
    {
        return $this->file;
    }

    /**
     * @inheritdoc
     */
    public function getSize(): ?int
    {
        return $this->file->fstat()['size'];
    }

    /**
     * @inheritdoc
     */
    public function tell(): int
    {
        return $this->file->ftell();
    }

    /**
     * @inheritdoc
     */
    public function eof(): bool
    {
        return $this->file->eof();
    }

    /**
     * @inheritdoc
     */
    public function isSeekable(): bool
    {
        return $this->file !== null;
    }

    /**
     * @inheritdoc
     */
    public function seek($offset, $whence = SEEK_SET): void
    {
        $this->file->fseek($offset, $whence);
    }

    /**
     * @inheritdoc
     */
    public function rewind(): void
    {
        $this->file->rewind();
    }

    /**
     * @inheritdoc
     */
    public function isWritable(): bool
    {
        return $this->file->isWritable();
    }

    /**
     * @inheritdoc
     */
    public function write($string): int
    {
        return $this->file->fwrite($string);
    }

    /**
     * @inheritdoc
     */
    public function isReadable(): bool
    {
        return $this->file->isReadable();
    }

    /**
     * @inheritdoc
     */
    public function getContents(): string
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
