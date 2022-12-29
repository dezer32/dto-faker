<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Tests\Benchmark;

use Dezer32\Libraries\Dto\Faker\Faker;
use Dezer32\Libraries\Dto\Faker\Tests\Fixtures\Dto\TestAttributedDto;
use Dezer32\Libraries\Dto\Faker\Tests\Fixtures\Dto\TestAttributedFakeCasterDto;
use Dezer32\Libraries\Dto\Faker\Tests\Fixtures\Dto\TestBaseTypeDto;
use Dezer32\Libraries\Dto\Faker\Tests\Fixtures\Dto\TestOptionalDto;
use Dezer32\Libraries\Dto\Faker\Tests\Fixtures\Dto\TestUpperInsteadDto;

class FakeGeneratorBench
{
    public function benchFakeBaseType(): void
    {
        Faker::fake(TestBaseTypeDto::class);
    }

    public function benchFakeAttributed(): void
    {
        Faker::fake(TestAttributedDto::class);
    }

    public function benchFakeOptional(): void
    {
        Faker::fake(TestOptionalDto::class);
    }

    public function benchFakeInstead(): void
    {
        Faker::fake(TestUpperInsteadDto::class);
    }

    public function benchFakeCast(): void
    {
        Faker::fake(TestAttributedFakeCasterDto::class);
    }
}