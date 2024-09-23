<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Egor\Task\Cipher;

class CipherTest extends TestCase
{
    public function testCipherWithRussianTextAndPositiveKey()
    {
        $result = Cipher::cipher('абвгд', 1);
        $this->assertEquals('бвгде', $result);
    }
    
    public function testCipherWithEnglishTextAndPositiveKey()
    {
        $result = Cipher::cipher('abcde', 2);
        $this->assertEquals('cdefg', $result);
    }

    public function testCipherWithKeyGreaterThanAlphabetLength()
    {
        $result = Cipher::cipher('абвгд', 33); 
        $this->assertEquals('бвгде', $result);
    }

    public function testCipherWithNonAlphabetCharacters()
    {
        $result = Cipher::cipher('абвгд123', 1);
        $this->assertEquals('бвгде123', $result);
    }

    public function testCipherWithNegativeKey()
    {
        $result = Cipher::cipher('бвгде', -1);
        $this->assertEquals('абвгд', $result);
    }
}