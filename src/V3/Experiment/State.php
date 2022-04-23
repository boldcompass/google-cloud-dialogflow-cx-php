<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/experiment.proto

namespace Google\Cloud\Dialogflow\Cx\V3\Experiment;

use UnexpectedValueException;

/**
 * The state of the experiment.
 *
 * Protobuf type <code>google.cloud.dialogflow.cx.v3.Experiment.State</code>
 */
class State
{
    /**
     * State unspecified.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The experiment is created but not started yet.
     *
     * Generated from protobuf enum <code>DRAFT = 1;</code>
     */
    const DRAFT = 1;
    /**
     * The experiment is running.
     *
     * Generated from protobuf enum <code>RUNNING = 2;</code>
     */
    const RUNNING = 2;
    /**
     * The experiment is done.
     *
     * Generated from protobuf enum <code>DONE = 3;</code>
     */
    const DONE = 3;
    /**
     * The experiment with auto-rollout enabled has failed.
     *
     * Generated from protobuf enum <code>ROLLOUT_FAILED = 4;</code>
     */
    const ROLLOUT_FAILED = 4;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::DRAFT => 'DRAFT',
        self::RUNNING => 'RUNNING',
        self::DONE => 'DONE',
        self::ROLLOUT_FAILED => 'ROLLOUT_FAILED',
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
class_alias(State::class, \Google\Cloud\Dialogflow\Cx\V3\Experiment_State::class);
