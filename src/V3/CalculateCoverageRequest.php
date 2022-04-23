<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/test_case.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [TestCases.CalculateCoverage][google.cloud.dialogflow.cx.v3.TestCases.CalculateCoverage].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.CalculateCoverageRequest</code>
 */
class CalculateCoverageRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The agent to calculate coverage for.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
     *
     * Generated from protobuf field <code>string agent = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $agent = '';
    /**
     * Required. The type of coverage requested.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.CalculateCoverageRequest.CoverageType type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $agent
     *           Required. The agent to calculate coverage for.
     *           Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
     *     @type int $type
     *           Required. The type of coverage requested.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\TestCase::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The agent to calculate coverage for.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
     *
     * Generated from protobuf field <code>string agent = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Required. The agent to calculate coverage for.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
     *
     * Generated from protobuf field <code>string agent = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAgent($var)
    {
        GPBUtil::checkString($var, True);
        $this->agent = $var;

        return $this;
    }

    /**
     * Required. The type of coverage requested.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.CalculateCoverageRequest.CoverageType type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. The type of coverage requested.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.CalculateCoverageRequest.CoverageType type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\Cx\V3\CalculateCoverageRequest\CoverageType::class);
        $this->type = $var;

        return $this;
    }

}

