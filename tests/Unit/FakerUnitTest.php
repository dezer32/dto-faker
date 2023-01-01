<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Tests\Unit;

use DateTimeInterface;
use Dezer32\Libraries\Dto\Faker\Faker;
use Dezer32\Libraries\Dto\Faker\Tests\Fixtures\Dto\TestAttributedDto;
use Dezer32\Libraries\Dto\Faker\Tests\Fixtures\Dto\TestAttributedFakeCasterDto;
use Dezer32\Libraries\Dto\Faker\Tests\Fixtures\Dto\TestBaseTypeDto;
use Dezer32\Libraries\Dto\Faker\Tests\Fixtures\Dto\TestOptionalDto;
use Dezer32\Libraries\Dto\Faker\Tests\Fixtures\Dto\TestUpperInsteadDto;
use Dezer32\Libraries\Dto\Faker\Tests\Fixtures\Dto\TestUuidDto;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\UuidInterface;

use function PHPUnit\Framework\assertNotEmpty;

class FakerUnitTest extends TestCase
{
    public function testSuccessCanGenerateFakeWithBaseTyp(): void
    {
        $dto = Faker::fake(TestBaseTypeDto::class);

        self::assertIsString($dto->getString());
        self::assertIsInt($dto->getInt());
        self::assertIsFloat($dto->getFloat());
        self::assertIsArray($dto->getArray());
        self::assertIsBool($dto->isBool());
        self::assertInstanceOf(DateTimeInterface::class, $dto->getDateTime());
    }

    public function testSuccessCanGenerateFakeWithAttribute(): void
    {
        $dto = Faker::fake(TestAttributedDto::class);

        self::assertNotEmpty($dto->getString());
        self::assertNotEmpty($dto->getInt());

        self::assertEquals(10, $dto->getInt());
    }

    public function testSuccessCanGenerateFakeWithOptional(): void
    {
        $dto = Faker::fake(TestOptionalDto::class);

        self::assertNull($dto->getType1());
        self::assertNull($dto->getType2());
        self::assertNull($dto->getType3());
        self::assertNull($dto->getType4());
    }

    public function testSuccessCanGenerateFakeInstead(): void
    {
        $dto = Faker::fake(TestUpperInsteadDto::class);

        assertNotEmpty($dto->getDto()->getString());
    }

    public function testSuccessCanGenerateFakeUuid(): void
    {
        $dto = Faker::fake(TestUuidDto::class);

        self::assertInstanceOf(UuidInterface::class, $dto->getUuid());
    }

    public function testSuccessCanGenerateFakeWithCaster(): void
    {
        $dto = Faker::fake(TestAttributedFakeCasterDto::class);

        self::assertEquals('salt_test_string', $dto->getType()->getString());
    }
}