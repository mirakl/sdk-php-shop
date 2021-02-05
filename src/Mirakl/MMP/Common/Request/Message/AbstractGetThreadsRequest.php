<?php
namespace Mirakl\MMP\Common\Request\Message;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\SeekableTrait;
use Mirakl\Core\Request\SortableTrait;
use Mirakl\Core\Response\Decorator\SeekableCollection;
use Mirakl\MMP\Common\Domain\Collection\Message\Thread\ThreadCollection;

/**
 * (M11) List all threads (this resource supports seek pagination)
 *
 * @method  array   getEntityId()
 * @method  $this   setEntityId(array $entityId)
 * @method  string  getEntityType()
 * @method  $this   setEntityType(string $entityType)
 */
abstract class AbstractGetThreadsRequest extends AbstractRequest
{
    use SeekableTrait;
    use SortableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/inbox/threads';

    /**
     * @var array
     */
    public $queryParams = [
        'entity_type',
        'entity_id',
    ];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new SeekableCollection(ThreadCollection::class, 'data');
    }
}