<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: waves/transaction_state_snapshot.proto

namespace Waves\Protobuf\TransactionStateSnapshot;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>waves.TransactionStateSnapshot.AssetNameAndDescription</code>
 */
class AssetNameAndDescription extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes asset_id = 1;</code>
     */
    protected $asset_id = '';
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $asset_id
     *     @type string $name
     *     @type string $description
     * }
     */
    public function __construct($data = NULL) {
        \Waves\ProtobufMetadata\TransactionStateSnapshot::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes asset_id = 1;</code>
     * @return string
     */
    public function getAssetId()
    {
        return $this->asset_id;
    }

    /**
     * Generated from protobuf field <code>bytes asset_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAssetId($var)
    {
        GPBUtil::checkString($var, False);
        $this->asset_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

