<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: waves/transaction_state_snapshot.proto

namespace Waves\Protobuf\TransactionStateSnapshot;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>waves.TransactionStateSnapshot.Sponsorship</code>
 */
class Sponsorship extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes asset_id = 1;</code>
     */
    protected $asset_id = '';
    /**
     * Generated from protobuf field <code>int64 min_fee = 2;</code>
     */
    protected $min_fee = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $asset_id
     *     @type int|string $min_fee
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
     * Generated from protobuf field <code>int64 min_fee = 2;</code>
     * @return int|string
     */
    public function getMinFee()
    {
        return $this->min_fee;
    }

    /**
     * Generated from protobuf field <code>int64 min_fee = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinFee($var)
    {
        GPBUtil::checkInt64($var);
        $this->min_fee = $var;

        return $this;
    }

}

