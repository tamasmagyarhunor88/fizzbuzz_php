<?php

use PHPUnit\Framework\TestCase;

require 'FizzBuzz.php';

class FizzBuzzTest extends TestCase {
  function testFizzBuzzCalculate() {
    $fizzbuzz = New FizzBuzz;
    $this->assertEquals($fizzbuzz->calc(3), true);
  }
}
