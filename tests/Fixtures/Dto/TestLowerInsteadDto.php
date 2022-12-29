<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Tests\Fixtures\Dto;

use Dezer32\Libraries\Dto\DataTransferObject;

class TestLowerInsteadDto extends DataTransferObject
{
    public function __construct(
        private string $string
    ) {
    }

    public function getString(): string
    {
        return $this->string;
    }
}