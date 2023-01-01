<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Generators;

use Dezer32\Libraries\Dto\Faker\Helpers\Faker\PhpFaker;
use MyCLabs\Enum\Enum;

/**
 * @template TEnum of Enum
 */
class EnumFakeGenerator implements FakeGeneratorInterface
{
    public function __construct(
        /** @var class-string<TEnum> $type */
        private string $type
    ) {
    }

    /**
     * @return TEnum
     */
    public function generate(): Enum
    {
        return PhpFaker::getFaker()->randomEnum($this->type);
    }

    public static function isPossible(string $type): bool
    {
        return is_subclass_of($type, Enum::class);
    }
}