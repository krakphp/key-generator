<?php

namespace Krak\KeyGenerator;

/**
 * Unsecure Random Key Generator
 */
class UnsecureRandomKeyGenerator implements KeyGenerator
{
    public function generateKey()
    {
        return md5(rand());
    }
}
