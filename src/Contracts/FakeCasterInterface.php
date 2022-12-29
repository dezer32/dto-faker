<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Contracts;

interface FakeCasterInterface
{
    public function generate(): mixed;
}