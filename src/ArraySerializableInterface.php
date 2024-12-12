<?php

namespace Minormous\Data;

interface ArraySerializableInterface
{
    /**
     * Get the values of the object as an array
     *
     * @return array
     */
    public function toArray();
}
