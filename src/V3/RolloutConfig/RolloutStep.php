<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/experiment.proto

namespace Google\Cloud\Dialogflow\Cx\V3\RolloutConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single rollout step with specified traffic allocation.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.RolloutConfig.RolloutStep</code>
 */
class RolloutStep extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the rollout step;
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     */
    protected $display_name = '';
    /**
     * The percentage of traffic allocated to the flow version of this rollout
     * step. (0%, 100%].
     *
     * Generated from protobuf field <code>int32 traffic_percent = 2;</code>
     */
    protected $traffic_percent = 0;
    /**
     * The minimum time that this step should last. Should be longer than 1
     * hour. If not set, the default minimum duration for each step will be 1
     * hour.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_duration = 3;</code>
     */
    protected $min_duration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           The name of the rollout step;
     *     @type int $traffic_percent
     *           The percentage of traffic allocated to the flow version of this rollout
     *           step. (0%, 100%].
     *     @type \Google\Protobuf\Duration $min_duration
     *           The minimum time that this step should last. Should be longer than 1
     *           hour. If not set, the default minimum duration for each step will be 1
     *           hour.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Experiment::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the rollout step;
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The name of the rollout step;
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * The percentage of traffic allocated to the flow version of this rollout
     * step. (0%, 100%].
     *
     * Generated from protobuf field <code>int32 traffic_percent = 2;</code>
     * @return int
     */
    public function getTrafficPercent()
    {
        return $this->traffic_percent;
    }

    /**
     * The percentage of traffic allocated to the flow version of this rollout
     * step. (0%, 100%].
     *
     * Generated from protobuf field <code>int32 traffic_percent = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTrafficPercent($var)
    {
        GPBUtil::checkInt32($var);
        $this->traffic_percent = $var;

        return $this;
    }

    /**
     * The minimum time that this step should last. Should be longer than 1
     * hour. If not set, the default minimum duration for each step will be 1
     * hour.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_duration = 3;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMinDuration()
    {
        return $this->min_duration;
    }

    public function hasMinDuration()
    {
        return isset($this->min_duration);
    }

    public function clearMinDuration()
    {
        unset($this->min_duration);
    }

    /**
     * The minimum time that this step should last. Should be longer than 1
     * hour. If not set, the default minimum duration for each step will be 1
     * hour.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_duration = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMinDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->min_duration = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RolloutStep::class, \Google\Cloud\Dialogflow\Cx\V3\RolloutConfig_RolloutStep::class);

