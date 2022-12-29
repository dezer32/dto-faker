<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Tests\Fixtures\Dto;

use DateTimeInterface;
use Dezer32\Libraries\Dto\DataTransferObject;

class TestBaseTypeDto extends DataTransferObject
{
    public function __construct(
        private string $string,
        private int $int,
        private float $float,
        private array $array,
        private bool $bool,
        private DateTimeInterface $dateTime
    ) {
    }

    public function getString(): string
    {
        return $this->string;
    }

    public function getInt(): int
    {
        return $this->int;
    }

    public function getFloat(): float
    {
        return $this->float;
    }

    public function getArray(): array
    {
        return $this->array;
    }

    public function isBool(): bool
    {
        return $this->bool;
    }

    public function getDateTime(): DateTimeInterface
    {
        return $this->dateTime;
    }
}