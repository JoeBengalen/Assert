<?php

/**
 * JoeBengalen Assert library.
 *
 * @author    Martijn Wennink <joebengalen@gmail.com>
 * @copyright Copyright (c) 2015-2016 Martijn Wennink
 * @link      https://github.com/JoeBengalen/Assert
 * @license   MIT
 */

namespace JoeBengalen\Assert\Test;

use InvalidArgumentException;
use JoeBengalen\Assert\Assert;
use PHPUnit_Framework_TestCase;
use stdClass;

/**
 * @coversDefaultClass JoeBengalen\Assert\Assert
 */
class AssertTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers ::isBoolean
     */
    public function testCanAssertBoolean()
    {
        Assert::isBoolean(true);
        Assert::isBoolean(false);
    }

    /**
     * @covers ::isBoolean
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected boolean, but got null
     */
    public function testAssertingInvalidBooleanThrowsException()
    {
        Assert::isBoolean(null);
    }

    /**
     * @covers ::isBoolean
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with null
     */
    public function testAssertingInvalidBooleanCanThrowExceptionWithCustomMessage()
    {
        Assert::isBoolean(null, 'Custom message with %s');
    }

    /**
     * @covers ::isInteger
     */
    public function testCanAssertInteger()
    {
        Assert::isInteger(0);
        Assert::isInteger(1);
        Assert::isInteger(2147483647); // max int on 32 bit sytem
        Assert::isInteger(-2);
    }

    /**
     * @covers ::isInteger
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected integer, but got double
     */
    public function testAssertingInvalidIntegerThrowsException()
    {
        Assert::isInteger(1.2);
    }

    /**
     * @covers ::isInteger
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with null
     */
    public function testAssertingInvalidIntegerCanThrowExceptionWithCustomMessage()
    {
        Assert::isInteger(null, 'Custom message with %s');
    }

    /**
     * @covers ::isNumeric
     */
    public function testCanAssertNumeric()
    {
        Assert::isNumeric(0);
        Assert::isNumeric('0');
        Assert::isNumeric(1);
        Assert::isNumeric('1');
        Assert::isNumeric(2147483647); // max int on 32 bit sytem
        Assert::isNumeric('2147483647');
        Assert::isNumeric(-2);
        Assert::isNumeric('-2');
    }

    /**
     * @covers ::isNumeric
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected numeric, but got string
     */
    public function testAssertingInvalidNumericThrowsException()
    {
        Assert::isNumeric('nonNumeric');
    }

    /**
     * @covers ::isNumeric
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with null
     */
    public function testAssertingInvalidNumericCanThrowExceptionWithCustomMessage()
    {
        Assert::isNumeric(null, 'Custom message with %s');
    }

    /**
     * @covers ::isFloat
     */
    public function testCanAssertFloat()
    {
        Assert::isFloat(1.222222);
        Assert::isFloat(-0.33);
    }

    /**
     * @covers ::isFloat
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected float, but got integer
     */
    public function testAssertingInvalidFloatThrowsException()
    {
        Assert::isFloat(1);
    }

    /**
     * @covers ::isFloat
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with null
     */
    public function testAssertingInvalidFloatCanThrowExceptionWithCustomMessage()
    {
        Assert::isFloat(null, 'Custom message with %s');
    }

    /**
     * @covers ::isString
     */
    public function testCanAssertString()
    {
        Assert::isString('');
        Assert::isString('something');
        Assert::isString('123');
    }

    /**
     * @covers ::isString
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected string, but got boolean
     */
    public function testAssertingInvalidStringThrowsException()
    {
        Assert::isString(true);
    }

    /**
     * @covers ::isString
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with null
     */
    public function testAssertingInvalidStringCanThrowExceptionWithCustomMessage()
    {
        Assert::isString(null, 'Custom message with %s');
    }

    /**
     * @covers ::isScalar
     */
    public function testCanAssertScalar()
    {
        Assert::isScalar(true);
        Assert::isScalar(false);
        Assert::isScalar(0);
        Assert::isScalar(-1);
        Assert::isScalar(1);
        Assert::isScalar(99);
        Assert::isScalar(1.23);
        Assert::isScalar('something');
        Assert::isScalar('123');
    }

    /**
     * @covers ::isScalar
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected scalar, but got array
     */
    public function testAssertingInvalidScalarThrowsException()
    {
        Assert::isScalar([]);
    }

    /**
     * @covers ::isScalar
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with null
     */
    public function testAssertingInvalidScalarCanThrowExceptionWithCustomMessage()
    {
        Assert::isScalar(null, 'Custom message with %s');
    }

    /**
     * @covers ::isArray
     */
    public function testCanAssertArray()
    {
        Assert::isArray([]);
        Assert::isArray([1, 2, 3]);
    }

    /**
     * @covers ::isArray
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected array, but got null
     */
    public function testAssertingInvalidArrayThrowsException()
    {
        Assert::isArray(null);
    }

    /**
     * @covers ::isArray
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with null
     */
    public function testAssertingInvalidArrayCanThrowExceptionWithCustomMessage()
    {
        Assert::isArray(null, 'Custom message with %s');
    }

    /**
     * @covers ::isCallable
     */
    public function testCanAssertCallable()
    {
        Assert::isCallable(function () {});
        Assert::isCallable('is_callable');
    }

    /**
     * @covers ::isCallable
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected callable, but got null
     */
    public function testAssertingInvalidCallableThrowsException()
    {
        Assert::isCallable(null);
    }

    /**
     * @covers ::isCallable
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with null
     */
    public function testAssertingInvalidCallableCanThrowExceptionWithCustomMessage()
    {
        Assert::isCallable(null, 'Custom message with %s');
    }

    /**
     * @covers ::isInstanceOf
     */
    public function testCanAssertInstanceOf()
    {
        Assert::isInstanceOf(new stdClass(), 'stdClass');
        Assert::isInstanceOf($this, 'PHPUnit_Framework_TestCase');
    }

    /**
     * @covers ::isInstanceOf
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected instance of stdClass, but got null
     */
    public function testAssertingInvalidInstanceOfThrowsException()
    {
        Assert::isInstanceOf(null, 'stdClass');
    }

    /**
     * @covers ::isInstanceOf
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage got: null expected: stdClass
     */
    public function testAssertingInvalidInstanceOfCanThrowExceptionWithCustomMessage()
    {
        Assert::isInstanceOf(null, 'stdClass', 'got: %s expected: %s');
    }

    /**
     * @covers ::isTraversable
     */
    public function testCanAssertTraversable()
    {
        Assert::isTraversable([]);
        Assert::isTraversable($this->getMock('\Traversable'));
    }

    /**
     * @covers ::isTraversable
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected traversable, but got null
     */
    public function testAssertingInvalidTraversableThrowsException()
    {
        Assert::isTraversable(null);
    }

    /**
     * @covers ::isTraversable
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with null
     */
    public function testAssertingInvalidTraversableCanThrowExceptionWithCustomMessage()
    {
        Assert::isTraversable(null, 'Custom message with %s');
    }

    /**
     * @covers ::isResource
     */
    public function testCanAssertResource()
    {
        Assert::isResource(fopen('php://temp', 'r'));
    }

    /**
     * @covers ::isResource
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected resource, but got null
     */
    public function testAssertingInvalidResourceThrowsException()
    {
        Assert::isResource(null);
    }

    /**
     * @covers ::isResource
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with null
     */
    public function testAssertingInvalidResourceCanThrowExceptionWithCustomMessage()
    {
        Assert::isResource(null, 'Custom message with %s');
    }

    /**
     * @covers ::isDirectory
     */
    public function testCanAssertDirectory()
    {
        Assert::isDirectory(__DIR__);
    }

    /**
     * @covers ::isDirectory
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected directory, but got "nonExistant"
     */
    public function testAssertingInvalidDirectoryThrowsException()
    {
        Assert::isDirectory('nonExistant');
    }

    /**
     * @covers ::isDirectory
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with stdClass
     */
    public function testAssertingInvalidDirectoryCanThrowExceptionWithCustomMessage()
    {
        Assert::isDirectory(new stdClass(), 'Custom message with %s');
    }

    /**
     * @covers ::isFile
     */
    public function testCanAssertFile()
    {
        Assert::isFile(__FILE__);
    }

    /**
     * @covers ::isFile
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected file, but got "nonExistant"
     */
    public function testAssertingInvalidFileThrowsException()
    {
        Assert::isFile('nonExistant');
    }

    /**
     * @covers ::isFile
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with stdClass
     */
    public function testAssertingInvalidFileCanThrowExceptionWithCustomMessage()
    {
        Assert::isFile(new stdClass(), 'Custom message with %s');
    }

    /**
     * @covers ::isNullOrBoolean
     */
    public function testCanAssertNullOrBoolean()
    {
        Assert::isNullOrBoolean(null);
        Assert::isNullOrBoolean(true);
        Assert::isNullOrBoolean(false);
    }

    /**
     * @covers ::isNullOrBoolean
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected null or boolean, but got integer
     */
    public function testAssertingInvalidNullOrBooleanThrowsException()
    {
        Assert::isNullOrBoolean(1);
    }

    /**
     * @covers ::isNullOrBoolean
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with integer
     */
    public function testAssertingInvalidNullOrBooleanCanThrowExceptionWithCustomMessage()
    {
        Assert::isNullOrBoolean(1, 'Custom message with %s');
    }

    /**
     * @covers ::isNullOrInteger
     */
    public function testCanAssertNullOrInteger()
    {
        Assert::isNullOrInteger(null);
        Assert::isNullOrInteger(0);
        Assert::isNullOrInteger(1);
        Assert::isNullOrInteger(2147483647); // max int on 32 bit sytem
        Assert::isNullOrInteger(-2);
    }

    /**
     * @covers ::isNullOrInteger
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected null or integer, but got double
     */
    public function testAssertingInvalidNullOrIntegerThrowsException()
    {
        Assert::isNullOrInteger(1.2);
    }

    /**
     * @covers ::isNullOrInteger
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with double
     */
    public function testAssertingInvalidNullOrIntegerCanThrowExceptionWithCustomMessage()
    {
        Assert::isNullOrInteger(1.2, 'Custom message with %s');
    }

    /**
     * @covers ::isNullOrNumeric
     */
    public function testCanAssertNullOrNumeric()
    {
        Assert::isNullOrNumeric(null);
        Assert::isNullOrNumeric(0);
        Assert::isNullOrNumeric('0');
        Assert::isNullOrNumeric(1);
        Assert::isNullOrNumeric('1');
        Assert::isNullOrNumeric(2147483647); // max int on 32 bit sytem
        Assert::isNullOrNumeric('2147483647');
        Assert::isNullOrNumeric(-2);
        Assert::isNullOrNumeric('-2');
    }

    /**
     * @covers ::isNullOrNumeric
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected null or numeric, but got string
     */
    public function testAssertingInvalidNullOrNumericThrowsException()
    {
        Assert::isNullOrNumeric('nonNumeric');
    }

    /**
     * @covers ::isNullOrNumeric
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with string
     */
    public function testAssertingInvalidNullOrNumericCanThrowExceptionWithCustomMessage()
    {
        Assert::isNullOrNumeric('nonNumeric', 'Custom message with %s');
    }

    /**
     * @covers ::isNullOrFloat
     */
    public function testCanAssertNullOrFloat()
    {
        Assert::isNullOrFloat(null);
        Assert::isNullOrFloat(1.222222);
        Assert::isNullOrFloat(-0.33);
    }

    /**
     * @covers ::isNullOrFloat
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected null or float, but got integer
     */
    public function testAssertingInvalidNullOrFloatThrowsException()
    {
        Assert::isNullOrFloat(1);
    }

    /**
     * @covers ::isNullOrFloat
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with integer
     */
    public function testAssertingInvalidNullOrFloatCanThrowExceptionWithCustomMessage()
    {
        Assert::isNullOrFloat(1, 'Custom message with %s');
    }

    /**
     * @covers ::isNullOrString
     */
    public function testCanAssertNullOrString()
    {
        Assert::isNullOrString(null);
        Assert::isNullOrString('');
        Assert::isNullOrString('something');
        Assert::isNullOrString('123');
    }

    /**
     * @covers ::isNullOrString
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected null or string, but got integer
     */
    public function testAssertingInvalidNullOrStringThrowsException()
    {
        Assert::isNullOrString(1);
    }

    /**
     * @covers ::isNullOrString
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with integer
     */
    public function testAssertingInvalidNullOrStringCanThrowExceptionWithCustomMessage()
    {
        Assert::isNullOrString(1, 'Custom message with %s');
    }

    /**
     * @covers ::isNullOrScalar
     */
    public function testCanAssertNullOrScalar()
    {
        Assert::isNullOrScalar(null);
        Assert::isNullOrScalar(true);
        Assert::isNullOrScalar(false);
        Assert::isNullOrScalar(0);
        Assert::isNullOrScalar(-1);
        Assert::isNullOrScalar(1);
        Assert::isNullOrScalar(99);
        Assert::isNullOrScalar(1.23);
        Assert::isNullOrScalar('something');
        Assert::isNullOrScalar('123');
    }

    /**
     * @covers ::isNullOrScalar
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected null or scalar, but got array
     */
    public function testAssertingInvalidNullOrScalarThrowsException()
    {
        Assert::isNullOrScalar([]);
    }

    /**
     * @covers ::isNullOrScalar
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with array
     */
    public function testAssertingInvalidNullOrScalarCanThrowExceptionWithCustomMessage()
    {
        Assert::isNullOrScalar([], 'Custom message with %s');
    }

    /**
     * @covers ::isNullOrArray
     */
    public function testCanAssertNullOrArray()
    {
        Assert::isNullOrArray(null);
        Assert::isNullOrArray([]);
        Assert::isNullOrArray([1, 2, 3]);
    }

    /**
     * @covers ::isNullOrArray
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected null or array, but got integer
     */
    public function testAssertingInvalidNullOrArrayThrowsException()
    {
        Assert::isNullOrArray(1);
    }

    /**
     * @covers ::isNullOrArray
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with integer
     */
    public function testAssertingInvalidNullOrArrayCanThrowExceptionWithCustomMessage()
    {
        Assert::isNullOrArray(1, 'Custom message with %s');
    }

    /**
     * @covers ::isNullOrCallable
     */
    public function testCanAssertNullOrCallable()
    {
        Assert::isNullOrCallable(null);
        Assert::isNullOrCallable(function () {});
        Assert::isNullOrCallable('is_callable');
    }

    /**
     * @covers ::isNullOrCallable
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected null or callable, but got integer
     */
    public function testAssertingInvalidNullOrCallableThrowsException()
    {
        Assert::isNullOrCallable(1);
    }

    /**
     * @covers ::isNullOrCallable
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with integer
     */
    public function testAssertingInvalidNullOrCallableCanThrowExceptionWithCustomMessage()
    {
        Assert::isNullOrCallable(1, 'Custom message with %s');
    }

    /**
     * @covers ::isNullOrInstanceOf
     */
    public function testCanAssertNullOrInstanceOf()
    {
        Assert::isNullOrInstanceOf(null, 'stdClass');
        Assert::isNullOrInstanceOf(new stdClass(), 'stdClass');
        Assert::isNullOrInstanceOf($this, 'PHPUnit_Framework_TestCase');
    }

    /**
     * @covers ::isNullOrInstanceOf
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected null or instance of stdClass, but got integer
     */
    public function testAssertingInvalidNullOrInstanceOfThrowsException()
    {
        Assert::isNullOrInstanceOf(1, 'stdClass');
    }

    /**
     * @covers ::isNullOrInstanceOf
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage got: integer expected: stdClass
     */
    public function testAssertingInvalidNullOrInstanceOfCanThrowExceptionWithCustomMessage()
    {
        Assert::isNullOrInstanceOf(1, 'stdClass', 'got: %s expected: %s');
    }

    /**
     * @covers ::isNullOrTraversable
     */
    public function testCanAssertNullOrTraversable()
    {
        Assert::isNullOrTraversable(null);
        Assert::isNullOrTraversable([]);
        Assert::isNullOrTraversable($this->getMock('\Traversable'));
    }

    /**
     * @covers ::isNullOrTraversable
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected null or traversable, but got integer
     */
    public function testAssertingInvalidNullOrTraversableThrowsException()
    {
        Assert::isNullOrTraversable(1);
    }

    /**
     * @covers ::isNullOrTraversable
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with integer
     */
    public function testAssertingInvalidNullOrTraversableCanThrowExceptionWithCustomMessage()
    {
        Assert::isNullOrTraversable(1, 'Custom message with %s');
    }

    /**
     * @covers ::isNullOrResource
     */
    public function testCanAssertNullOrResource()
    {
        Assert::isNullOrResource(null);
        Assert::isNullOrResource(fopen('php://temp', 'r'));
    }

    /**
     * @covers ::isNullOrResource
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected null or resource, but got integer
     */
    public function testAssertingInvalidNullOrResourceThrowsException()
    {
        Assert::isNullOrResource(1);
    }

    /**
     * @covers ::isNullOrResource
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with integer
     */
    public function testAssertingInvalidNullOrResourceCanThrowExceptionWithCustomMessage()
    {
        Assert::isNullOrResource(1, 'Custom message with %s');
    }

    /**
     * @covers ::isNullOrDirectory
     */
    public function testCanAssertNullOrDirectory()
    {
        Assert::isNullOrDirectory(null);
        Assert::isNullOrDirectory(__DIR__);
    }

    /**
     * @covers ::isNullOrDirectory
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected null or directory, but got "nonExistant"
     */
    public function testAssertingInvalidNullOrDirectoryThrowsException()
    {
        Assert::isNullOrDirectory('nonExistant');
    }

    /**
     * @covers ::isNullOrDirectory
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with stdClass
     */
    public function testAssertingInvalidNullOrDirectoryCanThrowExceptionWithCustomMessage()
    {
        Assert::isNullOrDirectory(new stdClass(), 'Custom message with %s');
    }

    /**
     * @covers ::isNullOrFile
     */
    public function testCanAssertNullOrFile()
    {
        Assert::isNullOrFile(null);
        Assert::isNullOrFile(__FILE__);
    }

    /**
     * @covers ::isNullOrFile
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected null or file, but got "nonExistant"
     */
    public function testAssertingInvalidNullOrFileThrowsException()
    {
        Assert::isNullOrFile('nonExistant');
    }

    /**
     * @covers ::isNullOrFile
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Custom message with stdClass
     */
    public function testAssertingInvalidNullOrFileCanThrowExceptionWithCustomMessage()
    {
        Assert::isNullOrFile(new stdClass(), 'Custom message with %s');
    }

    /**
     * @covers ::keyExists
     */
    public function testCanAssertKeyExists()
    {
        $value = [
            'key1' => 'val1',
            'key2' => 'val2',
        ];

        Assert::keyExists($value, 'key1');
    }

    /**
     * @covers ::keyExists
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected array key "key3" to exist
     */
    public function testAssertingInvalidKeyExistsThrowsException()
    {
        $value = [
            'key1' => 'val1',
            'key2' => 'val2',
        ];

        Assert::keyExists($value, 'key3');
    }

    /**
     * @covers ::keyExists
     *
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage got: stdClass expected to have key: null
     */
    public function testAssertingInvalidKeyExistsCanThrowExceptionWithCustomMessage()
    {
        Assert::keyExists(new stdClass(), null, 'got: %s expected to have key: %s');
    }
}
