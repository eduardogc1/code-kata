<?php

namespace CodeKata\Tests\ProjectEuler;

use PHPUnit\Framework\TestCase;
use CodeKata\ProjectEuler\MultiplesOf3or5;

class MultiplesOf3or5Test extends TestCase
{
    /** @var MultiplesOf3or5 */
    private $obj;

    public function setUp(): void
    {
        $this->obj = new MultiplesOf3or5();
    }

    public function test_hello_world()
    {
        self::assertEquals("Hello, World!", $this->obj->hello_world());
    }
}