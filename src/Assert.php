<?php

/**
 * JoeBengalen Assert library.
 *
 * @author    Martijn Wennink <joebengalen@gmail.com>
 * @copyright Copyright (c) 2015 Martijn Wennink
 * @link      https://github.com/JoeBengalen/Assert
 * @license   MIT
 */

namespace JoeBengalen\Assert;

use InvalidArgumentException;
use Traversable;

/**
 * Assertion class to validate arguments.
 */
class Assert
{
    /**
     * Assert that the value is boolean.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isBoolean($value, $message = null)
    {
        if (!is_bool($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected boolean, but got %s',
                Helper::typeToString($value)
            ));
        }
    }

    /**
     * Assert that the value is integer.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isInteger($value, $message = null)
    {
        if (!is_int($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected integer, but got %s',
                Helper::typeToString($value)
            ));
        }
    }

    /**
     * Assert that the value is numeric.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isNumeric($value, $message = null)
    {
        if (!is_numeric($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected numeric, but got %s',
                Helper::typeToString($value)
            ));
        }
    }

    /**
     * Assert that the value is float.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isFloat($value, $message = null)
    {
        if (!is_float($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected float, but got %s',
                Helper::typeToString($value)
            ));
        }
    }

    /**
     * Assert that the value is string.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isString($value, $message = null)
    {
        if (!is_string($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected string, but got %s',
                Helper::typeToString($value)
            ));
        }
    }

    /**
     * Assert that the value is scalar.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isScalar($value, $message = null)
    {
        if (!is_scalar($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected scalar, but got %s',
                Helper::typeToString($value)
            ));
        }
    }

    /**
     * Assert that the value is array.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isArray($value, $message = null)
    {
        if (!is_array($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected array, but got %s',
                Helper::typeToString($value)
            ));
        }
    }

    /**
     * Assert that the value is callable.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isCallable($value, $message = null)
    {
        if (!is_callable($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected callable, but got %s',
                Helper::typeToString($value)
            ));
        }
    }

    /**
     * Assert that the value is instance of class.
     *
     * @param mixed  $value
     * @param string $class
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isInstanceOf($value, $class, $message = null)
    {
        if (!$value instanceof $class) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected instance of %2$s, but got %s',
                Helper::typeToString($value),
                $class
            ));
        }
    }

    /**
     * Assert that the value is traversable.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isTraversable($value, $message = null)
    {
        if (!is_array($value) && !$value instanceof Traversable) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected traversable, but got %s',
                Helper::typeToString($value)
            ));
        }
    }

    /**
     * Assert that the value is resource.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isResource($value, $message = null)
    {
        if (!is_resource($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected resource, but got %s',
                Helper::typeToString($value)
            ));
        }
    }

    /**
     * Assert that the value is directory.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isDirectory($value, $message = null)
    {
        if (!is_string($value) || !is_dir($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected directory, but got %s',
                Helper::valueToString($value)
            ));
        }
    }

    /**
     * Assert that the value is file.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isFile($value, $message = null)
    {
        if (!is_string($value) || !is_file($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected file, but got %s',
                Helper::valueToString($value)
            ));
        }
    }

    /**
     * Assert that the value is null or boolean.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isNullOrBoolean($value, $message = null)
    {
        if (!is_null($value) && !is_bool($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected null or boolean, but got %s',
                Helper::typeToString($value)
            ));
        }
    }

    /**
     * Assert that the value is null or integer.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isNullOrInteger($value, $message = null)
    {
        if (!is_null($value) && !is_int($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected null or integer, but got %s',
                Helper::typeToString($value)
            ));
        }
    }

    /**
     * Assert that the value is null or numeric.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isNullOrNumeric($value, $message = null)
    {
        if (!is_null($value) && !is_numeric($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected null or numeric, but got %s',
                Helper::typeToString($value)
            ));
        }
    }

    /**
     * Assert that the value is null or float.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isNullOrFloat($value, $message = null)
    {
        if (!is_null($value) && !is_float($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected null or float, but got %s',
                Helper::typeToString($value)
            ));
        }
    }

    /**
     * Assert that the value is null or string.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isNullOrString($value, $message = null)
    {
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected null or string, but got %s',
                Helper::typeToString($value)
            ));
        }
    }

    /**
     * Assert that the value is null or scalar.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isNullOrScalar($value, $message = null)
    {
        if (!is_null($value) && !is_scalar($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected null or scalar, but got %s',
                Helper::typeToString($value)
            ));
        }
    }

    /**
     * Assert that the value is null or array.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isNullOrArray($value, $message = null)
    {
        if (!is_null($value) && !is_array($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected null or array, but got %s',
                Helper::typeToString($value)
            ));
        }
    }

    /**
     * Assert that the value is null or callable.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isNullOrCallable($value, $message = null)
    {
        if (!is_null($value) && !is_callable($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected null or callable, but got %s',
                Helper::typeToString($value)
            ));
        }
    }

    /**
     * Assert that the value is null or instance of class.
     *
     * @param mixed  $value
     * @param string $class
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isNullOrInstanceOf($value, $class, $message = null)
    {
        if (!is_null($value) && !$value instanceof $class) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected null or instance of %2$s, but got %s',
                Helper::typeToString($value),
                $class
            ));
        }
    }

    /**
     * Assert that the value is null or traversable.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isNullOrTraversable($value, $message = null)
    {
        if (!is_null($value) && !is_array($value) && !$value instanceof Traversable) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected null or traversable, but got %s',
                Helper::typeToString($value)
            ));
        }
    }

    /**
     * Assert that the value is null or resource.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isNullOrResource($value, $message = null)
    {
        if (!is_null($value) && !is_resource($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected null or resource, but got %s',
                Helper::typeToString($value)
            ));
        }
    }

    /**
     * Assert that the value is null or directory.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isNullOrDirectory($value, $message = null)
    {
        if (!is_null($value) && !(is_string($value) && is_dir($value))) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected null or directory, but got %s',
                Helper::valueToString($value)
            ));
        }
    }

    /**
     * Assert that the value is null or file.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function isNullOrFile($value, $message = null)
    {
        if (!is_null($value) && !(is_string($value) && is_file($value))) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected null or file, but got %s',
                Helper::valueToString($value)
            ));
        }
    }

    /**
     * Assert that key exists in value.
     *
     * @param mixed  $value
     * @param string $key
     * @param string $message
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public static function keyExists($value, $key, $message = null)
    {
        if (!array_key_exists($key, $value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected array key %2$s to exist',
                Helper::typeToString($value),
                Helper::valueToString($key)
            ));
        }
    }
}
