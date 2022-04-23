<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/changelog.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Changelogs.ListChangelogs][google.cloud.dialogflow.cx.v3.Changelogs.ListChangelogs].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.ListChangelogsRequest</code>
 */
class ListChangelogsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The agent containing the changelogs.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The filter string. Supports filter by user_email, resource, type and
     * create_time. Some examples:
     *   1. By user email:
     *        user_email = "someone&#64;google.com"
     *   2. By resource name:
     *        resource = "projects/123/locations/global/agents/456/flows/789"
     *   3. By resource display name:
     *        display_name = "my agent"
     *   4. By action:
     *        action = "Create"
     *   5. By type:
     *        type = "flows"
     *   6. By create time. Currently predicates on `create_time` and
     *      `create_time_epoch_seconds` are supported:
     *        create_time_epoch_seconds > 1551790877 AND create_time <=
     *        2017-01-15T01:30:15.01Z
     *   7. Combination of above filters:
     *        resource = "projects/123/locations/global/agents/456/flows/789"
     *          AND user_email = "someone&#64;google.com"
     *          AND create_time <= 2017-01-15T01:30:15.01Z
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    protected $filter = '';
    /**
     * The maximum number of items to return in a single page. By default 100 and
     * at most 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    protected $page_size = 0;
    /**
     * The next_page_token value returned from a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    protected $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The agent containing the changelogs.
     *           Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
     *     @type string $filter
     *           The filter string. Supports filter by user_email, resource, type and
     *           create_time. Some examples:
     *             1. By user email:
     *                  user_email = "someone&#64;google.com"
     *             2. By resource name:
     *                  resource = "projects/123/locations/global/agents/456/flows/789"
     *             3. By resource display name:
     *                  display_name = "my agent"
     *             4. By action:
     *                  action = "Create"
     *             5. By type:
     *                  type = "flows"
     *             6. By create time. Currently predicates on `create_time` and
     *                `create_time_epoch_seconds` are supported:
     *                  create_time_epoch_seconds > 1551790877 AND create_time <=
     *                  2017-01-15T01:30:15.01Z
     *             7. Combination of above filters:
     *                  resource = "projects/123/locations/global/agents/456/flows/789"
     *                    AND user_email = "someone&#64;google.com"
     *                    AND create_time <= 2017-01-15T01:30:15.01Z
     *     @type int $page_size
     *           The maximum number of items to return in a single page. By default 100 and
     *           at most 1000.
     *     @type string $page_token
     *           The next_page_token value returned from a previous list request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Changelog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The agent containing the changelogs.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The agent containing the changelogs.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
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
     * The filter string. Supports filter by user_email, resource, type and
     * create_time. Some examples:
     *   1. By user email:
     *        user_email = "someone&#64;google.com"
     *   2. By resource name:
     *        resource = "projects/123/locations/global/agents/456/flows/789"
     *   3. By resource display name:
     *        display_name = "my agent"
     *   4. By action:
     *        action = "Create"
     *   5. By type:
     *        type = "flows"
     *   6. By create time. Currently predicates on `create_time` and
     *      `create_time_epoch_seconds` are supported:
     *        create_time_epoch_seconds > 1551790877 AND create_time <=
     *        2017-01-15T01:30:15.01Z
     *   7. Combination of above filters:
     *        resource = "projects/123/locations/global/agents/456/flows/789"
     *          AND user_email = "someone&#64;google.com"
     *          AND create_time <= 2017-01-15T01:30:15.01Z
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * The filter string. Supports filter by user_email, resource, type and
     * create_time. Some examples:
     *   1. By user email:
     *        user_email = "someone&#64;google.com"
     *   2. By resource name:
     *        resource = "projects/123/locations/global/agents/456/flows/789"
     *   3. By resource display name:
     *        display_name = "my agent"
     *   4. By action:
     *        action = "Create"
     *   5. By type:
     *        type = "flows"
     *   6. By create time. Currently predicates on `create_time` and
     *      `create_time_epoch_seconds` are supported:
     *        create_time_epoch_seconds > 1551790877 AND create_time <=
     *        2017-01-15T01:30:15.01Z
     *   7. Combination of above filters:
     *        resource = "projects/123/locations/global/agents/456/flows/789"
     *          AND user_email = "someone&#64;google.com"
     *          AND create_time <= 2017-01-15T01:30:15.01Z
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * The maximum number of items to return in a single page. By default 100 and
     * at most 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of items to return in a single page. By default 100 and
     * at most 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
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
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The next_page_token value returned from a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
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

