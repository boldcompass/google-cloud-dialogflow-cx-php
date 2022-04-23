<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/flow.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for [Flows.GetFlowValidationResult][google.cloud.dialogflow.cx.v3.Flows.GetFlowValidationResult].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.FlowValidationResult</code>
 */
class FlowValidationResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique identifier of the flow validation result.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/flows/<Flow ID>/validationResult`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Contains all validation messages.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.ValidationMessage validation_messages = 2;</code>
     */
    private $validation_messages;
    /**
     * Last time the flow was validated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3;</code>
     */
    protected $update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The unique identifier of the flow validation result.
     *           Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *           ID>/flows/<Flow ID>/validationResult`.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\ValidationMessage[]|\Google\Protobuf\Internal\RepeatedField $validation_messages
     *           Contains all validation messages.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Last time the flow was validated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Flow::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique identifier of the flow validation result.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/flows/<Flow ID>/validationResult`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The unique identifier of the flow validation result.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/flows/<Flow ID>/validationResult`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Contains all validation messages.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.ValidationMessage validation_messages = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidationMessages()
    {
        return $this->validation_messages;
    }

    /**
     * Contains all validation messages.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.ValidationMessage validation_messages = 2;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\ValidationMessage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidationMessages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\Cx\V3\ValidationMessage::class);
        $this->validation_messages = $arr;

        return $this;
    }

    /**
     * Last time the flow was validated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Last time the flow was validated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

}

