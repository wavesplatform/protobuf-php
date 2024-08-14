<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: waves/transaction_state_snapshot.proto

namespace Waves\Protobuf\TransactionStateSnapshot;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>waves.TransactionStateSnapshot.OrderFill</code>
 */
class OrderFill extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes order_id = 1;</code>
     */
    protected $order_id = '';
    /**
     * Generated from protobuf field <code>int64 volume = 2;</code>
     */
    protected $volume = 0;
    /**
     * Generated from protobuf field <code>int64 fee = 3;</code>
     */
    protected $fee = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $order_id
     *     @type int|string $volume
     *     @type int|string $fee
     * }
     */
    public function __construct($data = NULL) {
        \Waves\ProtobufMetadata\TransactionStateSnapshot::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes order_id = 1;</code>
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * Generated from protobuf field <code>bytes order_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderId($var)
    {
        GPBUtil::checkString($var, False);
        $this->order_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 volume = 2;</code>
     * @return int|string
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Generated from protobuf field <code>int64 volume = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVolume($var)
    {
        GPBUtil::checkInt64($var);
        $this->volume = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 fee = 3;</code>
     * @return int|string
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Generated from protobuf field <code>int64 fee = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFee($var)
    {
        GPBUtil::checkInt64($var);
        $this->fee = $var;

        return $this;
    }

}
