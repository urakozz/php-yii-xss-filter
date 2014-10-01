<?php

namespace Kozz\Tests;

use PHPUnit_Framework_TestCase;

class LoadTest extends PHPUnit_Framework_TestCase
{
  public function testLoad()
  {
    $this->assertTrue(class_exists('YXssFilter'));
  }
}
