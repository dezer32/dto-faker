<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Generators;

use Dezer32\Libraries\Dto\Faker\Helpers\FakerMethod;

class TypehintFakeGenerator extends AbstractFakeGenerator
{
    private const RULES = [
        'string' => FakerMethod::REAL_TEXT,
        'int' => FakerMethod::RANDOM_DIGIT_NOT_NULL,
        'float' => FakerMethod::RANDOM_FLOAT,
        'array' => FakerMethod::WORDS,
        'bool' => FakerMethod::BOOLEAN,
        'DateTimeInterface' => FakerMethod::DATE_TIME,
    ];

    public function generate(): mixed
    {
        $method = self::RULES[$this->type];

        return $this->getFaker()->{$method}();
    }

    public static function isPossible(
        string $type
    ): bool {
        return array_key_exists($type, self::RULES);
    }
}