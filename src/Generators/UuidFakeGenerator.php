<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Generators;

use Dezer32\Libraries\Dto\Faker\Helpers\Faker\PhpFaker;
use Ramsey\Uuid\UuidInterface;

class UuidFakeGenerator implements FakeGeneratorInterface
{
    public function generate(): UuidInterface
    {
        return PhpFaker::getFaker()->uuid();
    }

    public static function isPossible(string $type): bool
    {
        return is_subclass_of($type, UuidInterface::class) || $type === UuidInterface::class;
    }
}