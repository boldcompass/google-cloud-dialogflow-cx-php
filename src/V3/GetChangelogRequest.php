<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/changelog.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Changelogs.GetChangelog][google.cloud.dialogflow.cx.v3.Changelogs.GetChangelog].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.GetChangelogRequest</code>
 */
class GetChangelogRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the changelog to get.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/changelogs/<Changelog ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the changelog to get.
     *           Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *           ID>/changelogs/<Changelog ID>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Changelog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the changelog to get.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/changelogs/<Changelog ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the changelog to get.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/changelogs/<Changelog ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

