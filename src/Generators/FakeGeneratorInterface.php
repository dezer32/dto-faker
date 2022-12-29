<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Generators;

interface FakeGeneratorInterface
{
    public function generate(): mixed;

    public static function isPossible(string $type): bool;
}