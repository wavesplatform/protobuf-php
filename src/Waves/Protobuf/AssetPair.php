<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: waves/order.proto

namespace Waves\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>waves.AssetPair</code>
 */
class AssetPair extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes amount_asset_id = 1;</code>
     */
    protected $amount_asset_id = '';
    /**
     * Generated from protobuf field <code>bytes price_asset_id = 2;</code>
     */
    protected $price_asset_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $amount_asset_id
     *     @type string $price_asset_id
     * }
     */
    public function __construct($data = NULL) {
        \Waves\ProtobufMetadata\Order::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes amount_asset_id = 1;</code>
     * @return string
     */
    public function getAmountAssetId()
    {
        return $this->amount_asset_id;
    }

    /**
     * Generated from protobuf field <code>bytes amount_asset_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAmountAssetId($var)
    {
        GPBUtil::checkString($var, False);
        $this->amount_asset_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes price_asset_id = 2;</code>
     * @return string
     */
    public function getPriceAssetId()
    {
        return $this->price_asset_id;
    }

    /**
     * Generated from protobuf field <code>bytes price_asset_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPriceAssetId($var)
    {
        GPBUtil::checkString($var, False);
        $this->price_asset_id = $var;

        return $this;
    }

}

