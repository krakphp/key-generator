<?php

namespace Krak\KeyGenerator;

class ShuffledAlphabetKeyGenerator implements KeyGenerator
{
    const ALPHA_NUMERIC = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_0123456789';

    private $alphabet;

    public function __construct($alphabet = self::ALPHA_NUMERIC)
    {
        $this->alphabet = $alphabet;
    }

    public function generateKey()
    {
        return str_shuffle($this->alphabet);
    }
}
