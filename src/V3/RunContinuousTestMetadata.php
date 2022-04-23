<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/environment.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata returned for the [Environments.RunContinuousTest][google.cloud.dialogflow.cx.v3.Environments.RunContinuousTest] long running
 * operation.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.RunContinuousTestMetadata</code>
 */
class RunContinuousTestMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The test errors.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.TestError errors = 1;</code>
     */
    private $errors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\Cx\V3\TestError[]|\Google\Protobuf\Internal\RepeatedField $errors
     *           The test errors.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Environment::initOnce();
        parent::__construct($data);
    }

    /**
     * The test errors.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.TestError errors = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * The test errors.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.TestError errors = 1;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\TestError[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\Cx\V3\TestError::class);
        $this->errors = $arr;

        return $this;
    }

}

