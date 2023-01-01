<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Attributes;

use Attribute;
use Dezer32\Libraries\Dto\Faker\Generators\FakeGeneratorInterface;
use Dezer32\Libraries\Dto\Faker\Helpers\Faker\PhpFaker;

#[Attribute(Attribute::TARGET_PARAMETER | Attribute::TARGET_PROPERTY)]
class FieldFaker implements FakeGeneratorInterface
{
    private array $args;

    public function __construct(
        protected string $type,
        ...$args
    ) {
        $this->args = $args;
    }

    public function generate(): mixed
    {
        return PhpFaker::getFaker()->{$this->type}(...$this->args);
    }

    public static function isPossible(string $type): bool
    {
        return true;
    }
}