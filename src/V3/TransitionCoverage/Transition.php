<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/test_case.proto

namespace Google\Cloud\Dialogflow\Cx\V3\TransitionCoverage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A transition in a page.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.TransitionCoverage.Transition</code>
 */
class Transition extends \Google\Protobuf\Internal\Message
{
    /**
     * The start node of a transition.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TransitionCoverage.TransitionNode source = 1;</code>
     */
    protected $source = null;
    /**
     * The index of a transition in the transition list. Starting from 0.
     *
     * Generated from protobuf field <code>int32 index = 4;</code>
     */
    protected $index = 0;
    /**
     * The end node of a transition.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TransitionCoverage.TransitionNode target = 2;</code>
     */
    protected $target = null;
    /**
     * Whether or not the transition is covered by at least one of the
     * agent's test cases.
     *
     * Generated from protobuf field <code>bool covered = 3;</code>
     */
    protected $covered = false;
    protected $detail;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\Cx\V3\TransitionCoverage\TransitionNode $source
     *           The start node of a transition.
     *     @type int $index
     *           The index of a transition in the transition list. Starting from 0.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\TransitionCoverage\TransitionNode $target
     *           The end node of a transition.
     *     @type bool $covered
     *           Whether or not the transition is covered by at least one of the
     *           agent's test cases.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\TransitionRoute $transition_route
     *           Intent route or condition route.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\EventHandler $event_handler
     *           Event handler.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\TestCase::initOnce();
        parent::__construct($data);
    }

    /**
     * The start node of a transition.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TransitionCoverage.TransitionNode source = 1;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\TransitionCoverage\TransitionNode|null
     */
    public function getSource()
    {
        return $this->source;
    }

    public function hasSource()
    {
        return isset($this->source);
    }

    public function clearSource()
    {
        unset($this->source);
    }

    /**
     * The start node of a transition.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TransitionCoverage.TransitionNode source = 1;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\TransitionCoverage\TransitionNode $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\TransitionCoverage\TransitionNode::class);
        $this->source = $var;

        return $this;
    }

    /**
     * The index of a transition in the transition list. Starting from 0.
     *
     * Generated from protobuf field <code>int32 index = 4;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * The index of a transition in the transition list. Starting from 0.
     *
     * Generated from protobuf field <code>int32 index = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * The end node of a transition.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TransitionCoverage.TransitionNode target = 2;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\TransitionCoverage\TransitionNode|null
     */
    public function getTarget()
    {
        return $this->target;
    }

    public function hasTarget()
    {
        return isset($this->target);
    }

    public function clearTarget()
    {
        unset($this->target);
    }

    /**
     * The end node of a transition.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TransitionCoverage.TransitionNode target = 2;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\TransitionCoverage\TransitionNode $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\TransitionCoverage\TransitionNode::class);
        $this->target = $var;

        return $this;
    }

    /**
     * Whether or not the transition is covered by at least one of the
     * agent's test cases.
     *
     * Generated from protobuf field <code>bool covered = 3;</code>
     * @return bool
     */
    public function getCovered()
    {
        return $this->covered;
    }

    /**
     * Whether or not the transition is covered by at least one of the
     * agent's test cases.
     *
     * Generated from protobuf field <code>bool covered = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setCovered($var)
    {
        GPBUtil::checkBool($var);
        $this->covered = $var;

        return $this;
    }

    /**
     * Intent route or condition route.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TransitionRoute transition_route = 5;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\TransitionRoute|null
     */
    public function getTransitionRoute()
    {
        return $this->readOneof(5);
    }

    public function hasTransitionRoute()
    {
        return $this->hasOneof(5);
    }

    /**
     * Intent route or condition route.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TransitionRoute transition_route = 5;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\TransitionRoute $var
     * @return $this
     */
    public function setTransitionRoute($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\TransitionRoute::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Event handler.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.EventHandler event_handler = 6;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\EventHandler|null
     */
    public function getEventHandler()
    {
        return $this->readOneof(6);
    }

    public function hasEventHandler()
    {
        return $this->hasOneof(6);
    }

    /**
     * Event handler.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.EventHandler event_handler = 6;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\EventHandler $var
     * @return $this
     */
    public function setEventHandler($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\EventHandler::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDetail()
    {
        return $this->whichOneof("detail");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Transition::class, \Google\Cloud\Dialogflow\Cx\V3\TransitionCoverage_Transition::class);

