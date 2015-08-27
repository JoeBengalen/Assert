# Assert

[![Build Status](https://travis-ci.org/JoeBengalen/Assert.svg?branch=master)](https://travis-ci.org/JoeBengalen/Assert)
[![Coverage Status](https://coveralls.io/repos/JoeBengalen/Assert/badge.svg?branch=master)](https://coveralls.io/github/JoeBengalen/Assert?branch=master)
[![License](https://poser.pugx.org/joebengalen/assert/license)](LICENSE.md)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/b6f8567d-7a76-47b0-ac36-2908285d0516/mini.png)](https://insight.sensiolabs.com/projects/b6f8567d-7a76-47b0-ac36-2908285d0516)

As we all know when using an existing library we wish some things would be a little different. To make sure I can use assertions exacly how I feel is best I created my own implementation.

The Assert methods are meant to be used to check whether incoming arguments are what you expect them to be. If not an `InvalidArgumentException` is thrown.

I needed all available assertions to be actual method instead of virtual methods in the class PHPDoc, because virtual ones do not work with static methods in netbeans.

## Usage

```php

use Joebengalen\Assert\Assert;

// This would be the incoming variable
$variable = 12;

// Test if $variable contains indeed the expected integer
Assert::isInteger($variable);

// Or with a custom exception message on fail
Assert::isInteger($variable, 'Custom message: got %s but expected boolean value.');
```

## Testing

This project uses [PHPUnit](https://phpunit.de) for tests. PHPUnit is not included as requirement, so to run the tests manually it has to be installed either globally or manually.
