<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Inbox\CreateInboxThreads;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getType()
 * @method $this  setType(string $type)
 * @method string getValue()
 * @method $this  setValue(string $value)
 */
class Topic extends MiraklObject
{
    /**
     * @var string
     */
    public static $type = '';

    /**
     * @inheritdoc
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);
        if (static::$type !== '') {
            $this->setData('type', static::$type);
        }
    }

    /**
     * @param array $info
     * @return Topic
     */
    public static function factory(array $info)
    {
        return match ($info['type'] ?? null) {
            FreeTextTopic::$type   => new FreeTextTopic($info),
            ReasonCodeTopic::$type => new ReasonCodeTopic($info),
            default                => new Topic($info),
        };
    }
}
