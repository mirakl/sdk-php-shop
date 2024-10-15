<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Product;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getDamUrl()
 * @method $this  setDamUrl(string $damUrl)
 * @method string getMediaUrl()
 * @method $this  setMediaUrl(string $mediaUrl)
 * @method string getMimeType()
 * @method $this  setMimeType(string $mimeType)
 * @method string getType()
 * @method $this  setType(string $type)
 */
class ProductMedia extends MiraklObject
{
    /**
     * @param string $mediaUrl
     * @param string $type
     * @param string $mimeType
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
        !isset($data['mime_type']) && $data['mime_type'] = null;

        return new static($data['media_url'], $data['type'], $data['mime_type']);
    }
}
