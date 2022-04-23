<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/security_settings.proto

namespace Google\Cloud\Dialogflow\Cx\V3\SecuritySettings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for exporting conversations to
 * [Insights](https://cloud.google.com/contact-center/insights/docs).
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.SecuritySettings.InsightsExportSettings</code>
 */
class InsightsExportSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * If enabled, we will automatically exports
     * conversations to Insights and Insights runs its analyzers.
     *
     * Generated from protobuf field <code>bool enable_insights_export = 1;</code>
     */
    protected $enable_insights_export = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable_insights_export
     *           If enabled, we will automatically exports
     *           conversations to Insights and Insights runs its analyzers.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\SecuritySettings::initOnce();
        parent::__construct($data);
    }

    /**
     * If enabled, we will automatically exports
     * conversations to Insights and Insights runs its analyzers.
     *
     * Generated from protobuf field <code>bool enable_insights_export = 1;</code>
     * @return bool
     */
    public function getEnableInsightsExport()
    {
        return $this->enable_insights_export;
    }

    /**
     * If enabled, we will automatically exports
     * conversations to Insights and Insights runs its analyzers.
     *
     * Generated from protobuf field <code>bool enable_insights_export = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableInsightsExport($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_insights_export = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InsightsExportSettings::class, \Google\Cloud\Dialogflow\Cx\V3\SecuritySettings_InsightsExportSettings::class);

