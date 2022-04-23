<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/fulfillment.proto

namespace Google\Cloud\Dialogflow\Cx\V3\Fulfillment;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Setting a parameter value.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.Fulfillment.SetParameterAction</code>
 */
class SetParameterAction extends \Google\Protobuf\Internal\Message
{
    /**
     * Display name of the parameter.
     *
     * Generated from protobuf field <code>string parameter = 1;</code>
     */
    protected $parameter = '';
    /**
     * The new value of the parameter. A null value clears the parameter.
     *
     * Generated from protobuf field <code>.google.protobuf.Value value = 2;</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parameter
     *           Display name of the parameter.
     *     @type \Google\Protobuf\Value $value
     *           The new value of the parameter. A null value clears the parameter.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Fulfillment::initOnce();
        parent::__construct($data);
    }

    /**
     * Display name of the parameter.
     *
     * Generated from protobuf field <code>string parameter = 1;</code>
     * @return string
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Display name of the parameter.
     *
     * Generated from protobuf field <code>string parameter = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParameter($var)
    {
        GPBUtil::checkString($var, True);
        $this->parameter = $var;

        return $this;
    }

    /**
     * The new value of the parameter. A null value clears the parameter.
     *
     * Generated from protobuf field <code>.google.protobuf.Value value = 2;</code>
     * @return \Google\Protobuf\Value|null
     */
    public function getValue()
    {
        return $this->value;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * The new value of the parameter. A null value clears the parameter.
     *
     * Generated from protobuf field <code>.google.protobuf.Value value = 2;</code>
     * @param \Google\Protobuf\Value $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Value::class);
        $this->value = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SetParameterAction::class, \Google\Cloud\Dialogflow\Cx\V3\Fulfillment_SetParameterAction::class);

