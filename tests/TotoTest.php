<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class TotoTest extends TestCase
{
    public function testGetContent(): void
    {
        TestCase::assertEquals('toto', (new \Toto())->getContent());
    }
}
