<?php

namespace Krak\KeyGenerator;

class OpenSslKeyGenerator implements KeyGenerator
{
    private $length;
    private $to_hex;

    public function __construct($length, $to_hex = true)
    {
        $this->length = $length;
        $this->to_hex = $to_hex;
    }

    public function generateKey()
    {
        if (!$this->to_hex) {
            return openssl_random_pseudo_bytes($this->length);
        }

        return bin2hex(
            openssl_random_pseudo_bytes($this->length / 2)
        );
    }
}
