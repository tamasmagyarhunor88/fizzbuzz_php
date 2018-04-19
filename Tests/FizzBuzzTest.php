<?php

use PHPUnit\Framework\TestCase;

require 'FizzBuzz.php';

class FizzBuzzTest extends TestCase {
  function testFizzBuzzWith3() {
    $fizzbuzz = New FizzBuzz;
    $this->assertEquals($fizzbuzz->calc(3), 'Fizz');
  }
}
