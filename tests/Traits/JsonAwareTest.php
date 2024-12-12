<?php

namespace MinormousTests\Data\Traits;

class JsonAwareTest extends \PHPUnit\Framework\TestCase
{
    public function testJson()
    {
        $object = new JsonAware;

        $object->id = 1;
        $object->name = 'Test Case';

        $json = json_encode($object);

        $this->assertJson($json, $object);

        $data = json_decode($json, true);

        $this->assertArrayHasKey('id', $data);
        $this->assertArrayHasKey('name', $data);

        $this->assertSame($object->id, $data['id']);
        $this->assertSame($object->name, $data['name']);

    }
}
