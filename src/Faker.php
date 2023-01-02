<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker;

use Dezer32\Libraries\Dto\Faker\Reflections\FakeDtoClass;
use Dezer32\Libraries\Dto\Faker\Reflections\Field;

/**
 * @template T as object
 * @property class-string<T> $classname
 */
class Faker
{
    private FakeDtoClass $class;
    private array|null $attributes = null;

    private function __construct(
        private string $className,
    ) {
        $this->class = new FakeDtoClass($this->className);
    }

    /**
     * @template T as object
     *
     * @param class-string<T> $className
     *
     * @return T
     */
    public static function fake(string $className, array|null $attributes = null): object
    {
        $faker = new static($className);
        if ($attributes !== null) {
            $faker->with($attributes);
        }

        return $faker->make();
    }

    public static function builder(string $className): self
    {
        return (new static($className));
    }

    public function with(array $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @return T
     */
    public function make(): object
    {
        $array = $this->makeArray();

        return $this->class->make($array);
    }

    public function makeArray(): array
    {
        $array = [];

        $fields = $this->class->getFakerFields();
        foreach ($fields as $field) {
            $array[$field->getName()] = $this->getValue($field);
        }

        return $array;
    }

    private function getValue(Field $field): mixed
    {
        if (isset($this->attributes[$field->getName()])) {
            return $this->attributes[$field->getName()];
        }

        return $field->generate();
    }
}