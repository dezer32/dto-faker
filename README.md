# Faker DataTransferObject

Library for generate fake data for [dezer32/dto](https://github.com/dezer32/dto.git)

## Introduce

## Installation

### 1. Install package

```bash
composer require dezer32/dto-faker
```

### 2. Profit!

### P.S.:

If you used phpfaker/faker, then you can add provider:

```php
Dezer32\Libraries\Dto\Faker\Faker\FakerProvider::class
```

After useing:

```php
//for object:
$faker->fakeDto(Class::class, ['additional' => 'parameter']);

//only array:
$faker->fakeDtoArray(Class::class, ['additional' => 'parameter']);
```

## Usage

```php
<?php

$dto = Faker::fake(ClassNameDto::class);

// if you need additional parameters:
$dto = Faker::fake(ClassNameDto::class, ['additional' => 'parameters']);
```

## Customize

### Use library [fakerphp](https://fakerphp.github.io/)

```php
<?php

declare(strict_types=1);

use Dezer32\Libraries\Dto\DataTransferObject;
use Dezer32\Libraries\Dto\Faker\{
        Attributes\FieldFaker,
        Helpers\FakerMethod
    };

class SimpleDto extends DataTransferObject {
    public function __construct(
        #[FieldFaker(FakerMethod::NUMBER_BETWEEN, 10, 100)]
        private int $number
    ) {}
    
    public  function getNumber(): int{
        return $this->number;
    }
}
```

### Personal customize

We have any class:

```php

declare(strict_types=1);

use Dezer32\Libraries\Dto\DataTransferObject;use Dezer32\Libraries\Dto\Faker\Attributes\FieldFaker;use Dezer32\Libraries\Dto\Faker\Helpers\FakerMethod;

class AnyClass {
    public function __construct(
        ...$args
    ) {}
}
```

And we have simple DTO with this class:

```php
<?php

declare(strict_types=1);

use Dezer32\Libraries\Dto\DataTransferObject;
use Dezer32\Libraries\Dto\Faker\{
        Attributes\CastFieldFaker,
        Helpers\FakerMethod
    };

class SimpleDto extends DataTransferObject {
    public function __construct(
        #[CastFieldFaker(AnyClassFakeCaster::class, 'any_args')]
        private AnyClass $var 
    ) {}
    
    public  function getVar(): AnyClass{
        return $this->var;
    }
}
```

And we need caster:

```php
<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Tests\Fixtures;

use Dezer32\Libraries\Dto\Faker\Contracts\FakeCasterInterface;

class AnyClassFakeCaster implements FakeCasterInterface
{
    public function __construct(
        private string $param,
    ) {
    }

    public function generate(): AnyClass
    {
        return new AnyClass($this->param);
    }
}
```