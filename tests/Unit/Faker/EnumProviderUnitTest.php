<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Tests\Unit\Faker;

use Dezer32\Libraries\Dto\Faker\Helpers\Faker\Providers\EnumProvider;
use Dezer32\Libraries\Dto\Faker\Tests\Fixtures\EnumFixture;
use Faker\Factory;
use Faker\Generator;
use PHPUnit\Framework\TestCase;

class EnumProviderUnitTest extends TestCase
{
    /** @var Generator */
    private $faker;

    public function testSuccessCanFakeEnum(): void
    {
        /** @var EnumFixture $value */
        $value = $this->faker->randomEnum(EnumFixture::class);

        self::assertContains($value->getKey(), EnumFixture::keys());
        self::assertContains($value->getValue(), EnumFixture::toArray());
    }

    public function testSuccessCanFakeEnumValue(): void
    {
        /** @var EnumFixture $value */
        $value = $this->faker->randomEnumValue(EnumFixture::class);

        self::assertContains($value, EnumFixture::toArray());
    }

    public function testSuccessCanFakeEnumKey(): void
    {
        /** @var EnumFixture $value */
        $value = $this->faker->randomEnumKey(EnumFixture::class);

        self::assertContains($value, EnumFixture::keys());
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->faker = Factory::create();
        $this->faker->addProvider(EnumProvider::class);
    }
}