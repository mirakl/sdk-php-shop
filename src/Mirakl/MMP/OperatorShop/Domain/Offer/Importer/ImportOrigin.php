<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\Offer\Importer;

class ImportOrigin
{
    public const API            = 'API';
    public const FTP            = 'FTP';
    public const SFTP           = 'SFTP';
    public const HTTP           = 'HTTP';
    public const HTTPS          = 'HTTPS';
    public const FRONT          = 'FRONT';
    public const PENDING_OFFERS = 'PENDING_OFFERS';
}
