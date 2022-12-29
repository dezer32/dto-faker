<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Generators;

use Faker\Factory;
use Faker\Generator;

abstract class AbstractFakeGenerator implements FakeGeneratorInterface
{
    private const LOCALE = 'ru_RU';

    private Generator $faker;

    public function __construct(
        protected string $type
    ) {
    }

    protected function getFaker(): Generator
    {
        return $this->faker ??= Factory::create(self::LOCALE);
    }
}