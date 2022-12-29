<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Tests\Fixtures\Dto;

use Dezer32\Libraries\Dto\DataTransferObject;
use Dezer32\Libraries\Dto\Faker\Tests\Fixtures\AnotherTestType;

class TestOptionalDto extends DataTransferObject
{
    public function __construct(
        private ?AnotherTestType $type_1,
        private AnotherTestType|null $type_2,
        private ?AnotherTestType $type_3 = null,
        private AnotherTestType|null $type_4 = null,
    ) {
    }

    public function getType1(): ?AnotherTestType
    {
        return $this->type_1;
    }

    public function getType2(): ?AnotherTestType
    {
        return $this->type_2;
    }

    public function getType3(): ?AnotherTestType
    {
        return $this->type_3;
    }

    public function getType4(): ?AnotherTestType
    {
        return $this->type_4;
    }
}