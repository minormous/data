<?php

namespace MinormousTests\Data\Traits;

use Minormous\Data\ArraySerializableInterface;
use Minormous\Data\Traits\ImmutableValueObjectTrait;

class NestedImmutableValueObject implements ArraySerializableInterface
{
    use ImmutableValueObjectTrait;

    private $parent;

    private function expects()
    {
        return [
            'parent' => ImmutableValueObject::class,
        ];
    }
}
