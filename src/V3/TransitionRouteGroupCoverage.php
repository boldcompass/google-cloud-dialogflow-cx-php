<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/test_case.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Transition route group coverage represents the percentage of all possible
 * transition routes present within any of a parent's test cases. The results
 * are grouped by the transition route group.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.TransitionRouteGroupCoverage</code>
 */
class TransitionRouteGroupCoverage extends \Google\Protobuf\Internal\Message
{
    /**
     * Transition route group coverages.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.TransitionRouteGroupCoverage.Coverage coverages = 1;</code>
     */
    private $coverages;
    /**
     * The percent of transition routes in all the transition route groups that
     * are covered.
     *
     * Generated from protobuf field <code>float coverage_score = 2;</code>
     */
    protected $coverage_score = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\Cx\V3\TransitionRouteGroupCoverage\Coverage[]|\Google\Protobuf\Internal\RepeatedField $coverages
     *           Transition route group coverages.
     *     @type float $coverage_score
     *           The percent of transition routes in all the transition route groups that
     *           are covered.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\TestCase::initOnce();
        parent::__construct($data);
    }

    /**
     * Transition route group coverages.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.TransitionRouteGroupCoverage.Coverage coverages = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCoverages()
    {
        return $this->coverages;
    }

    /**
     * Transition route group coverages.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.TransitionRouteGroupCoverage.Coverage coverages = 1;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\TransitionRouteGroupCoverage\Coverage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCoverages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\Cx\V3\TransitionRouteGroupCoverage\Coverage::class);
        $this->coverages = $arr;

        return $this;
    }

    /**
     * The percent of transition routes in all the transition route groups that
     * are covered.
     *
     * Generated from protobuf field <code>float coverage_score = 2;</code>
     * @return float
     */
    public function getCoverageScore()
    {
        return $this->coverage_score;
    }

    /**
     * The percent of transition routes in all the transition route groups that
     * are covered.
     *
     * Generated from protobuf field <code>float coverage_score = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setCoverageScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->coverage_score = $var;

        return $this;
    }

}

