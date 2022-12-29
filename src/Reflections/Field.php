<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Reflections;

use Dezer32\Libraries\Dto\Faker\Attributes\CastFieldFaker;
use Dezer32\Libraries\Dto\Faker\Attributes\FieldFaker;
use Dezer32\Libraries\Dto\Faker\Factories\FakeGeneratorFactory;
use Dezer32\Libraries\Dto\Faker\Generators\FakeGeneratorInterface;
use Dezer32\Libraries\Dto\Reflections\Field\Property;

class Field
{
    private FakeGeneratorInterface|null $generator;

    public function __construct(
        private Property $field
    ) {
        $this->generator = $this->resolveGenerator();
    }

    public function getName(): string
    {
        return $this->field->getName();
    }

    public function generate(): mixed
    {
        return $this->generator?->generate();
    }

    private function resolveGenerator(): FakeGeneratorInterface|null
    {
        $generator = $this->field->getAttributeInstance(CastFieldFaker::class);

        if ($generator === null) {
            $generator = $this->field->getAttributeInstance(FieldFaker::class);
        }

        if ($generator === null) {
            $generator = $this->resolveGeneratorByType();
        }

        return $generator;
    }

    private function resolveGeneratorByType(): FakeGeneratorInterface|null
    {
        $types = $this->field->getTypes();

        $generator = null;

        foreach ($types as $type) {
            $generator = FakeGeneratorFactory::factory($type->getName());
            if ($generator !== null) {
                break;
            }
        }

        return $generator;
    }
}