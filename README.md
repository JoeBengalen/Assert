# Assert

[![Build Status](https://travis-ci.org/JoeBengalen/Assert.svg?branch=master)](https://travis-ci.org/JoeBengalen/Assert)
[![Coverage Status](https://coveralls.io/repos/JoeBengalen/Assert/badge.svg?branch=master)](https://coveralls.io/github/JoeBengalen/Assert?branch=master)
[![License](https://poser.pugx.org/joebengalen/assert/license)](LICENSE.md)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/b6f8567d-7a76-47b0-ac36-2908285d0516/mini.png)](https://insight.sensiolabs.com/projects/b6f8567d-7a76-47b0-ac36-2908285d0516)

As we all know when using an existing library we wish some things would be a little different. To make sure I can use assertions exactly how I feel is best, I created my own implementation.

The assert methods are meant to be used to check whether incoming arguments are what you expect them to be. If the variable does nto meet the assertion an `InvalidArgumentException` is thrown.

I needed all available assertions to be actual methods instead of virtual ones in the class PHPDoc, because virtual ones do not work properly with static methods in netbeans.

## Installation

Via [Composer](https://getcomposer.org)

``` bash
$ composer require joebengalen/assert
```

## Usage

```php
use JoeBengalen\Assert\Assert;

/**
 * @param int  $arg1
 * @param bool $arg2
 */
function foo($arg1, $arg2)
{
    // Make sure the arguments are indeed what they should be
    Assert::isInteger($arg1);
    Assert::isBoolean($arg2);

    // Actual code ...
}

// This will be fine ...
foo(12, true);

// ... but this will throw an InvalidArgumentException
foo(2, 4);
```

### Custom exception messages

Sometimes you may want to throw the exception with a different message. This can be done by passing a second string argument into the assertion method.

The error messages are run trough `sprintf()`, where the passed variable, transformed into a useful string, will be available.

```php
Assert::isBoolean(3, 'Custom message: got %s, but expected boolean');
// Throws: "Custom message: got integer, but expected boolean"
```

Some assertion methods take additional arguments which are needed for the assertion. The custom message shall always be the latest argument. Additional arguments will also be passed into `sprintf()`, in the order of the arguments. This means the value to assert will always be the first string passed into `sprintf()`.

```php
Assert::isInstanceOf(new Foo, 'Bar', 'Custom message: got %s, but expected instance of %s');
// Throws: "Custom message: got Foo, but expected instance of Bar"
```

If you want to use the arguments in a different order in the message you can swap them by referring to their number.

```php
Assert::isInstanceOf(new Foo, 'Bar', 'Custom message: expected instance of %2$s, but got %s');
// Throws: "Custom message: expected instance of Bar, but got Foo"
```

For more information on swapping the arguments checkout the php documentation of [sprintf()](http://php.net/manual/en/function.sprintf.php).

## Change log

Please see the [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

This project uses [PHPUnit](https://phpunit.de) for testing. PHPUnit is not included as requirement, so to run the tests phpunit has to be manually installed either globally or manually.
