<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Tests\Fixtures\Dto;

use Dezer32\Libraries\Dto\DataTransferObject;
use Ramsey\Uuid\UuidInterface;

class TestUuidDto extends DataTransferObject
{
    public function __construct(
        private UuidInterface $uuid
    ) {
    }

    public function getUuid(): UuidInterface
    {
        return $this->uuid;
    }
}
