<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Generators;

use Dezer32\Libraries\Dto\Faker\Faker;
use Dezer32\Libraries\Dto\Helpers\VerifyDto;

class DateTransferObjectFakeGenerator extends AbstractFakeGenerator
{
    public function generate(...$args): mixed
    {
        return Faker::fake($this->type);
    }

    public static function isPossible(string $type): bool
    {
        return VerifyDto::isDto($type);
    }
}