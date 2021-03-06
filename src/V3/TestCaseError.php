<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/test_case.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Error info for importing a test.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.TestCaseError</code>
 */
class TestCaseError extends \Google\Protobuf\Internal\Message
{
    /**
     * The test case.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TestCase test_case = 1;</code>
     */
    protected $test_case = null;
    /**
     * The status associated with the test case.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 2;</code>
     */
    protected $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\Cx\V3\TestCase $test_case
     *           The test case.
     *     @type \Google\Rpc\Status $status
     *           The status associated with the test case.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\TestCase::initOnce();
        parent::__construct($data);
    }

    /**
     * The test case.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TestCase test_case = 1;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\TestCase|null
     */
    public function getTestCase()
    {
        return $this->test_case;
    }

    public function hasTestCase()
    {
        return isset($this->test_case);
    }

    public function clearTestCase()
    {
        unset($this->test_case);
    }

    /**
     * The test case.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TestCase test_case = 1;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\TestCase $var
     * @return $this
     */
    public function setTestCase($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\TestCase::class);
        $this->test_case = $var;

        return $this;
    }

    /**
     * The status associated with the test case.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 2;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * The status associated with the test case.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 2;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->status = $var;

        return $this;
    }

}

