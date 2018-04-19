## FizzBuzz in PHP 7.2.4 with PHPUnit 7.0.3
Because of an upcoming tech interview with a company who's working with PHP, I decided to try out the language by a simple TDD project. Our old FizzBuzz friend comes handy every time we want to try out a new language.

### How to install
Make sure you have Composer installed. Composer is a package/dependency manager for PHP just like Bundler for Ruby or NPM for NodeJS
```
$ git clone https://github.com/tamasmagyarhunor88/fizzbuzz_php.git
$ cd fizzbuzz_php
$ composer install                            # install dependencies
$ vendor/bin/phpunit Tests/FizzBuzzTest.php   # run tests
```

### Tests
```
➜  fizzbuzz_php git:(master) php_test
PHPUnit 7.1.4 by Sebastian Bergmann and contributors.

....                                                                4 / 4 (100%)

Time: 54 ms, Memory: 4.00MB

OK (4 tests, 4 assertions)
➜  fizzbuzz_php git:(master) 
```


### Notes
  -  I have tried to find out about a before each method in the tests, but given short time I couldnt work it out, yet.
