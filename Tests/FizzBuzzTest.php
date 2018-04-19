<?php

use PHPUnit\Framework\TestCase;

require 'FizzBuzz.php';

class FizzBuzzTest extends TestCase {
  function testFizzBuzzWith3() {
    $fizzbuzz = New FizzBuzz;
    $this->assertEquals($fizzbuzz->calc(3), "Fizz");
  } // if I want to test for output (print) expectOutputString
// still need to figure out that one, stopped for now
  function testFizzBuzzWith5() {
    $fizzbuzz = New FizzBuzz;
    $this->assertEquals($fizzbuzz->calc(5), "Buzz");
  }

  function testFizzBuzzWith15() {
    $fizzbuzz = New FizzBuzz;
    $this->assertEquals($fizzbuzz->calc(15), "FizzBuzz");
  }

  function testFizzBuzzPrintsNumberIfNoneOfTheAbove() {
    $fizzbuzz = New FizzBuzz;
    $this->assertEquals($fizzbuzz->calc(13), 13);
  }
}
