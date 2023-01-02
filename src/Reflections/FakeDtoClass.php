<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Reflections;

use Dezer32\Libraries\Dto\Reflections\DtoClass\DtoClass;

class FakeDtoClass extends DtoClass
{
    /** @var Field[] */
    private array $fields;

    /**
     * @return Field[]
     */
    public function getFakerFields(): array
    {
        if (!isset($this->fields)) {
            $fields = $this->getProperties();

            $this->fields = [];
            foreach ($fields as $field) {
                $this->fields[] = new Field($field);
            }
        }

        return $this->fields;
    }
}