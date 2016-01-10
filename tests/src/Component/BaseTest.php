<?php

namespace MonkBlog\Component;

use PHPUnit_Framework_TestCase;


class BaseTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @group base
     */
    public function testTrue()
    {
        $this->assertTrue( true );
    }
}
