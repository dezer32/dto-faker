<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Tests\Unit\Faker;

use Dezer32\Libraries\Dto\Faker\Helpers\Faker\Providers\UuidProvider;
use Faker\Factory;
use Faker\Generator;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\UuidInterface;

class UuidProviderUnitTest extends TestCase
{
    private Generator $faker;

    public function testSuccessCanMakeUuid(): void
    {
        $uuid = $this->faker->uuid();

        self::assertInstanceOf(UuidInterface::class, $uuid);
    }

    public function testSuccessCanMakeUuidAsField(): void
    {
        $uuid = $this->faker->uuid;

        self::assertInstanceOf(UuidInterface::class, $uuid);
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->faker = Factory::create();
        $this->faker->addProvider(UuidProvider::class);
    }
}