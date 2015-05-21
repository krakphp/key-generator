<?php

namespace Krak\KeyGenerator;

class MaxLengthKeyGenerator implements KeyGenerator
{
    private $gen;
    private $length;

    public function __construct(KeyGenerator $gen, $length)
    {
        $this->gen = $gen;
        $this->length = $length;
    }

    public function generateKey()
    {
        return $this->generateKeyAtMaxLength($this->length);
    }

    public function generateKeyAtMaxLength($length)
    {
        return substr($this->gen->generateKey(), 0, $this->length);
    }
}
