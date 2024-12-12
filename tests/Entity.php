<?php

namespace MinormousTests\Data;

use Minormous\Data\Traits\EntityTrait;
use Minormous\Data\EntityInterface;

class Entity implements EntityInterface
{
    use EntityTrait;

    private $id;
    private $name;
    private $created_at;

    private function types()
    {
        return [
            'id'   => 'int',
            'name' => 'string',
        ];
    }
}
