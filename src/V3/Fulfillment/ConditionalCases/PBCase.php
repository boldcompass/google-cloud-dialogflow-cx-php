<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/fulfillment.proto

namespace Google\Cloud\Dialogflow\Cx\V3\Fulfillment\ConditionalCases;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Each case has a Boolean condition. When it is evaluated to be True, the
 * corresponding messages will be selected and evaluated recursively.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.Fulfillment.ConditionalCases.Case</code>
 */
class PBCase extends \Google\Protobuf\Internal\Message
{
    /**
     * The condition to activate and select this case. Empty means the
     * condition is always true. The condition is evaluated against [form
     * parameters][Form.parameters] or [session
     * parameters][SessionInfo.parameters].
     * See the [conditions
     * reference](https://cloud.google.com/dialogflow/cx/docs/reference/condition).
     *
     * Generated from protobuf field <code>string condition = 1;</code>
     */
    protected $condition = '';
    /**
     * A list of case content.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.Fulfillment.ConditionalCases.Case.CaseContent case_content = 2;</code>
     */
    private $case_content;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $condition
     *           The condition to activate and select this case. Empty means the
     *           condition is always true. The condition is evaluated against [form
     *           parameters][Form.parameters] or [session
     *           parameters][SessionInfo.parameters].
     *           See the [conditions
     *           reference](https://cloud.google.com/dialogflow/cx/docs/reference/condition).
     *     @type \Google\Cloud\Dialogflow\Cx\V3\Fulfillment\ConditionalCases\PBCase\CaseContent[]|\Google\Protobuf\Internal\RepeatedField $case_content
     *           A list of case content.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Fulfillment::initOnce();
        parent::__construct($data);
    }

    /**
     * The condition to activate and select this case. Empty means the
     * condition is always true. The condition is evaluated against [form
     * parameters][Form.parameters] or [session
     * parameters][SessionInfo.parameters].
     * See the [conditions
     * reference](https://cloud.google.com/dialogflow/cx/docs/reference/condition).
     *
     * Generated from protobuf field <code>string condition = 1;</code>
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * The condition to activate and select this case. Empty means the
     * condition is always true. The condition is evaluated against [form
     * parameters][Form.parameters] or [session
     * parameters][SessionInfo.parameters].
     * See the [conditions
     * reference](https://cloud.google.com/dialogflow/cx/docs/reference/condition).
     *
     * Generated from protobuf field <code>string condition = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCondition($var)
    {
        GPBUtil::checkString($var, True);
        $this->condition = $var;

        return $this;
    }

    /**
     * A list of case content.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.Fulfillment.ConditionalCases.Case.CaseContent case_content = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCaseContent()
    {
        return $this->case_content;
    }

    /**
     * A list of case content.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.Fulfillment.ConditionalCases.Case.CaseContent case_content = 2;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\Fulfillment\ConditionalCases\PBCase\CaseContent[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCaseContent($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\Cx\V3\Fulfillment\ConditionalCases\PBCase\CaseContent::class);
        $this->case_content = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PBCase::class, \Google\Cloud\Dialogflow\Cx\V3\Fulfillment_ConditionalCases_Case::class);

