<?php

namespace Krak\Tests;

use Krak\KeyGenerator\ShuffledAlphabetKeyGenerator;

class ShuffledAlphabetKeyGeneratorTest extends \PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $this->assertInstanceOf(
            ShuffledAlphabetKeyGenerator::class,
            new ShuffledAlphabetKeyGenerator()
        );
    }

    public function testShuffle()
    {
        $gen = new ShuffledAlphabetKeyGenerator('abc');
        $this->assertTrue(strlen($gen->generateKey()) == 3);
    }
}
