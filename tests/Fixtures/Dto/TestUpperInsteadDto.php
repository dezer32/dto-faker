<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Tests\Fixtures\Dto;

use Dezer32\Libraries\Dto\DataTransferObject;

class TestUpperInsteadDto extends DataTransferObject
{
    public function __construct(
        private ?TestLowerInsteadDto $dto = null
    ) {
    }

    public function getDto(): TestLowerInsteadDto
    {
        return $this->dto;
    }
}