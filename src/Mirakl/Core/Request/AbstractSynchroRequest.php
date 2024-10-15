<?php

declare(strict_types=1);

namespace Mirakl\Core\Request;

/**
 * @method string getSynchroId()
 * @method $this  setSynchroId(string $synchroId)
 */
abstract class AbstractSynchroRequest extends AbstractRequest
{
    /**
     * @var array
     */
    protected $uriVars = [
        '{synchro}' => 'synchro_id'
    ];

    /**
     * @param string $synchroId
     */
    public function __construct($synchroId)
    {
        parent::__construct();

        $this->setSynchroId($synchroId);
    }
}
