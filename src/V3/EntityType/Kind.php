<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/entity_type.proto

namespace Google\Cloud\Dialogflow\Cx\V3\EntityType;

use UnexpectedValueException;

/**
 * Represents kinds of entities.
 *
 * Protobuf type <code>google.cloud.dialogflow.cx.v3.EntityType.Kind</code>
 */
class Kind
{
    /**
     * Not specified. This value should be never used.
     *
     * Generated from protobuf enum <code>KIND_UNSPECIFIED = 0;</code>
     */
    const KIND_UNSPECIFIED = 0;
    /**
     * Map entity types allow mapping of a group of synonyms to a canonical
     * value.
     *
     * Generated from protobuf enum <code>KIND_MAP = 1;</code>
     */
    const KIND_MAP = 1;
    /**
     * List entity types contain a set of entries that do not map to canonical
     * values. However, list entity types can contain references to other entity
     * types (with or without aliases).
     *
     * Generated from protobuf enum <code>KIND_LIST = 2;</code>
     */
    const KIND_LIST = 2;
    /**
     * Regexp entity types allow to specify regular expressions in entries
     * values.
     *
     * Generated from protobuf enum <code>KIND_REGEXP = 3;</code>
     */
    const KIND_REGEXP = 3;

    private static $valueToName = [
        self::KIND_UNSPECIFIED => 'KIND_UNSPECIFIED',
        self::KIND_MAP => 'KIND_MAP',
        self::KIND_LIST => 'KIND_LIST',
        self::KIND_REGEXP => 'KIND_REGEXP',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Kind::class, \Google\Cloud\Dialogflow\Cx\V3\EntityType_Kind::class);

