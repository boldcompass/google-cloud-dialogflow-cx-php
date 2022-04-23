<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/experiment.proto

namespace Google\Cloud\Dialogflow\Cx\V3\Experiment\Result;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metric and corresponding confidence intervals.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.Experiment.Result.Metric</code>
 */
class Metric extends \Google\Protobuf\Internal\Message
{
    /**
     * Ratio-based metric type. Only one of type or count_type is specified in
     * each Metric.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Experiment.Result.MetricType type = 1;</code>
     */
    protected $type = 0;
    /**
     * Count-based metric type. Only one of type or count_type is specified in
     * each Metric.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Experiment.Result.CountType count_type = 5;</code>
     */
    protected $count_type = 0;
    /**
     * The probability that the treatment is better than all other treatments
     * in the experiment
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Experiment.Result.ConfidenceInterval confidence_interval = 3;</code>
     */
    protected $confidence_interval = null;
    protected $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Ratio-based metric type. Only one of type or count_type is specified in
     *           each Metric.
     *     @type int $count_type
     *           Count-based metric type. Only one of type or count_type is specified in
     *           each Metric.
     *     @type float $ratio
     *           Ratio value of a metric.
     *     @type float $count
     *           Count value of a metric.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\Experiment\Result\ConfidenceInterval $confidence_interval
     *           The probability that the treatment is better than all other treatments
     *           in the experiment
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Experiment::initOnce();
        parent::__construct($data);
    }

    /**
     * Ratio-based metric type. Only one of type or count_type is specified in
     * each Metric.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Experiment.Result.MetricType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Ratio-based metric type. Only one of type or count_type is specified in
     * each Metric.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Experiment.Result.MetricType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\Cx\V3\Experiment\Result\MetricType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Count-based metric type. Only one of type or count_type is specified in
     * each Metric.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Experiment.Result.CountType count_type = 5;</code>
     * @return int
     */
    public function getCountType()
    {
        return $this->count_type;
    }

    /**
     * Count-based metric type. Only one of type or count_type is specified in
     * each Metric.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Experiment.Result.CountType count_type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setCountType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\Cx\V3\Experiment\Result\CountType::class);
        $this->count_type = $var;

        return $this;
    }

    /**
     * Ratio value of a metric.
     *
     * Generated from protobuf field <code>double ratio = 2;</code>
     * @return float
     */
    public function getRatio()
    {
        return $this->readOneof(2);
    }

    public function hasRatio()
    {
        return $this->hasOneof(2);
    }

    /**
     * Ratio value of a metric.
     *
     * Generated from protobuf field <code>double ratio = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setRatio($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Count value of a metric.
     *
     * Generated from protobuf field <code>double count = 4;</code>
     * @return float
     */
    public function getCount()
    {
        return $this->readOneof(4);
    }

    public function hasCount()
    {
        return $this->hasOneof(4);
    }

    /**
     * Count value of a metric.
     *
     * Generated from protobuf field <code>double count = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * The probability that the treatment is better than all other treatments
     * in the experiment
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Experiment.Result.ConfidenceInterval confidence_interval = 3;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\Experiment\Result\ConfidenceInterval|null
     */
    public function getConfidenceInterval()
    {
        return $this->confidence_interval;
    }

    public function hasConfidenceInterval()
    {
        return isset($this->confidence_interval);
    }

    public function clearConfidenceInterval()
    {
        unset($this->confidence_interval);
    }

    /**
     * The probability that the treatment is better than all other treatments
     * in the experiment
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Experiment.Result.ConfidenceInterval confidence_interval = 3;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\Experiment\Result\ConfidenceInterval $var
     * @return $this
     */
    public function setConfidenceInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\Experiment\Result\ConfidenceInterval::class);
        $this->confidence_interval = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->whichOneof("value");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Metric::class, \Google\Cloud\Dialogflow\Cx\V3\Experiment_Result_Metric::class);

