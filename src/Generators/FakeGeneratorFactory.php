<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Generators;

class FakeGeneratorFactory
{
    private static array $generators = [
        TypehintFakeGenerator::class,
        DateTransferObjectFakeGenerator::class,
    ];

    public static function factory(string $type): ?FakeGeneratorInterface
    {
        /** @var class-string<FakeGeneratorInterface> $generator */
        foreach (self::$generators as $generator) {
            if ($generator::isPossible($type)) {
                return new $generator($type);
            }
        }

        return null;
    }
}