<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Tests\Fixtures\Dto;

use Dezer32\Libraries\Dto\DataTransferObject;
use Dezer32\Libraries\Dto\Faker\Tests\Fixtures\EnumFixture;

class TestEnumDto extends DataTransferObject
{
    public function __construct(
        private EnumFixture $enum
    ) {
    }

    public function getEnum(): EnumFixture
    {
        return $this->enum;
    }
}