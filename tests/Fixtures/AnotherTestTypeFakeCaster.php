<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Tests\Fixtures;

use Dezer32\Libraries\Dto\Faker\Contracts\FakeCasterInterface;

class AnotherTestTypeFakeCaster implements FakeCasterInterface
{
    public function __construct(
        private string $salt,
    ) {
    }

    public function generate(): AnotherTestType
    {
        return new AnotherTestType($this->salt . '_test_string');
    }
}