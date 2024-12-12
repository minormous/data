<?php

namespace Minormous\Data\Traits;

/**
 * Intended to be used by classes implementing Minormous\Data\EntityInterface that
 * also need to implement Minormous\Data\DiffableInterface.
 */
trait DiffableEntityTrait /* implements DiffableInterface */
{
    /**
     * @see \Minormous\Data\EntityInterface::withData()
     *
     * @param array $data
     *
     * @return static
     */
    abstract public function withData(array $data);

    /**
     * @see \Minormous\Data\ArraySerializableInterface::toArray()
     *
     * @return array
     */
    abstract public function toArray();

    /**
     * @param array $values
     *
     * @return array
     */
    public function diff(array $values)
    {
        $copy = $this->withData($values);
        return array_diff_assoc($copy->toArray(), $this->toArray());
    }
}
