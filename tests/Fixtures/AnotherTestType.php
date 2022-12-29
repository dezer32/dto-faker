<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Tests\Fixtures;

class AnotherTestType
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