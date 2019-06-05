<?php
namespace Mirakl\MMP\Common\Domain\Product;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getMediaUrl()
 * @method  $this   setMediaUrl(string $mediaUrl)
 * @method  string  getType()
 * @method  $this   setType(string $type)
 * @method  string  getMimeType()
 * @method  $this   setMimeType(string $mimeType)
 */
class ProductMedia extends MiraklObject
{
    /**
     * @param   string  $mediaUrl
     * @param   string  $type
     * @param   string  $mimeType
     */
    public function __construct($mediaUrl, $type, $mimeType)
    {
        parent::__construct();
        $this->setMediaUrl($mediaUrl);
        $this->setType($type);
        $this->setMimeType($mimeType);
    }

    /**
     * @inheritdoc
     */
    public static function create(array $data = [])
    {
        return new static($data['media_url'], $data['type'], $data['mime_type']);
    }
}