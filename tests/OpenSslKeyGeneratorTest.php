<?php

namespace Krak\Tests;

use Krak\KeyGenerator\OpenSslKeyGenerator;

class OpenSslKeyGeneratorTest extends \PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $this->assertInstanceOf(OpenSslKeyGenerator::class, new OpenSslKeyGenerator(1));
    }

    public function testBinaryLength()
    {
        $gen = new OpenSslKeyGenerator(4);
        $this->assertTrue(strlen($gen->generateKey()) == 4);
    }
    public function testHexLength()
    {
        $gen = new OpenSslKeyGenerator(4, OpenSslKeyGenerator::HEX);
        $this->assertTrue(strlen($gen->generateKey()) == 8);
    }
    public function testBase64Length()
    {
        $gen = new OpenSslKeyGenerator(4, OpenSslKeyGenerator::BASE64);
        $this->assertTrue(strlen($gen->generateKey()) == 8);
    }
}
