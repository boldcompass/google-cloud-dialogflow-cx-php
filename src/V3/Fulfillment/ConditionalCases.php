<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/fulfillment.proto

namespace Google\Cloud\Dialogflow\Cx\V3\Fulfillment;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of cascading if-else conditions. Cases are mutually exclusive.
 * The first one with a matching condition is selected, all the rest ignored.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.Fulfillment.ConditionalCases</code>
 */
class ConditionalCases extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of cascading if-else conditions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.Fulfillment.ConditionalCases.Case cases = 1;</code>
     */
    private $cases;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\Cx\V3\Fulfillment\ConditionalCases\PBCase[]|\Google\Protobuf\Internal\RepeatedField $cases
     *           A list of cascading if-else conditions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Fulfillment::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of cascading if-else conditions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.Fulfillment.ConditionalCases.Case cases = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCases()
    {
        return $this->cases;
    }

    /**
     * A list of cascading if-else conditions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.Fulfillment.ConditionalCases.Case cases = 1;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\Fulfillment\ConditionalCases\PBCase[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\Cx\V3\Fulfillment\ConditionalCases\PBCase::class);
        $this->cases = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConditionalCases::class, \Google\Cloud\Dialogflow\Cx\V3\Fulfillment_ConditionalCases::class);
