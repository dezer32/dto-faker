<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Attributes;

use Attribute;
use Dezer32\Libraries\Dto\Faker\Contracts\FakeCasterInterface;
use Dezer32\Libraries\Dto\Faker\Exceptions\InvalidFakeCasterClassException;
use Dezer32\Libraries\Dto\Faker\Generators\FakeGeneratorInterface;

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_PARAMETER)]
class CustFieldFaker implements FakeGeneratorInterface
{
    private array $args;

    public function __construct(
        private string $casterClass,
        ...$args
    ) {
        if (!is_subclass_of($this->casterClass, FakeCasterInterface::class)) {
            throw new InvalidFakeCasterClassException($this->casterClass);
        }

        $this->args = $args;
    }

    public function generate(): mixed
    {
        return $this->getCaster()->generate();
    }

    public static function isPossible(string $type): bool
    {
        return true;
    }

    private function getCaster(): FakeCasterInterface
    {
        return new $this->casterClass(...$this->args);
    }
}