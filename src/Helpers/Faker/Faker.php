<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Helpers\Faker;

use Dezer32\Libraries\Dto\Faker\Helpers\Faker\Providers\EnumProvider;
use Dezer32\Libraries\Dto\Faker\Helpers\Faker\Providers\UuidProvider;
use Faker\Factory;
use Faker\Generator;

final class Faker
{
    private const LOCALE = 'ru_RU';

    private static Generator $faker;

    public static function getFaker(string $locale = self::LOCALE): Generator
    {
        return self::$faker ??= self::makeFaker($locale);
    }

    private static function makeFaker(string $locale = self::LOCALE): Generator
    {
        $faker = Factory::create($locale);
        $faker->addProvider(UuidProvider::class);
        $faker->addProvider(EnumProvider::class);

        return $faker;
    }
}