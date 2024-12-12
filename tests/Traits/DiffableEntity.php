<?php

namespace MinormousTests\Data\Traits;

use Minormous\Data\DiffableInterface;
use Minormous\Data\Traits\DiffableEntityTrait;
use Minormous\Data\Traits\EntityTrait;

class DiffableEntity implements DiffableInterface
{
    use DiffableEntityTrait;
    use EntityTrait;

    private $id;
    private $name;
    private $role;
}
