<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Helpers\Faker\Providers;

use Faker\Provider\Uuid as BaseUuidProvider;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class UuidProvider extends BaseUuidProvider
{
    public static function uuid(): UuidInterface
    {
        return Uuid::fromString(parent::uuid());
    }
}