<?php
namespace Mirakl\MMP\Common\Request\Message;

use Mirakl\Core\Client\ApiClientInterface;
use Mirakl\Core\Domain\FileWrapper;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Response\Decorator\FileTrait as FileResponseDecorator;

/**
 * (M13) Download an attachment
 *
 * @method  string      getAttachmentId()
 * @method  $this       setAttachmentId(string $attachmentId)
 * @method  FileWrapper run(ApiClientInterface $api)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Common\Request\Message\DownloadThreadMessageAttachmentRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new DownloadThreadMessageAttachmentRequest('ATTACHMENT_ID');
 * $result = $api->downloadThreadMessageAttachment($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * // Download file:
 * $result->download();
 * </code>
 */
class DownloadThreadMessageAttachmentRequest extends AbstractRequest
{
    use FileResponseDecorator;

    /**
     * @var string
     */
    protected $endpoint = '/inbox/threads/{attachment_id}/download';

    /**
     * @var array
     */
    protected $uriVars = [
        '{attachment_id}' => 'attachment_id',
    ];

    /**
     * @param   string  $attachmentId
     */
    public function __construct($attachmentId)
    {
        parent::__construct();
        $this->setAttachmentId($attachmentId);
    }
}