<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Egor\Task\ArrayUnique;

class ArrayUniqueTest extends TestCase
{
  public function testArrayWithDuplicates()
  {
    $result = ArrayUnique::arrayUnique([442, 442, 442, 78, 95, 56]);
    $this->assertEquals([442, 78, 95, 56], $result);
  }

  public function testArrayWithoutDuplicates()
  {
    $result = ArrayUnique::arrayUnique([1, 2, 3, 4, 5]);
    $this->assertEquals([1, 2, 3, 4, 5], $result);
  }

  public function testEmptyArray()
  {
    $result = ArrayUnique::arrayUnique([]);
    $this->assertEquals([], $result);
  }

  public function testArrayWithAllSameElements()
  {
    $result = ArrayUnique::arrayUnique([9, 9, 9, 9, 9]);
    $this->assertEquals([9], $result);
  }

  public function testArrayWithMixedTypes()
  {
    $result = ArrayUnique::arrayUnique([1, '1', 1, '1', true, false, true]);
    $this->assertEquals([1, false], $result);
  }
}