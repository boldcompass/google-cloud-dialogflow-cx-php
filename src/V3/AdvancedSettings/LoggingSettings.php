<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/advanced_settings.proto

namespace Google\Cloud\Dialogflow\Cx\V3\AdvancedSettings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define behaviors on logging.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.AdvancedSettings.LoggingSettings</code>
 */
class LoggingSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * If true, StackDriver logging is currently enabled.
     *
     * Generated from protobuf field <code>bool enable_stackdriver_logging = 2;</code>
     */
    protected $enable_stackdriver_logging = false;
    /**
     * If true, DF Interaction logging is currently enabled.
     *
     * Generated from protobuf field <code>bool enable_interaction_logging = 3;</code>
     */
    protected $enable_interaction_logging = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable_stackdriver_logging
     *           If true, StackDriver logging is currently enabled.
     *     @type bool $enable_interaction_logging
     *           If true, DF Interaction logging is currently enabled.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\AdvancedSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * If true, StackDriver logging is currently enabled.
     *
     * Generated from protobuf field <code>bool enable_stackdriver_logging = 2;</code>
     * @return bool
     */
    public function getEnableStackdriverLogging()
    {
        return $this->enable_stackdriver_logging;
    }

    /**
     * If true, StackDriver logging is currently enabled.
     *
     * Generated from protobuf field <code>bool enable_stackdriver_logging = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableStackdriverLogging($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_stackdriver_logging = $var;

        return $this;
    }

    /**
     * If true, DF Interaction logging is currently enabled.
     *
     * Generated from protobuf field <code>bool enable_interaction_logging = 3;</code>
     * @return bool
     */
    public function getEnableInteractionLogging()
    {
        return $this->enable_interaction_logging;
    }

    /**
     * If true, DF Interaction logging is currently enabled.
     *
     * Generated from protobuf field <code>bool enable_interaction_logging = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableInteractionLogging($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_interaction_logging = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LoggingSettings::class, \Google\Cloud\Dialogflow\Cx\V3\AdvancedSettings_LoggingSettings::class);
