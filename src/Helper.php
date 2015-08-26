<?php

namespace JoeBengalen\Assert;

class Helper
{
    /**
     * Transform a type into a user friendly string.
     *
     * @param mixed $value
     *
     * @return string
     */
    public static function typeToString($value)
    {
        if (is_object($value)) {
            return get_class($value);
        }

        return strtolower(gettype($value));
    }

    /**
     * Transform a value into a user friendly string.
     *
     * @param mixed $value
     *
     * @return string
     */
    public static function valueToString($value)
    {
        if (null === $value) {
            return 'null';
        }

        if (true === $value) {
            return 'true';
        }

        if (false === $value) {
            return 'false';
        }

        if (is_array($value)) {
            return 'array(' . count($value) . ')';
        }

        if (is_object($value)) {
            return get_class($value);
        }

        if (is_resource($value)) {
            return 'resource';
        }

        if (is_string($value)) {
            return '"'.$value.'"';
        }

        return (string) $value;
    }
}
