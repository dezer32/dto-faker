<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Helpers;

use Faker\Factory;
use Faker\Generator;

final class Faker
{
    private const LOCALE = 'ru_RU';

    private static Generator $faker;

    public static function getFaker(string $locale = self::LOCALE): Generator
    {
        return self::$faker ??= Factory::create($locale);
    }
}