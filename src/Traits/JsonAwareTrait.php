<?php

namespace Minormous\Data\Traits;

trait JsonAwareTrait /* implements JsonSerializable */
{
    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }
}
