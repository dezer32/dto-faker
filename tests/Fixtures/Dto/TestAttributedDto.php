<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Tests\Fixtures\Dto;

use Dezer32\Libraries\Dto\DataTransferObject;
use Dezer32\Libraries\Dto\Faker\Attributes\FieldFaker;
use Dezer32\Libraries\Dto\Faker\Helpers\FakerMethod;

class TestAttributedDto extends DataTransferObject
{
    public function __construct(
        #[FieldFaker(FakerMethod::TITLE_MALE)]
        private string $string,
        #[FieldFaker(FakerMethod::NUMBER_BETWEEN, 10, 10)]
        private int $int,
    ) {
    }

    public function getString(): string
    {
        return $this->string;
    }

    public function getInt(): int
    {
        return $this->int;
    }
}