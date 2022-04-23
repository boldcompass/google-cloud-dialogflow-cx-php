<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/entity_type.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [EntityTypes.UpdateEntityType][google.cloud.dialogflow.cx.v3.EntityTypes.UpdateEntityType].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.UpdateEntityTypeRequest</code>
 */
class UpdateEntityTypeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The entity type to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.EntityType entity_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $entity_type = null;
    /**
     * The language of the following fields in `entity_type`:
     * *   `EntityType.entities.value`
     * *   `EntityType.entities.synonyms`
     * *   `EntityType.excluded_phrases.value`
     * If not specified, the agent's default language is used.
     * [Many
     * languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     * are supported.
     * Note: languages must be enabled in the agent before they can be used.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     */
    protected $language_code = '';
    /**
     * The mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\Cx\V3\EntityType $entity_type
     *           Required. The entity type to update.
     *     @type string $language_code
     *           The language of the following fields in `entity_type`:
     *           *   `EntityType.entities.value`
     *           *   `EntityType.entities.synonyms`
     *           *   `EntityType.excluded_phrases.value`
     *           If not specified, the agent's default language is used.
     *           [Many
     *           languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     *           are supported.
     *           Note: languages must be enabled in the agent before they can be used.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The mask to control which fields get updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\EntityType::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The entity type to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.EntityType entity_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\EntityType|null
     */
    public function getEntityType()
    {
        return $this->entity_type;
    }

    public function hasEntityType()
    {
        return isset($this->entity_type);
    }

    public function clearEntityType()
    {
        unset($this->entity_type);
    }

    /**
     * Required. The entity type to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.EntityType entity_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\EntityType $var
     * @return $this
     */
    public function setEntityType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\EntityType::class);
        $this->entity_type = $var;

        return $this;
    }

    /**
     * The language of the following fields in `entity_type`:
     * *   `EntityType.entities.value`
     * *   `EntityType.entities.synonyms`
     * *   `EntityType.excluded_phrases.value`
     * If not specified, the agent's default language is used.
     * [Many
     * languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     * are supported.
     * Note: languages must be enabled in the agent before they can be used.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * The language of the following fields in `entity_type`:
     * *   `EntityType.entities.value`
     * *   `EntityType.entities.synonyms`
     * *   `EntityType.excluded_phrases.value`
     * If not specified, the agent's default language is used.
     * [Many
     * languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     * are supported.
     * Note: languages must be enabled in the agent before they can be used.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * The mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

