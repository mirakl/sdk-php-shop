<?php

declare(strict_types=1);

namespace Mirakl\Core\Request;

use Mirakl\Core\Client\ApiClientInterface;

abstract class AbstractFileUrlRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $fileUrl;

    /**
     * @param string $fileUrl
     */
    public function __construct($fileUrl)
    {
        parent::__construct();

        $this->setFileUrl($fileUrl);
    }

    /**
     * @param string $fileUrl
     */
    public function setFileUrl($fileUrl)
    {
        $this->fileUrl = (string) $fileUrl;
    }

    /**
     * @inheritdoc
     */
    public function run(ApiClientInterface $api)
    {
        return $this->getResponseDecorator()->decorate(
            $api->getClient()->get($this->fileUrl)
        );
    }
}
