<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/page.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A form is a data model that groups related parameters that can be collected
 * from the user. The process in which the agent prompts the user and collects
 * parameter values from the user is called form filling. A form can be added to
 * a [page][google.cloud.dialogflow.cx.v3.Page]. When form filling is done, the filled parameters will be
 * written to the [session][google.cloud.dialogflow.cx.v3.SessionInfo.parameters].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.Form</code>
 */
class Form extends \Google\Protobuf\Internal\Message
{
    /**
     * Parameters to collect from the user.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.Form.Parameter parameters = 1;</code>
     */
    private $parameters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\Cx\V3\Form\Parameter[]|\Google\Protobuf\Internal\RepeatedField $parameters
     *           Parameters to collect from the user.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Page::initOnce();
        parent::__construct($data);
    }

    /**
     * Parameters to collect from the user.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.Form.Parameter parameters = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Parameters to collect from the user.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.Form.Parameter parameters = 1;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\Form\Parameter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\Cx\V3\Form\Parameter::class);
        $this->parameters = $arr;

        return $this;
    }

}
