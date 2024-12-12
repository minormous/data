<?php

namespace Minormous\Data\Traits;

trait SerializeAwareTrait /* implements Serializable */
{
    /**
     * @see \Minormous\Data\EntityInterface::toArray()
     *
     * @return array
     */
    abstract public function toArray();

    /**
     * @inheritDoc
     */
    public function serialize()
    {
        return serialize($this->toArray());
    }

    /**
     * @see \Minormous\Data\Traits\ImmutableValueObjectTrait::apply()
     *
     * @inheritDoc
     */
    public function unserialize($data)
    {
        $this->apply(unserialize($data));
    }
}
