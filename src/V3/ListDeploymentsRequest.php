<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/deployment.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Deployments.ListDeployments][google.cloud.dialogflow.cx.v3.Deployments.ListDeployments].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.ListDeploymentsRequest</code>
 */
class ListDeploymentsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The [Environment][google.cloud.dialogflow.cx.v3.Environment] to list all environments for.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/environments/<Environment ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of items to return in a single page. By default 20 and
     * at most 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * The next_page_token value returned from a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The [Environment][google.cloud.dialogflow.cx.v3.Environment] to list all environments for.
     *           Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *           ID>/environments/<Environment ID>`.
     *     @type int $page_size
     *           The maximum number of items to return in a single page. By default 20 and
     *           at most 100.
     *     @type string $page_token
     *           The next_page_token value returned from a previous list request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Deployment::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The [Environment][google.cloud.dialogflow.cx.v3.Environment] to list all environments for.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/environments/<Environment ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The [Environment][google.cloud.dialogflow.cx.v3.Environment] to list all environments for.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/environments/<Environment ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The maximum number of items to return in a single page. By default 20 and
     * at most 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of items to return in a single page. By default 20 and
     * at most 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The next_page_token value returned from a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The next_page_token value returned from a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

