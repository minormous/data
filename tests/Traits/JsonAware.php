<?php

namespace MinormousTests\Data\Traits;

use Minormous\Data\Traits\JsonAwareTrait;

class JsonAware
{
    use JsonAwareTrait;

    public $id;
    public $name;

    public function toArray()
    {
        return get_object_vars($this);
    }
}
