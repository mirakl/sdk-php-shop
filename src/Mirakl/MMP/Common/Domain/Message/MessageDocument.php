<?php
namespace Mirakl\MMP\Common\Domain\Message;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  \DateTime   getDateUploaded()
 * @method  $this       setDateUploaded(\DateTime $dateUploaded)
 * @method  string      getFileName()
 * @method  $this       setFileName(string $fileName)
 * @method  int         getFileSize()
 * @method  $this       setFileSize(int $fileSize)
 * @method  string      getId()
 * @method  $this       setId(string $id)
 * @method  string      getType()
 * @method  $this       setType(string $type)
 */
class MessageDocument extends MiraklObject
{}