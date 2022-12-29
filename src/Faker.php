<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker;

use Dezer32\Libraries\Dto\Faker\Reflections\FakingDtoClass;

class Faker
{
    /**
     * @template T as object
     *
     * @param class-string<T> $className
     *
     * @return T
     */
    public static function fake(string $className): object
    {
        $class = new FakingDtoClass($className);

        $array = [];
        foreach ($class->getFakerFields() as $field) {
            $array[$field->getName()] = $field->generate();
        }

        return $class->make($array);
    }
}