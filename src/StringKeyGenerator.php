<?php

namespace Krak\KeyGenerator;

class StringKeyGenerator implements KeyGenerator
{
    private $key;

    public function __construct($key)
    {
        $this->key = $key;
    }

    public function generateKey()
    {
        return $this->key;
    }
}
