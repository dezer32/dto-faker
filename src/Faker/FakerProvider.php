<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Faker;

use Dezer32\Libraries\Dto\Faker\Faker;
use Dezer32\Libraries\Dto\Helpers\VerifyDto;
use Faker\Provider\Base;
use InvalidArgumentException;

class FakerProvider extends Base
{
    /**
     * A fake instance of the dto you pass in.
     *
     * @template T as object
     *
     * @param class-string<T> $class
     *
     * @return T
     */
    public static function fakeDto(string $class, array|null $attributes = null): object
    {
        if (VerifyDto::isDto($class) === false) {
            throw new InvalidArgumentException(
                sprintf(
                    'You have to pass the FQCN of a "DTO" class but you passed "%s".',
                    $class
                )
            );
        }

        return Faker::fake($class, $attributes);
    }

    /**
     * A fake array of the dto you pass in.
     *
     * @param class-string $class
     */
    public static function fakeDtoArray(string $class, array|null $attributes = null): array
    {
        if (VerifyDto::isDto($class) === false) {
            throw new InvalidArgumentException(
                sprintf(
                    'You have to pass the FQCN of a "DTO" class but you passed "%s".',
                    $class
                )
            );
        }

        return Faker::builder($class)->with($attributes)->makeArray();
    }
}