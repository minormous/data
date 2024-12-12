<?php

namespace MinormousTests\Data\Traits;

class SerializeAwareTest extends \PHPUnit\Framework\TestCase
{
    public function testSerialize()
    {
        $object = new SerializeAware;

        $object->id = 1;
        $object->name = 'Test Case';

        $frozen = serialize($object);

        $this->assertInternalType('string', $frozen);

        $thawed = unserialize($frozen);

        $this->assertNotSame($object, $thawed);

        $this->assertSame($object->id, $thawed->id);
        $this->assertSame($object->name, $thawed->name);
    }
}
