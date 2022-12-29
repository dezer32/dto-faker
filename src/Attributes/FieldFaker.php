<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Attributes;

use Attribute;
use Dezer32\Libraries\Dto\Faker\Generators\AbstractFakeGenerator;

#[Attribute(Attribute::TARGET_PARAMETER | Attribute::TARGET_PROPERTY)]
class FieldFaker extends AbstractFakeGenerator
{
    private array $args;

    public function __construct(
        protected string $type,
        ...$args
    ) {
        parent::__construct($this->type);
        $this->args = $args;
    }

    public function generate(): mixed
    {
        return $this->getFaker()->{$this->type}(...$this->args);
    }

    public static function isPossible(string $type): bool
    {
        return true;
    }
}