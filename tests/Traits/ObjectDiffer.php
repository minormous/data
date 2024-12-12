<?php

namespace MinormousTests\Data\Traits;

use Minormous\Data\Traits\DiffableTrait;

class ObjectDiffer
{
    use DiffableTrait {
        diff as public;
    }
}
