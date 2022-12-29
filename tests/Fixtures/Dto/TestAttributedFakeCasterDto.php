<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Tests\Fixtures\Dto;

use Dezer32\Libraries\Dto\DataTransferObject;
use Dezer32\Libraries\Dto\Faker\Attributes\CustFieldFaker;
use Dezer32\Libraries\Dto\Faker\Tests\Fixtures\AnotherTestType;
use Dezer32\Libraries\Dto\Faker\Tests\Fixtures\AnotherTestTypeFakeCaster;

class TestAttributedFakeCasterDto extends DataTransferObject
{
    public function __construct(
        #[CustFieldFaker(AnotherTestTypeFakeCaster::class, 'salt')]
        private AnotherTestType $type
    ) {
    }

    public function getType(): AnotherTestType
    {
        return $this->type;
    }
}