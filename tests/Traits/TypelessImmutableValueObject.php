<?php

namespace MinormousTests\Data\Traits;

use Minormous\Data\ArraySerializableInterface;
use Minormous\Data\Traits\ImmutableValueObjectTrait;

class TypelessImmutableValueObject implements ArraySerializableInterface
{
    use ImmutableValueObjectTrait;

    private $id;
    private $name;
}
