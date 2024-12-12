<?php

namespace MinormousTests\Data\Traits;

use Minormous\Data\DiffableInterface;

class Diffable implements DiffableInterface
{
    public $id;
    public $name;

    // DiffableInterface
    public function diff(array $values)
    {
        return array_diff_assoc($values, $this->toArray());
    }

    public function toArray()
    {
        return get_object_vars($this);
    }
}
