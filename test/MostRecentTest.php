<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Egor\Task\MostRecent;


class MostRecentTest extends TestCase
{
  public function testMostRecentWithRegularInput()
    {
        $result = mostRecent::mostRecent('228 228 228 mq mq mq mq');
        $this->assertEquals('mq', $result);
    }

    public function testMostRecentWithSingleWord()
    {
        $result = mostRecent::mostRecent('hello');
        $this->assertEquals('hello', $result);
    }

    public function testMostRecentWithEmptyString()
    {
        $result = mostRecent::mostRecent('');
        $this->assertEquals('', $result);
    }

    public function testMostRecentWithEqualWordFrequency()
    {
        $result = mostRecent::mostRecent('apple banana apple banana');
        $this->assertEquals('apple banana', $result);
    }

    public function testMostRecentWithSpaces()
    {
        $result = mostRecent::mostRecent( 'apple  melon  apple');
        $this->assertEquals('apple', $result);
    }
}