<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace App\Services\Extism\Proto;

use UnexpectedValueException;

/**
 * The direction, descending or ascending, of the sort operation.
 *
 * Protobuf type <code>Direction</code>
 */
class Direction
{
    /**
     * Generated from protobuf enum <code>Desc = 0;</code>
     */
    const Desc = 0;
    /**
     * Generated from protobuf enum <code>Asc = 1;</code>
     */
    const Asc = 1;

    private static $valueToName = [
        self::Desc => 'Desc',
        self::Asc => 'Asc',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

