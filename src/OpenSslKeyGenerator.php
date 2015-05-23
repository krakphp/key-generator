<?php

namespace Krak\KeyGenerator;

class OpenSslKeyGenerator implements KeyGenerator
{
    const BINARY = 0;
    const HEX = 1;
    const BASE64 = 2;

    private $length;
    private $output;

    public function __construct($length, $output = self::BINARY)
    {
        $this->length = $length;
        $this->output = $output;
    }

    public function generateKey()
    {
        $res = openssl_random_pseudo_bytes($this->length);

        if ($this->output == self::HEX) {
            return bin2hex($res);
        }
        if ($this->output == self::BASE64) {
            return base64_encode($res);
        }

        return $res;
    }
}
