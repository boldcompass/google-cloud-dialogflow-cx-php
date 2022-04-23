<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/response_message.proto

namespace Google\Cloud\Dialogflow\Cx\V3\ResponseMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the signal that telles the client to transfer the phone call
 * connected to the agent to a third-party endpoint.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.ResponseMessage.TelephonyTransferCall</code>
 */
class TelephonyTransferCall extends \Google\Protobuf\Internal\Message
{
    protected $endpoint;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $phone_number
     *           Transfer the call to a phone number
     *           in [E.164 format](https://en.wikipedia.org/wiki/E.164).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\ResponseMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Transfer the call to a phone number
     * in [E.164 format](https://en.wikipedia.org/wiki/E.164).
     *
     * Generated from protobuf field <code>string phone_number = 1;</code>
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->readOneof(1);
    }

    public function hasPhoneNumber()
    {
        return $this->hasOneof(1);
    }

    /**
     * Transfer the call to a phone number
     * in [E.164 format](https://en.wikipedia.org/wiki/E.164).
     *
     * Generated from protobuf field <code>string phone_number = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->whichOneof("endpoint");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TelephonyTransferCall::class, \Google\Cloud\Dialogflow\Cx\V3\ResponseMessage_TelephonyTransferCall::class);

